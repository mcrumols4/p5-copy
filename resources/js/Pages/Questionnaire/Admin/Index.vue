<template>

  <Head title="Administració del Qüestionari - INS Narcís Monturiol" />
  
  <AdminPanel>
    <div class="flex flex-col min-h-screen">
      <main class="flex-grow">
        
        <div class="justify-items-center my-10">
          <h1 class="text-4xl font-semibold mb-5 text-center">Administració dels Qüestionaris</h1>
        </div>
        
        <!-- Main Content -->
        <!-- Button to create form -->
        <div class="max-w-6xl mx-auto px-4 py-8">
          <div class="flex justify-end mb-4">
            <button @click="showModal = true"
              name="CreateQuestionnaire"
              class="bg-box text-title px-4 py-2 rounded-lg hover:bg-opacity-90 transition-all">
              <i class="fas fa-plus mr-1"></i> Crear Questionari
            </button>
            
          </div>
          <!-- Selector de Questionari -->
          <div class="mb-8 bg-box rounded-lg p-6 shadow-lg">
            <label class="block text-sm font-medium text-title mb-2">Seleccionar Questionari</label>
            <select aria-label="Select Questionnaire" v-model="selectedFormId" name="select_questionnaire" class="w-full p-2 border rounded bg-white text-title">
              <option v-for="form in forms" :key="form.id" :value="form.id">
                {{ form.title }}
              </option>
            </select> 
          </div>

        <!-- Delete form -->
        <div class="max-w-3xl mx-auto px-2 sm:px-6 lg:px-8 mb-16 mt-8">
          <div class="bg-box shadow sm:rounded-lg sm:p-6 items-center place-items-center">
            <h2 class="text-2xl font-bold text-center mb-6 text-title">Eliminar i Editar Questionari</h2>
            <table id="QuestionnaireTable" class="text-title min-w-50% rounded-lg">
              <tbody>
                <tr class="bg-gray-800 w-full rounded-lg">
                  <th class="w-1/5 rounded-l-lg px-6 py-2 text-sm font-semibold text-white uppercase tracking-wider">
                    Questionari</th>
                  <th class="w-1/5 rounded-r-lg px-6 py-5 text-sm font-semibold text-white uppercase tracking-wider">
                    Eliminar</th>
                </tr>
                <tr v-for="form in forms" class="bg-[#FFD4A5] text-center p-y-4 rounded-3xl">
                  <td class="w-1/5 rounded-l-lg py-2">{{ form.title }}</td>
                  <td class="w-1/5 rounded-r-lg py-2">
                    <a :href="route('forms.show.update', form.id)">
                      <button class="bg-blue-600 text-white p-1 rounded-lg mr-4 my-1" name="modify_questionnaire">Modificar</button></a>
                    <a :href="route('forms.delete', form.id)">
                      <button class="bg-red-600 text-white p-1 rounded-lg" name="delete_questionnaire">Eliminar</button></a> 
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        </div>

          <!-- Lista de Preguntas -->
          <div class="mb-8">
            <div class="flex justify-between items-center mb-4">
              <h2 class="text-2xl font-semibold text-title">Preguntes</h2>
              <button @click="showQuestionModal = true"
                class="bg-box text-title px-4 py-2 rounded-lg hover:bg-opacity-90 transition-all">
                <i class="fas fa-plus mr-1"></i> Nova Pregunta
              </button>
            </div>

            <div class="space-y-4">
              <div v-for="question in currentFormQuestions" :key="question.id" class="bg-box rounded-lg p-6 shadow-lg">
                <div class="flex justify-between items-start mb-4">
                  <h3 class="text-lg font-medium text-title">{{ question.question }}</h3>
                  <div class="space-x-2">
                    <button @click="editQuestion(question)"
                      class="text-blue-600 hover:text-blue-800 transition-colors p-1" title="Editar">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                      </svg>
                    </button>
                    <button @click="deleteQuestion(question.id)"
                      class="text-red-600 hover:text-red-800 transition-colors p-1" title="Eliminar">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                      </svg>
                    </button>
                  </div>
                </div>

                <!-- Question Answers -->
                <div class="ml-4">
                  <div class="flex justify-between items-center mb-2">
                    <h4 class="font-medium text-title">Respostes</h4>
                    <button @click="openAnswerModal(question)"
                      class="text-sm bg-box text-title px-3 py-1 rounded-lg hover:bg-opacity-90 transition-all">
                      <i class="fas fa-plus mr-1"></i> Nova Resposta
                    </button>
                  </div>

                  <div class="space-y-2">
                    <div v-for="answer in question.answers" :key="answer.id"
                      class="flex justify-between items-center p-3 bg-white rounded-lg shadow-sm">
                      <div>
                        <p class="text-title">{{ answer.answer }}</p>
                        <p v-if="answer.recommendation" class="text-sm text-gray-600 mt-1">
                          Recomanació: {{ answer.recommendation }}
                        </p>
                      </div>
                      <div class="space-x-2">
                        <button @click="editAnswer(answer)"
                          class="text-blue-600 hover:text-blue-800 transition-colors p-1" title="Editar">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                          </svg>
                        </button>
                        <button @click="deleteAnswer(answer.id)"
                          class="text-red-600 hover:text-red-800 transition-colors p-1" title="Eliminar">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                          </svg>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>

      <!-- Question Modal-->
      <div v-if="showQuestionModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white p-6 rounded-lg w-full max-w-md">
          <h3 class="text-xl font-bold mb-4 text-title">{{ editingQuestion ? 'Editar Pregunta' : 'Nova Pregunta' }}</h3>
          <form @submit.prevent="saveQuestion">
            <div class="mb-4">
              <label class="block text-sm font-medium text-title mb-2">Pregunta</label>
              <input v-model="questionForm.question" type="text" class="w-full p-2 border rounded bg-white text-title"
                required>
            </div>
            <div class="flex justify-end space-x-2">
              <button type="button" @click="showQuestionModal = false" class="px-4 py-2 border rounded text-title">
                Cancelar
              </button>
              <button type="submit" class="px-4 py-2 bg-box text-title rounded-lg hover:bg-opacity-90 transition-all">
                {{ editingQuestion ? 'Actualitzar' : 'Crear' }}
              </button>
            </div>
          </form>
        </div>
      </div>

      <!-- Response Modal -->
      <div v-if="showAnswerModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white p-6 rounded-lg w-full max-w-md">
          <h3 class="text-xl font-bold mb-4 text-title">{{ editingAnswer ? 'Editar Resposta' : 'Nova Resposta' }}</h3>
          <form @submit.prevent="saveAnswer">
            <div class="mb-4">
              <label class="block text-sm font-medium text-title mb-2">Resposta</label>
              <input v-model="answerForm.answer" type="text" class="w-full p-2 border rounded bg-white text-title"
                required>
            </div>
            <div class="mb-4">
              <label class="block text-sm font-medium text-title mb-2">Següent Pregunta (opcional)</label>
              <select v-model="answerForm.child_question_id" class="w-full p-2 border rounded bg-white text-title">
                <option :value="null">Cap (Final)</option>
                <option v-for="q in currentFormQuestions" :key="q.id" :value="q.id">
                  {{ q.question }}
                </option>
              </select>
            </div>
            <div class="mb-4">
              <label class="block text-sm font-medium text-title mb-2">Recomanació (opcional)</label>
              <textarea v-model="answerForm.recommendation" class="w-full p-2 border rounded bg-white text-title"
                rows="3"></textarea>
            </div>
            <div class="flex justify-end space-x-2">
              <button type="button" @click="showAnswerModal = false" class="px-4 py-2 border rounded text-title">
                Cancelar
              </button>
              <button type="submit" class="px-4 py-2 bg-box text-title rounded-lg hover:bg-opacity-90 transition-all">
                {{ editingAnswer ? 'Actualitzar' : 'Crear' }}
              </button>
            </div>
          </form>
        </div>
      </div>

      <!-- Alert Notification -->
      <AlertNotification v-if="alert.show" :type="alert.type" :message="alert.message" />
    </div>

    <!-- Modal for creating forms -->
    <div v-if="showModal" class="fixed inset-0 bg-white/30 backdrop-blur-sm flex items-center justify-center z-50.">
      <div class="bg-white p-6 w-full max-w-md rounded-lg shadow-lg">
        <h3 class="text-xl font-bold mb-4 text-title"> Nou Questionari </h3>
        <form @submit.prevent="saveForm">
          <div class="mb-4">
            <label class="block text-sm font-medium text-title mb-2"> Titol de Questionari</label>
            <input name="title" v-model="formForm.title" type="text" class="w-full p-2 border rounded bg-white text-title" required>
          </div>
          <div class="mb-2">
            <button type="button" @click="showModal = false" class="px-4 py-2 border rounded text-title">
              Cancelar
            </button>
            <button @click="createForm" type="submit" class="px-4 py-2 bg-box text-title hover:bg-opacity-90 transition-all rounded-lg ml-2">
              Crear
            </button>
          </div>
        </form>
      </div>
    </div>
  </AdminPanel>
