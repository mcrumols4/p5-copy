<script setup>
import { Head } from '@inertiajs/vue3';
import { ref, computed, onMounted } from 'vue';
import MainLayout from '@/Layouts/MainLayout.vue';
import { router } from '@inertiajs/vue3';
import axios from 'axios';

// Tips for determining the type of questions
const props = defineProps({
  formType: { type: String, required: true },
  formId: { type: Number, required: true }
});

// Reactive variables
const currentQuestionId = ref(null);
const currentQuestion = ref(null);
const selectedAnswers = ref([]);
const finalResult = ref(null);
const loading = ref(true);
const error = ref(null);
const formId = ref(null);
const loadingSubmit = ref(false);
const recommendations = ref({});

// Titles and descriptions based on form type
const titles = computed(() => {
  if (props.formType === 'skin') {
    return {
      main: "Qüestionari de diagnòstic de pell",
      subtitle: "Descobreix quin és el teu tipus de pell i les cures que necessita",
      description: "Aquest qüestionari t'ajudarà a identificar el teu tipus de pell i les seves necessitats específiques. Respon a les preguntes amb sinceritat per obtenir un diagnòstic precís."
    };
  } else {
    return {
      main: "Qüestionari capil·lar",
      subtitle: "Descobreix quin és el teu tipus de cabell i les cures que necessita",
      description: "Aquest qüestionari t'ajudarà a identificar el teu tipus de cabell i les seves necessitats específiques. Respon a les preguntes amb sinceritat per obtenir un diagnòstic precís."
    };
  }
});

// Computers
const currentOptions = computed(() => {
  if (!currentQuestion.value) {
    return [];
  }
  return currentQuestion.value.options || [];
});

// Tipus determinat based on the result
const resultType = computed(() => {
  if (!finalResult.value) return '';
  
  if (props.formType === 'skin') {
    // Para el cuestionario de piel, intentamos determinar el tipo basado en la recomendación
    if (finalResult.value.includes("seca") || finalResult.value.includes("Seca")) {
      return "Pell seca";
    } else if (finalResult.value.includes("greixosa") || finalResult.value.includes("Greixosa") || finalResult.value.includes("grassa")) {
      return "Pell grassa";
    } else if (finalResult.value.includes("mixta")) {
      return "Pell mixta";
    } else if (finalResult.value.includes("sensible")) {
      return "Pell sensible";
    } else {
      return "Pell normal";
    }
  } else {
    // Para el cuestionario de cabello, usamos el código de recomendación directamente
    // Estos códigos coinciden con los definidos en el QuestionnaireSeeder.php
    switch(finalResult.value) {
      case 'TRACTAMENT_HIDRATACIO_INTENSIU':
        return 'Cabell sec amb necessitat d\'hidratació intensa';
      case 'TRACTAMENT_HIDRATACIO_CABELL_SEC':
        return 'Cabell sec';
      case 'CABELL_ENCRESPAT_LLIS':
        return 'Cabell encrespat o llis';
      case 'CABELL_ENCRESPAT_INTENS':
        return 'Cabell encrespat intens';
      case 'TRACTAMENT_VOLUM_REPARADOR':
        return 'Cabell fi que necessita volum i reparació';
      case 'TRACTAMENT_VOLUM':
        return 'Cabell que necessita volum';
      case 'TRACTAMENT_REPARADOR_INTENSIU':
        return 'Cabell danyat que necessita reparació intensa';
      case 'TRACTAMENT_REPARADOR':
        return 'Cabell que necessita reparació';
      case 'ASSESSORAMENT_DE_CUIR_CABELLUT_I_CABELL_GRAS':
        return 'Cabell greixós';
      case 'ASSESSORAMENT_ANTICAIGUDA':
        return 'Cabell amb problemes de caiguda';
      case 'ASSESSORAMENT_CUIR_CABELLUT_SENSIBLES':
        return 'Cuir cabellut sensible o irritat';
      case 'ASSESSORAMENT_CASPA':
        return 'Cabell amb problema de caspa';
      case 'FARMACIÓ_TRACTAMENT_DE_POLLS':
        return 'Tractament específic recomanat';
      case 'ASSESSORAMENT_CASPA_PEELING':
        return 'Cabell amb caspa que necessita exfoliació';
      case 'ASSESSORAMENT_ANTICAIGUDA_COMPLEX_VITAMÍNIC':
        return 'Cabell amb caiguda que necessita suport vitamínic';
      default:
        console.error(`Resultat no mapejat: ${finalResult.value}`);
        return finalResult.value || '';
    }
  }
});

