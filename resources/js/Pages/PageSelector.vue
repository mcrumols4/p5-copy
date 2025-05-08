<script setup>
import AdminPanel from '@/Layouts/AdminPanelLayout.vue';
import { defineProps, ref } from 'vue';
import { Head } from '@inertiajs/vue3';
import axios from 'axios';

const props = defineProps({
    pages: Array,
    isAuthenticated: Boolean
});

const category = ref();

category.value = "All"; //Posar el valor Totes Les Pàgines default

const filteredPages = ref();

filteredPages.value = props.pages; //Agafar valor de les pàgines

const filter = () => {
    axios.get('/pages/filter/'+category.value).then((response) => {
       filteredPages.value = response.data; //Canviar totes les pàgines per les seleccionables
    });
};
</script>

<template>
    <Head title="Administració de Pàgines" />

    <AdminPanel>
        <div class="justify-items-center my-10">
            <h1 class="text-4xl font-semibold mb-5 text-center">Administració de Pàgines</h1>
                <h3 class="font-bold mb-2">Filtrar per Categoria:</h3>
                <form class="bold mb-5">
                    <select name="CategorySelect" id="CategorySelect" @change="filter()" v-model="category">
                        <option value="All">Totes les pàgines</option>
                        <option value="Cabell">Cabell</option>
                        <option value="Pell">Pell</option>
                        <option value="Informatiu">Informatives</option>
                    </select>
                </form>
            <div class="bg-box max-w-7xl w-full p-8 rounded-lg">
                <div v-for="page in filteredPages" class="flex flex-row justify-between py-2 border-b-2 border-collapse border-opacity-100">
                    <p class="text-xl">{{ page.title }}</p>
                    <a :href="route('EditorPage', { slug: page.slug })" class="text-xl bg-blue-600 text-white py-1 px-3 rounded"><i class="pi pi-pen-to-square mr-2"></i>Editar</a>
                </div>
            </div>
        </div>
    </AdminPanel>
</template>