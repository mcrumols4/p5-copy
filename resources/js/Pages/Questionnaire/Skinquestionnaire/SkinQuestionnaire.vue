<script setup>
import { Head } from '@inertiajs/vue3';
import MainLayout from '@/Layouts/MainLayout.vue';
</script>

<template>
    <Head title="Qüestionari de la Pell" />
    
    <MainLayout>
        <!-- Hero Image Section -->
        <div class="w-full bg-page pt-36 pb-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Main image -->
                <div class="relative flex justify-center mb-12">
                    <img 
                        src="/images/questionaripell.png" 
                        alt="Avaluació de la pell"
                        class="rounded-lg shadow-lg w-full object-cover h-96"
                    />
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center rounded-lg">
                        <h2 class="text-white text-4xl font-bold">Diagnòstic de la pell</h2>
                    </div>
                </div>
                
                <!-- First section: Image with rounded border only -->
                <div class="flex justify-center mb-8">
                    <img 
                        src="/images/questionaripell1.png" 
                        alt="Productes per a la cura de la pell" 
                    />
                </div>
                
                <!-- Separate box for bold text -->
                <div class="bg-box rounded-lg p-8 shadow-lg mb-8">
                    <p class="leading-relaxed text-xl text-title font-garamond font-bold">
                        Els productes que es facin servir en aquestes rutines han de ser de qualitat i, sobretot, s'han d'adaptar al tipus de pell específic de cada persona. Es recomana aplicar aquestes cremes després de la rentada, amb la pell humida, perquè s'absorbeix més i millor. Per a una bona hidratació, tonificació i exfoliació, és convenient emprar els productes recomanats pel dermatòleg, per tenir una cura eficient. Tots aquests productes contribuiran a protegir la pell davant d'agressions externes com poden ser el sol o la contaminació i, també, calmaran la pell irritada, restabliran el seu estat i eviten l'aparició de malalties cutànies.
                    </p>
                </div>
                
                <!-- Second section: Image with rounded edge only -->
                <div class="flex justify-center mb-8">
                    <img 
                        src="/images/questionaripell2.png" 
                        alt="Avaluació del tipus de pell" 
                    />
                </div>
                
                <!-- Separate box for title and explanatory text -->
                <div class="bg-box rounded-lg p-8 shadow-lg mb-8">
                    <!-- Title -->
                    <h2 class="text-3xl font-bold text-center text-title mb-6 font-garamond">
                        5 MINUTS I PODRÀS SABER QUIN TIPUS DE PELL TENS!
                    </h2>
                    
                    <!-- Explanatory text -->
                    <p class="leading-relaxed text-xl text-title font-garamond">
                        Amb aquestes preguntes podràs descobrir quin tipus de pell tens i com cuidar-la de la millor manera. Conèixer les necessitats específiques de la teva pell t'ajudarà a mantenir-la sana, equilibrada i radiant.
                    </p>
                
                    <div class="mt-10 flex justify-center">
                        <a 
                            href="/questionari-pell" 
                            class="bg-gradient-to-r from-amber-700 to-amber-900 text-white font-bold text-lg py-4 px-10 rounded-full transition duration-300 transform hover:scale-105 hover:shadow-xl shadow-lg font-garamond w-full md:w-auto md:max-w-md text-center"
                        >
                            QÜESTIONARI DE LA PELL
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </MainLayout>
</template>