// Function to fetch recommendations based on the result
const fetchRecommendations = async () => {
  if (!finalResult.value) return;
  
  try {
    const response = await axios.get('/api/diagnostic/recommendations', {
      params: {
        form_type: props.formType,
        result_code: finalResult.value
      }
    });
    
    if (response.data && response.data.recommendations) {
      recommendations.value = response.data.recommendations;
    } else {
      console.error('No se recibieron recomendaciones del servidor');
    }
  } catch (err) {
    console.error('Error al obtener recomendaciones:', err);
  }
};

// Function we added to debug
const logDebug = (message, data) => {
  console.log(`[Diagnostic] ${message}:`, data);
};

// Get the first question - SIMPLIFIED VERSION
const fetchFirstQuestion = async () => {
  loading.value = true;
  error.value = null;
  
  try {
    // Obtenemos la primera pregunta del tipo de formulario correspondiente
    const response = await axios.get('/api/diagnostic/first-question', {
      params: { 
        form_id: props.formId,
        form_type: props.formType
      }
    });
    
    logDebug('Primera pregunta recibida', response.data);
    
    if (!response.data || !response.data.id) {
      error.value = 'No se encontraron preguntas para este formulario';
      return;
    }
    
    currentQuestionId.value = response.data.id;
    currentQuestion.value = response.data;
  } catch (err) {
    error.value = err.response?.data?.error || 'Error al carregar la primera pregunta';
    console.error('Error al cargar primera pregunta:', err);
  } finally {
    loading.value = false;
  }
};

const selectOption = async (option) => {
  selectedAnswers.value.push({
    questionId: currentQuestionId.value,
    question: currentQuestion.value.question,
    answerId: option.id,
    answer: option
  });
  
  loading.value = true;
  
  try {
    console.log('Enviando datos:', { 
      selected_answer_id: option.id, 
      form_type: props.formType 
    });
    
    const response = await axios.post('/api/diagnostic/next-question', {
      selected_answer_id: option.id,
      form_type: props.formType,
      question_id: currentQuestionId.value  
    });
    
    console.log('Respuesta completa:', response.data);
    
    // Verificamos si es el resultado final de manera dinámica
    const isFinalResult = response.data.finished || 
                         response.data.final_result || 
                         response.data.is_final ||
                         response.data.recommendation ||
                         !response.data.id; 
    
    if (isFinalResult) {
      console.log('Fin del cuestionario detectado:', response.data);
      // Guardamos el resultado final de forma dinámica
      finalResult.value = response.data.recommendation || 
                        response.data.result ||
                        response.data.resultado ||
                        response.data.final_recommendation ||
                        'Recomendación no disponible';
      
      // Obtenemos las recomendaciones específicas
      await fetchRecommendations();
      
      if (props.formType === 'hair') {
        saveAnswers();
      }
    } else {
      // Si no es el resultado final, actualizamos la pregunta actual
      currentQuestionId.value = response.data.id;
      currentQuestion.value = response.data;
    }
  } catch (err) {
    console.error('Error completo:', err);
    error.value = err.response?.data?.error || 'Error al carregar la següent pregunta';
  } finally {
    loading.value = false;
  }
};

const goBack = async () => {
  if (selectedAnswers.value.length === 0) return;
  
  if (finalResult.value) {
    finalResult.value = null;
    return;
  }
  
  selectedAnswers.value.pop();
  
  if (selectedAnswers.value.length === 0) {
    fetchFirstQuestion();
    return;
  }
  
  loading.value = true;
  
  try {
    const allAnswers = [...selectedAnswers.value];
    
    selectedAnswers.value = [];
    
    await fetchFirstQuestion();
    
    for (let i = 0; i < allAnswers.length; i++) {
      await simulateOptionSelection(allAnswers[i].answerId);
    }
    
  } catch (err) {
    console.error('Error al volver a la pregunta anterior:', err);
    error.value = 'Error al tornar a la pregunta anterior';
  } finally {
    loading.value = false;
  }
};

