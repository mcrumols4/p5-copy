<script setup>
import { Head } from '@inertiajs/vue3';
import MainLayout from '@/Layouts/MainLayout.vue';
import { useForm } from '@inertiajs/vue3';

const define = defineProps({
    forms: Array
});


const form = useForm({
    title: ''
});

form.title = define.forms[0].title;

</script>

<template>

    <Head title="EditForm" />
    <MainLayout>
        <div v-for="formes in forms" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-9 mt-7 pt-28">
            
            <div  class="bg-box rounded-lg p-8 shadow-lg">
                <!-- Title for content section -->
                <h2 class="text-2xl font-bold text-center mb-6 text-title">Editar Questionari</h2>
                <form @submit.prevent="form.post(route('forms.update', formes.id))" id="editForm" enctype="multipart/form-data">
                    <label>Titol del Questionari</label>
                    <input type="text" class="border border-gray-300 p-2 w-full rounded-lg mb-8" name="edit_questionnaire" id="title" v-model="form.title"/>
                    <button type="submit" form="editForm" class="bg-[#FFD4A5] text-title p-2 rounded-lg w-full mt-8">Modificar Questionari</button>
                </form>
            </div>
        </div>
    </MainLayout>
</template>