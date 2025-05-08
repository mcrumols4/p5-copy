<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import { defineProps } from 'vue';
import { Head } from '@inertiajs/vue3';
const props = defineProps({
  pages: Array,
  isAuthenticated: Boolean
});
</script>
<template>
  <Head title="Imatge personal" />
    <MainLayout>
        <div  v-for="page in pages">
        <div class="pt-24 pb-12 flex-grow">
          <div class="w-full text-center py-16 relative overflow-hidden animate-fade-in">
            <div class="absolute inset-0"><img class="w-full h-full" src="/images/Banner_Monturiol2.png" alt=""></div>
            <div class="relative z-10 max-w-7xl mx-auto px-4">
              <h1 class="text-5xl font-bold text-[#4D4242] mb-4 animate-slide-down">{{ page.title }}</h1>
              <p class="text-xl text-[#4D4242]/80 max-w-2xl mx-auto animate-slide-up">
                {{ page.subtitle }}
              </p>
            </div>
          </div>
        </div>
    <span v-html="page.content"></span>
    </div>
    </MainLayout>
</template>

<style scoped>
table {
  border-collapse: separate;
  border-spacing: 0;
}

th, td {
  border: 1px solid #e5e7eb;
}

th:first-child {
  border-top-left-radius: 0.5rem;
}

th:last-child {
  border-top-right-radius: 0.5rem;
}

tr:last-child td:first-child {
  border-bottom-left-radius: 0.5rem;
}

tr:last-child td:last-child {
  border-bottom-right-radius: 0.5rem;
}

.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.5s ease;
}

.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}

/* Hover effect para las tarjetas */
.rounded-2xl {
  transition: transform 0.3s ease-in-out;
}

.rounded-2xl:hover {
  transform: translateY(-5px);
}
.rounded-lg {
    transition: all 0.3s ease;
}

.rounded-lg:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}
</style>