const simulateOptionSelection = async (optionId) => {
  try {
    // Buscamos la opción en las opciones actuales
    const option = currentOptions.value.find(opt => opt.id === optionId);
    
    if (!option) {
      throw new Error(`No se encontró la opción con ID ${optionId}`);
    }
    
    // Enviamos la selección simulada al servidor
    const response = await axios.post('/api/diagnostic/next-question', {
      selected_answer_id: optionId,
      form_type: props.formType,
      question_id: currentQuestionId.value
    });
    
    // Verificamos dinámicamente si es el resultado final
    const isFinalResult = response.data.finished || 
                         response.data.final_result || 
                         response.data.is_final ||
                         response.data.recommendation ||
                         !response.data.id;
    
    if (!isFinalResult) {
      currentQuestionId.value = response.data.id;
      currentQuestion.value = response.data;
    }
    
    // Agregamos la respuesta seleccionada al historial
    selectedAnswers.value.push({
      questionId: currentQuestionId.value,
      question: currentQuestion.value.question,
      answerId: optionId,
      answer: option
    });
    
    return !isFinalResult; 
  } catch (err) {
    console.error('Error al simular selección de opción:', err);
    throw err;
  }
};

const restart = () => {
  currentQuestionId.value = null;
  currentQuestion.value = null;
  selectedAnswers.value = [];
  finalResult.value = null;
  formId.value = null;
  error.value = null;
  fetchFirstQuestion();
};

const saveAnswers = async () => {
  if (props.formType !== 'hair') return;
  
  try {
    loadingSubmit.value = true;
    
    // Primero creamos el formulario con un título dinámico
    const formResponse = await axios.post('/api/diagnostic/store-form', {
      title: props.formType === 'hair' ? 'Diagnòstic Capil·lar' : 'Diagnòstic de Pell'
    });
    
    formId.value = formResponse.data.form_id;
    
    // Preparamos los datos de respuestas para enviar
    const answersData = selectedAnswers.value.map(answer => ({
      question_id: answer.questionId,
      answer_id: answer.answerId,
      question_text: answer.question,
      answer_text: answer.answer.text
    }));
    
    // Guardamos las respuestas
    await axios.post('/api/diagnostic/store-answers', {
      form_id: formId.value,
      answers: answersData,
      final_result: finalResult.value
    });
    
    loadingSubmit.value = false;
  } catch (error) {
    console.error('Error al guardar les respostes:', error);
    loadingSubmit.value = false;
  }
};

const navigateToRecommendations = () => {
  if (props.formType === 'skin') {
    // Rutas para cuestionario de piel
    const skinRoutes = {
      'Pell seca': '/Skin/Alipicaskin',
      'Pell grassa': '/Skin/Oilyskin',
      'Pell mixta': '/Skin/MixedSkin',
      'Pell sensible': '/Skin/Sensitiveskin',
      'Pell normal': '/Skin/NormalSkin',
      // Fallback
      'DEFAULT': '/Page/Skinrecommendations'
    };
    
    // Usar el tipo de piel calculado para determinar la ruta
    const route = skinRoutes[resultType.value] || skinRoutes['DEFAULT'];
    router.visit(route);
  } else {
    // Rutas para cuestionario de cabello
    const hairRoutes = {
      'CABELL_ENCRESPAT_LLIS': '/Page/Frizz',
      'CABELL_ENCRESPAT_INTENS': '/Page/Frizz',
      'TRACTAMENT_HIDRATACIO_INTENSIU': '/Page/repair',
      'TRACTAMENT_HIDRATACIO_CABELL_SEC': '/Page/repair',
      'TRACTAMENT_VOLUM_REPARADOR': '/Page/Volum',
      'TRACTAMENT_VOLUM': '/Page/Volum',
      'TRACTAMENT_REPARADOR_INTENSIU': '/Page/repair',
      'TRACTAMENT_REPARADOR': '/Page/repair',
      'ASSESSORAMENT_DE_CUIR_CABELLUT_I_CABELL_GRAS': '/Page/Greix',
      'ASSESSORAMENT_ANTICAIGUDA': '/Page/Caigudacabell',
      'ASSESSORAMENT_CUIR_CABELLUT_SENSIBLES': '/Page/Cuirsensible',
      'ASSESSORAMENT_CASPA': '/Page/Pitiriasi',
      'FARMACIÓ_TRACTAMENT_DE_POLLS': '/Page/Parasits',
      'ASSESSORAMENT_CASPA_PEELING': '/Page/Pitiriasi',
      'ASSESSORAMENT_ANTICAIGUDA_COMPLEX_VITAMÍNIC': '/Page/Caigudacabell',      
      // Fallback
      'DEFAULT': '/Page/hairQuestionnaire'
    };
    
    // Usar el código de recomendación para determinar la ruta
    const route = hairRoutes[finalResult.value] || hairRoutes['DEFAULT'];
    router.visit(route);
  }
};

