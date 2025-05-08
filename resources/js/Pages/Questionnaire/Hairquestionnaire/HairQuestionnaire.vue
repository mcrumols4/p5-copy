<script setup>
import { Head } from '@inertiajs/vue3';
import MainLayout from '@/Layouts/MainLayout.vue';
</script>

<template>
    <Head title="Qüestionari Capil·lar" />
    
    <MainLayout>
        <!-- Hero Image Section -->
        <div class="w-full bg-page pt-36 pb-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Main image -->
                <div class="relative flex justify-center mb-12">
                    <img 
                        src="/images/questionnaricapil·lar.png" 
                        alt="Avaluació capil·lar" 
                        class="rounded-lg shadow-lg w-full object-cover h-96"
                    />
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center rounded-lg">
                        <h2 class="text-white text-4xl font-bold">Diagnòstic Capil·lar</h2>
                    </div>
                </div>
                
                <!-- Main Content -->
                <div class="bg-box rounded-lg p-8 shadow-lg max-w-5xl mx-auto">
                    <h1 class="text-3xl font-bold text-center text-title mb-8 font-garamond">
                        Descobreix el secret per a un cabell sa i radiant!
                    </h1>
                    
                    <div class="space-y-6 text-title font-garamond">
                        <p class="leading-relaxed text-xl">
                            El cabell ben cuidat no només millora la teva imatge, sinó que també reflecteix salut i confiança.
                        </p>
                        <p class="leading-relaxed text-xl">
                            Respon el nostre <strong class="font-bold">qüestionari capil·lar online</strong> i obtén un <strong class="font-bold">assessorament personalitzat</strong> en pocs minuts. 
                            Identifica les necessitats del teu cabell i rep recomanacions específiques per cuidar-lo com es mereix.
                        </p>
                        
                        <p class="leading-relaxed text-xl">
                            <strong class="font-bold">Un cabell saludable és clau per sentir-te bé amb tu mateix.</strong> No esperis més per lluir un cabell espectacular!
                        </p>
                    </div>
                    
                    <!-- Call to Action Button -->
                    <div class="mt-10 flex justify-center">
                        <a 
                            href="/questionari-cabell" 
                            class="bg-gradient-to-r from-amber-700 to-amber-900 text-white font-bold text-lg py-4 px-10 rounded-full transition duration-300 transform hover:scale-105 hover:shadow-xl shadow-lg font-garamond w-full md:w-auto md:max-w-md text-center"
                        >
                            QÜESTIONARI CAPIL·LAR
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </MainLayout>
</template>