</template>

<script setup>
import { ref, computed, onMounted, watch } from 'vue';
import { router } from '@inertiajs/vue3';
import { Head } from '@inertiajs/vue3';
import AdminPanel from '@/Layouts/AdminPanelLayout.vue';
import axios from 'axios';
import AlertNotification from '@/Components/AlertNotification.vue';

const props = defineProps({
  forms: Array
});
console.log(props.forms.id);


const forms = ref(props.forms || []);
const selectedFormId = ref(forms.value.length > 0 ? forms.value[0].id : null);
const showQuestionModal = ref(false);
const showAnswerModal = ref(false);
const editingQuestion = ref(null);
const editingAnswer = ref(null);
const selectedQuestionForAnswer = ref(null);
const alert = ref({
  show: false,
  type: 'success',
  message: ''
});

const questionForm = ref({
  question: '',
  form_id: null
});

const answerForm = ref({
  answer: '',
  father_question_id: null,
  child_question_id: null,
  recommendation: ''
});

const currentFormQuestions = computed(() => {
  const form = forms.value.find(f => f.id === selectedFormId.value);
  return form ? form.questions : [];
});

function getCurrentFormName() {
  const form = forms.value.find(f => f.id === selectedFormId.value);
  return form ? form.title : 'Ninguno seleccionado';
}