onMounted(() => {
  const token = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
  if (token) {
    axios.defaults.headers.common['X-CSRF-TOKEN'] = token;
    axios.defaults.withCredentials = true;
  }
  
  fetchFirstQuestion();
});
</script>

<template>
  <Head :title="titles.main + ' - INS Narcís Monturiol'" />
  
  <MainLayout>
    <div class="flex flex-col min-h-screen">
      <main class="flex-grow bg-page">
        <div class="pt-24 bg-gradient-to-r from-box to-white">
          <div class="max-w-6xl mx-auto px-4 py-12">
            <div class="flex flex-col md:flex-row items-center gap-8">
              <div class="w-full">
                <h1 class="text-4xl font-bold text-title">{{ titles.main }}</h1>
                <h2 class="text-2xl italic text-title mt-2">{{ titles.subtitle }}</h2>
                <p class="mt-4 text-gray-700/80">
                  {{ titles.description }} Amb aquesta informació, podràs adaptar la teva rutina de cura 
                  {{ props.formType === 'skin' ? 'facial' : 'capil·lar' }} i utilitzar els productes més adequats.
                </p>
              </div>
            </div>
          </div>
        </div>
        
        <div v-if="error" class="max-w-6xl mx-auto px-4 py-4">
          <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
            <p class="font-medium">{{ error }}</p>
            <button @click="restart" class="mt-2 px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">
              Intentar de nou
            </button>
          </div>
        </div>
        
        <div v-else-if="loading" class="max-w-6xl mx-auto px-4 py-10 text-center">
          <div class="inline-block animate-spin rounded-full h-12 w-12 border-t-2 border-title border-r-2 mb-4"></div>
          <p class="text-lg text-title">Carregant...</p>
        </div>
        
        <div v-else class="max-w-6xl mx-auto px-4 py-10">
          <div class="bg-box rounded-lg p-8 shadow-lg">
            <div v-if="currentQuestion && !finalResult">
              <div class="mb-8">
                <h2 class="text-2xl font-bold text-title mb-4">{{ currentQuestion.question }}</h2>
                <div class="space-y-4">
                  <button
                    v-for="option in currentOptions"
                    :key="option.id"
                    @click="selectOption(option)"
                    class="w-full text-left px-6 py-4 bg-white rounded-lg shadow-md hover:bg-amber-50 transition-colors flex items-center"
                  >
                    <div class="bg-box p-2 rounded-full mr-3 flex-shrink-0">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-title" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                    </div>
                    <span class="text-lg">{{ option.text }}</span>
                  </button>
                </div>
              </div>
              
              <div class="flex justify-between">
                <button 
                  @click="goBack" 
                  :disabled="selectedAnswers.length === 0"
                  :class="[
                    'px-4 py-2 rounded-lg text-white font-medium transition-colors',
                    selectedAnswers.length === 0 ? 'bg-gray-400 cursor-not-allowed' : 'bg-title hover:bg-title/80'
                  ]"
                >
                  Torna enrere
                </button>
                <button 
                  @click="restart" 
                  class="px-4 py-2 bg-gray-500 text-white rounded-lg font-medium hover:bg-gray-600 transition-colors"
                >
                  Reiniciar
                </button>
              </div>
            </div>
            
            <!-- Results -->
            <div v-else-if="finalResult" class="text-center">
              <div class="bg-white p-8 rounded-lg shadow-md">
                <div class="bg-green-100 rounded-full p-4 mx-auto w-16 h-16 flex items-center justify-center mb-4">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                </div>
                <h2 class="text-2xl font-bold text-title mb-4">Resultat del diagnòstic</h2>
                
                <!-- SKIN:-->
                <template v-if="props.formType === 'skin'">
                  <p class="text-lg text-title mb-6">{{ finalResult }}</p>
                  
                  <div class="space-y-3 mb-8">
                    <div v-for="(answer, index) in selectedAnswers" :key="index" class="bg-amber-50 p-4 rounded-lg">
                      <p class="font-semibold text-title">{{ answer.question }}</p>
                      <p class="text-title">{{ answer.answer.text }}</p>
                    </div>
                  </div>
                  
                  <div class="space-x-4">
                    <button 
                      @click="restart" 
                      class="px-4 py-2 bg-title text-white rounded-lg font-medium hover:bg-title/80 transition-colors"
                    >
                      Reiniciar qüestionari
                    </button>
                  </div>
                </template>
                
                <!-- HAIR: -->
                <template v-else>
                  <p class="text-lg text-title mb-6">{{ resultType }}</p>
                  
                  <div 
                    v-if="recommendations && Object.keys(recommendations).length > 0" 
                    class="bg-amber-50 p-6 rounded-lg mb-8 text-left"
                  >
                    <h4 class="font-semibold text-title mb-2">Consells personalitzats:</h4>
                    <ul class="list-disc pl-5 mb-4 space-y-2">
                      <li v-for="(tip, index) in recommendations.tips" :key="index" class="text-title">
                        {{ tip }}
                      </li>
                    </ul>
                    
                    <template v-if="recommendations.products && recommendations.products.length > 0">
                      <h4 class="font-semibold text-title mt-4 mb-2">Productes recomanats:</h4>
                      <ul class="list-disc pl-5 space-y-2">
                        <li v-for="(product, index) in recommendations.products" :key="index" class="text-title">
                          {{ product }}
                        </li>
                      </ul>
                    </template>
                  </div>
                  <div v-else class="bg-amber-50 p-6 rounded-lg mb-8 text-left">
                    <p class="text-title">S'està carregant la informació de recomanacions...</p>
                  </div>
                  
                  <div class="space-x-4">
                    <button 
                      @click="restart" 
                      class="px-4 py-2 bg-title text-white rounded-lg font-medium hover:bg-title/80 transition-colors"
                    >
                      Reiniciar qüestionari
                    </button>
                    
                    <button 
                      @click="navigateToRecommendations" 
                      class="px-4 py-2 bg-title text-white rounded-lg font-medium hover:bg-title/80 transition-colors"
                    >
                      Veure recomanacions
                    </button>
                  </div>
                </template>
              </div>
            </div>
            
            <div v-else class="text-center py-8">
              <div class="bg-amber-100 rounded-full p-4 mx-auto w-16 h-16 flex items-center justify-center mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                </svg>
              </div>
              <h2 class="text-2xl font-bold text-title mb-4">No hi ha preguntes disponibles</h2>
              <p class="text-lg text-gray-700 mb-4">No s'han trobat preguntes per a aquest qüestionari. Si us plau, intenta-ho de nou més tard.</p>
              <button 
                @click="restart" 
                class="px-4 py-2 bg-title text-white rounded-lg font-medium hover:bg-title/80 transition-colors"
              >
                Recarregar pàgina
              </button>
            </div>
          </div>
        </div>
      </main>
    </div>
  </MainLayout>
</template>

<style scoped>
.animate-fade-in {
  animation: fadeIn 0.5s ease-in-out;
}

@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateY(10px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.animate-spin {
  animation: spin 1s linear infinite;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>