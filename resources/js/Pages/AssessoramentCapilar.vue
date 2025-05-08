<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
</script>

<template>
    <MainLayout>
        <div class="pt-24 pb-12">
          <div class="w-full bg-[#D4CCC8] text-center py-16 relative overflow-hidden animate-fade-in">
            <div class="absolute inset-0 bg-[#4D4242]/10"></div>
            <div class="relative z-10 max-w-7xl mx-auto px-4">
              <h1 class="text-5xl font-bold text-[#4D4242] mb-4 animate-slide-down">Imatge Personal</h1>
              <p class="text-xl text-[#4D4242]/80 max-w-2xl mx-auto animate-slide-up">
                Centre d'Excel·lència en Estètica i Perruqueria
              </p>
            </div>
          </div>
        </div>

        <h1 class="text-center text-2xl font-bold text-title font-inter"> ASSESSORAMENT CAPIL·LAR </h1>
        
        <div class="flex justify-center py-10 md:py-20">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-12">

                <div class="flex flex-col items-center">
                    <a href="/Page/Volum" class="cursor-pointer no-underline">
                        <div class="h-72 aspect-[3/4] bg-white flex justify-center items-center rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl group">
                            <img 
                                src="/images/volum.png" 
                                alt="Volum capilar" 
                                class="w-full h-full object-cover group-hover:scale-105 transition-all duration-500"
                            />
                        </div>
                        <h1 class="text-center text-lg font-bold text-title font-inter mt-6"> VOLUM </h1>
                    </a>
                </div>

                <div class="flex flex-col items-center">
                    <a href="/Page/Nutricio" class="cursor-pointer no-underline">
                        <div class="h-72 aspect-[3/4] bg-white flex justify-center items-center rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl group">
                            <img 
                                src="/images/nutricio.png" 
                                alt="Nutrició capilar" 
                                class="w-full h-full object-cover group-hover:scale-105 transition-all duration-500"
                            />
                        </div>
                        <h1 class="text-center text-lg font-bold text-title font-inter mt-6"> NUTRICIÓ </h1>
                    </a>
                </div>

                <div class="flex flex-col items-center">
                    <a href="/Page/Frizz" class="cursor-pointer no-underline">
                        <div class="h-72 aspect-[3/4] bg-white flex justify-center items-center rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl group">
                            <img 
                                src="/images/encrespat.png" 
                                alt="Tractament per a encrespat" 
                                class="w-full h-full object-cover group-hover:scale-105 transition-all duration-500"
                            />
                        </div>
                        <h1 class="text-center text-lg font-bold text-title font-inter mt-6"> ENCRESPAT </h1>
                    </a>
                </div>

                <div class="flex flex-col items-center">
                    <a href="/Page/repair" class="cursor-pointer no-underline">
                        <div class="h-72 aspect-[3/4] bg-white flex justify-center items-center rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl group">
                            <img 
                                src="/images/reparar.png" 
                                alt="Reparació capilar" 
                                class="w-full h-full object-cover group-hover:scale-105 transition-all duration-500"
                            />
                        </div>
                        <h1 class="text-center text-lg font-bold text-title font-inter mt-6"> REPARAR </h1>
                    </a>
                </div>

                <div class="flex flex-col items-center">
                    <a href="/hair-assessment/hairlost" class="cursor-pointer no-underline">
                        <div class="h-72 aspect-[3/4] bg-white flex justify-center items-center rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl group">
                            <img 
                                src="/images/caiguda.png" 
                                alt="Tractament per a la caiguda del cabell" 
                                class="w-full h-full object-cover group-hover:scale-105 transition-all duration-500"
                            />
                        </div>
                        <h1 class="text-center text-lg font-bold text-title font-inter mt-6"> CAIGUDA </h1>
                    </a>
                </div>

                <div class="flex flex-col items-center">
                    <a href="/Page/Pitiriasi" class="cursor-pointer no-underline">
                        <div class="h-72 aspect-[3/4] bg-white flex justify-center items-center rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl group">
                            <img 
                                src="/images/pitriasi.png" 
                                alt="Tractament per a pitiriasi" 
                                class="w-full h-full object-cover group-hover:scale-105 transition-all duration-500"
                            />
                        </div>
                        <h1 class="text-center text-lg font-bold text-title font-inter mt-6"> PITIRIASI </h1>
                    </a>
                </div>

                <div class="flex flex-col items-center">
                    <a href="/Page/Greix" class="cursor-pointer no-underline">
                        <div class="h-72 aspect-[3/4] bg-white flex justify-center items-center rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl group">
                            <img 
                                src="/images/greix.png" 
                                alt="Tractament per a cabell gras" 
                                class="w-full h-full object-cover group-hover:scale-105 transition-all duration-500"
                            />
                        </div>
                        <h1 class="text-center text-lg font-bold text-title font-inter mt-6"> GREIX </h1>
                    </a>
                </div>

                <div class="flex flex-col items-center">
                    <a href="/Page/Cuirsensible" class="cursor-pointer no-underline">
                        <div class="h-72 aspect-[3/4] bg-white flex justify-center items-center rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl group">
                            <img 
                                src="/images/sensible.png" 
                                alt="Tractament per a cuir cabellut sensible" 
                                class="w-full h-full object-cover group-hover:scale-105 transition-all duration-500"
                            />
                        </div>
                        <h1 class="text-center text-lg font-bold text-title font-inter mt-6"> SENSIBLE </h1>
                    </a>
                </div>
            </div>
        </div>
    </MainLayout>
</template>