function openNewQuestionModal() {
  editingQuestion.value = null;
  questionForm.value = {
    question: '',
    form_id: selectedFormId.value
  };
  console.log('Abriendo modal para nueva pregunta en formulario:', selectedFormId.value);
  showQuestionModal.value = true;
}

function editQuestion(question) {
  editingQuestion.value = question;
  questionForm.value = {
    question: question.question,
    form_id: question.form_id
  };
  showQuestionModal.value = true;
}

function editAnswer(answer) {
  editingAnswer.value = answer;
  answerForm.value = {
    answer: answer.answer,
    father_question_id: answer.father_question_id,
    child_question_id: answer.child_question_id,
    recommendation: answer.recommendation
  };
  showAnswerModal.value = true;
}

function openAnswerModal(question) {
  selectedQuestionForAnswer.value = question;
  answerForm.value = {
    answer: '',
    father_question_id: question.id,
    child_question_id: null,
    recommendation: ''
  };
  showAnswerModal.value = true;
}

const loadQuestionnaireData = async () => {
  try {
    const response = await axios.get(route('modify.questionnaire.data'));
    if (response.data.success) {
      forms.value = response.data.forms;
      if (forms.value.length > 0 && !selectedFormId.value) {
        selectedFormId.value = forms.value[0].id;
      }
    } else {
      showAlert('error', 'Error al cargar los datos del cuestionario');
    }
  } catch (error) {
    showAlert('error', 'Error al cargar los datos del cuestionario');
    console.error('Error:', error);
  }
};

