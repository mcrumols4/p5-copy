<script setup>
import { Head } from '@inertiajs/vue3';
import MainLayout from '@/Layouts/MainLayout.vue';
import { useForm } from '@inertiajs/vue3';
import { ref, onMounted, computed } from 'vue';
import AlertNotification from '@/Components/AlertNotification.vue';

const isEditUserModalOpen = ref(false);

const define = defineProps({
    users: Array,
    flash: Object,
});


const form = useForm({ //Form for add user
    name: '',
    email: '',
    password: '',
});

form.name = define.users[0].name;
form.email = define.users[0].email;

const alert = ref({
    show: false,
    type: 'success',
    message: '',
    position: 'top-center',
    duration: 3000
});

const showAlert = (type, message) => {
    alert.value = {
        show: true,
        type,
        message,
        position: 'top-center',
        duration: 3000
    };
};

const closeAlert = () => {
    alert.value.show = false;
};

onMounted(() => {
    if (define.flash?.success) {
        showAlert('success', define.flash.success);
    } else if (define.flash?.error) {
        showAlert('error', define.flash.error);
    }
});

const handleFormSubmit = (userId) => {
    form.post(route('UserId.update', userId), {
        preserveScroll: true,  
        preserveState: true,   
        onSuccess: (response) => {
            showAlert('success', 'Usuario modificado correctamente');
            form.password = '';
            window.location.href = route('dashboard.list');
        },
        onError: (errors) => {
            const errorMessage = Object.values(errors).flat()[0] || 'Error al modificar el usuario';
            showAlert('error', errorMessage);
        }
    });
};

</script>

<template>

    <Head title="EditUsers" />
    <MainLayout>
        <AlertNotification
            :show="alert.show"
            :type="alert.type"
            :message="alert.message"
            :position="alert.position"
            :duration="alert.duration"
            @close="closeAlert"
        />
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">Dashboard</h2>
        </template>
        <div v-for="user in users" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-9 mt-7 pt-28">
            
            <div  class="bg-box rounded-lg p-8 shadow-lg">
                <!-- Title for content section -->
                <h2 class="text-2xl font-bold text-center mb-6 text-title">Editar Usuari</h2>
                <form @submit.prevent="handleFormSubmit(user.id)" id="editForm" enctype="multipart/form-data">
                    <label>Nom d'Usuari</label>
                    <input type="text" name="name" class="border border-gray-300 p-2 w-full rounded-lg mb-8" id="name" v-model="form.name"/>
                    <label>Correu Electrònic</label>
                    <input type="email" name="email" class="border border-gray-300 p-2 w-full rounded-lg mb-8" id="email" v-model="form.email"/>
                    <label>Contrasenya</label>
                    <input v-model="form.password" type="password" class="border border-gray-300 p-2 w-full rounded-lg mb-8" id="password" />
                    <button type="submit" form="editForm" class="bg-[#FFD4A5] text-title p-2 rounded-lg w-full mt-8">Modificar Usuari</button>
                </form>
            </div>
        </div>
    </MainLayout>
</template>