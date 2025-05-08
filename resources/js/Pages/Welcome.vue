<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import { Head } from '@inertiajs/vue3';
import { ref, onMounted, onBeforeUnmount } from 'vue';

// Carousel images for the content section
const carouselImages = [
  '/images/inici-image.jpg',
  '/images/carr3.jpg',  
  '/images/carr1.png ',
  '/images/carr4.jpg',
  '/images/carr5.jpg',  
];

const activeImage = ref(0);
let carouselTimer = null;

// Auto rotate carousel every 5 seconds
onMounted(() => {
  carouselTimer = setInterval(() => {
    activeImage.value = (activeImage.value + 1) % carouselImages.length;
  }, 5000);
});

onBeforeUnmount(() => {
  clearInterval(carouselTimer);
});
</script>

<template>
  <Head title="Imatge personal" />
  
  <MainLayout>
  <div class="flex flex-col min-h-screen">
      <main class="flex-grow bg-[#F5F3F2]">
        <!-- Hero Section -->
        <div class="pt-24 pb-12">
          <div class="w-full text-center py-16 relative overflow-hidden animate-fade-in">
            <div class="absolute inset-0"><img class="w-full h-full" src="/images/Banner_Monturiol2.png" alt="Banner Monturiol"></div>
            <div class="relative z-10 max-w-7xl mx-auto px-4">
              <h1 class="text-5xl font-bold text-[#4D4242] mb-4 animate-slide-down">Imatge Personal</h1>
              <p class="text-xl text-[#4D4242]/80 max-w-2xl mx-auto animate-slide-up">
                Centre d'Excel·lència en Estètica i Perruqueria
              </p>
            </div>
          </div>
        </div>
        
        <!-- Content Section -->
        <div class="max-w-7xl mx-auto px-4 py-12">
          <!-- Introduction -->
          <div class="bg-[#FFF1EA] p-8 shadow-lg rounded-lg animate-fade-in-up">
            <div class="flex flex-col md:flex-row items-start gap-12">
              <div class="md:w-1/3 animate-slide-right">
                <!-- Image carousel -->
                <div class="relative rounded-lg shadow-md overflow-hidden">
                  <!-- Images -->
                  <div class="relative h-96">
                    <div v-for="(image, index) in carouselImages" 
                         :key="image"
                         class="absolute inset-0 w-full h-full transition-opacity duration-1000"
                         :class="index === activeImage ? 'opacity-100' : 'opacity-0'">
                      <img :src="image" :alt="`INS Narcís Monturiol ${index + 1}`" 
                           class="w-full h-full object-cover transform transition-all duration-300 hover:scale-105 hover:rotate-2" />
                    </div>
                  </div>
                  
                  <!-- Indicator dots -->
                  <div class="absolute bottom-3 left-0 right-0 flex justify-center gap-2">
                    <button aria-label="Change Image"
                      v-for="(_, index) in carouselImages" 
                      :key="index" 
                      @click="activeImage = index"
                      class="w-2.5 h-2.5 rounded-full bg-white/70 hover:bg-white transition-all"
                      :class="index === activeImage ? 'w-4 bg-white' : ''">
                    </button>
                  </div>
                </div>

                <div class="mt-6 text-center">
                  <h3 class="text-lg font-semibold text-[#4D4242]">INS Narcís Monturiol</h3>
                  <p class="text-[#4D4242]/70 text-sm">Centre d'Excel·lència Professional</p>
                </div>
              </div>

              <div class="flex-1 animate-slide-left">
                <h2 class="text-3xl font-bold text-[#4D4242] mb-6">La teva imatge, la teva identitat</h2>
                <div class="space-y-6 text-[#4D4242]/90">
                  <p class="leading-relaxed text-lg">
                  La imatge personal és una eina de comunicació que reflecteix la nostra identitat i estil. 
                  El sector de la bellesa inclou l'estilisme capil·lar, la cura de la pell, el maquillatge i
                  l'assessoria d'imatge, influint en com ens sentim amb nosaltres mateixos.
                </p>

                  <div class="bg-[#D4CCC8]/10 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold text-[#4D4242] mb-4">
                  Explora amb nosaltres les millors opcions per a tu:
                    </h3>
                    <ul class="space-y-4">
                      <li class="flex items-center gap-3 animate-fade-in-list" style="animation-delay: 200ms;">
                        <div class="flex-shrink-0 w-8 h-8 rounded-full bg-[#4D4242] flex items-center justify-center">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>
                        </div>
                        <span class="text-lg">Diagnòstic capil·lar personalitzat</span>
                      </li>
                      <li class="flex items-center gap-3 animate-fade-in-list" style="animation-delay: 400ms;">
                        <div class="flex-shrink-0 w-8 h-8 rounded-full bg-[#4D4242] flex items-center justify-center">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>
                        </div>
                        <span class="text-lg">Tractaments facials adaptats</span>
                      </li>
                      <li class="flex items-center gap-3 animate-fade-in-list" style="animation-delay: 600ms;">
                        <div class="flex-shrink-0 w-8 h-8 rounded-full bg-[#4D4242] flex items-center justify-center">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>
                        </div>
                        <span class="text-lg">Assessorament en imatge personal</span>
                      </li>
                </ul>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
  </MainLayout>
</template>

<style scoped>
/* Base transitions */
.transition-all {
  transition: all 0.3s ease;
}

/* Hover effects */
.hover\:scale-105:hover {
  transform: scale(1.05) rotate(2deg);
}

/* Fade in animation */
@keyframes fadeIn {
  from {
    opacity: 0;
  }

  to {
    opacity: 1;
  }
}

/* Slide down animation */
@keyframes slideDown {
  from {
    opacity: 0;
    transform: translateY(-20px);
  }

  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Slide up animation */
@keyframes slideUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }

  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Slide right animation */
@keyframes slideRight {
  from {
    opacity: 0;
    transform: translateX(-50px);
  }

  to {
    opacity: 1;
    transform: translateX(0);
  }
}

/* Slide left animation */
@keyframes slideLeft {
  from {
    opacity: 0;
    transform: translateX(50px);
  }

  to {
    opacity: 1;
    transform: translateX(0);
  }
}

/* Fade in up animation */
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }

  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* List item fade in animation */
@keyframes fadeInList {
  from {
    opacity: 0;
    transform: translateX(20px);
  }

  to {
    opacity: 1;
    transform: translateX(0);
  }
}

/* Animation classes */
.animate-fade-in {
  animation: fadeIn 1s ease-out forwards;
}

.animate-slide-down {
  animation: slideDown 1s ease-out forwards;
}

.animate-slide-up {
  animation: slideUp 1s ease-out forwards;
  animation-delay: 0.3s;
  opacity: 0;
}

.animate-slide-right {
  animation: slideRight 1s ease-out forwards;
}

.animate-slide-left {
  animation: slideLeft 1s ease-out forwards;
}

.animate-fade-in-up {
  animation: fadeInUp 1s ease-out forwards;
}

.animate-fade-in-list {
  opacity: 0;
  animation: fadeInList 0.5s ease-out forwards;
}

/* Ensure animations play on page load */
:root {
  view-transition-name: none;
}
</style>