const showAlert = (type, message) => {
  alert.value = {
    show: true,
    type,
    message
  };
  
  setTimeout(() => {
    alert.value.show = false;
  }, 3000);
};

async function saveQuestion() {
  try {
    const dataToSend = {
      question: questionForm.value.question,
      form_id: selectedFormId.value
    };
    
    console.log('Enviando pregunta para el formulario:', selectedFormId.value);
    
    let response;
    if (editingQuestion.value) {
      response = await axios.put(route('modify.questions.update', editingQuestion.value.id), dataToSend);
    } else {
      response = await axios.post(route('modify.questions.create'), dataToSend);
    }

    if (response.data.success) {
      showAlert('success', response.data.message);
      await loadQuestionnaireData();
      showQuestionModal.value = false;
      editingQuestion.value = null;
      questionForm.value = {
        question: '',
        form_id: null
      };
    } else {
      showAlert('error', response.data.message || 'Error al guardar la pregunta');
    }
  } catch (error) {
    console.error('Error al guardar la pregunta:', error);
    showAlert('error', 'Error al guardar la pregunta');
  }
}

async function saveAnswer() {
  try {
    let response;
    if (editingAnswer.value) {
      response = await axios.put(`/modify/answers/${editingAnswer.value.id}`, answerForm.value);
    } else {
      response = await axios.post('/modify/answers', answerForm.value);
    }
    
    if (response.data.success) {
      showAlert('success', response.data.message);
      await loadQuestionnaireData();
      showAnswerModal.value = false;
      editingAnswer.value = null;
      answerForm.value = {
        answer: '',
        father_question_id: null,
        child_question_id: null,
        recommendation: ''
      };
    } else {
      showAlert('error', response.data.message || 'Error al guardar la respuesta');
    }
  } catch (error) {
    console.error('Error al guardar la respuesta:', error);
    showAlert('error', 'Error al guardar la respuesta');
  }
}

async function deleteQuestion(questionId) {
  if (confirm('Estàs segur que vols eliminar aquesta pregunta?')) {
    try {
      const response = await axios.delete(`/modify/questions/${questionId}`);
      if (response.data.success) {
        showAlert('success', response.data.message);
        await loadQuestionnaireData();
      } else {
        showAlert('error', response.data.message || 'Error al eliminar la pregunta');
      }
    } catch (error) {
      console.error('Error al eliminar la pregunta:', error);
      showAlert('error', 'Error al eliminar la pregunta');
    }
  }
}

async function deleteAnswer(answerId) {
  if (confirm('Estàs segur que vols eliminar aquesta resposta?')) {
    try {
      const response = await axios.delete(`/modify/answers/${answerId}`);
      if (response.data.success) {
        showAlert('success', response.data.message);
        await loadQuestionnaireData();
      } else {
        showAlert('error', response.data.message || 'Error al eliminar la respuesta');
      }
    } catch (error) {
      console.error('Error al eliminar la respuesta:', error);
      showAlert('error', 'Error al eliminar la respuesta');
    }
  }
}

const showModal = ref(false);
const formForm = ref({ title: '' });

async function saveForm() {
  try {
    await router.post('/modify/forms', formForm.value);
    showModal.value = false;
    formForm.value.title = '';
    await createForm();
  } catch (error) {
    console.error('Error en guardar el Questionari', error);
  }
}

const createForm = () => {
  axios.get(route('questionnaire.create')). then(response => {
    forms.value = response.data;
  })
}
 
</script>

<style scoped>
.rounded-lg {
  transition: all 0.3s ease;
}
</style>