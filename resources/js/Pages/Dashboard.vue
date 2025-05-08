<script setup>
import { Head } from '@inertiajs/vue3';
import AdminPanel from '@/Layouts/AdminPanelLayout.vue';
import { useForm } from '@inertiajs/vue3';
import { ref, onMounted } from 'vue';
import AlertNotification from '@/Components/AlertNotification.vue';
import InputError from '@/Components/InputError.vue';

const define = defineProps({
    users: Array,
    flash: Object,
});

const form = useForm({ //Form for add user
    name: '',
    email: '',
    password: '',
});

const idadmin = ref(null);
const userform = ref(true);


// Alert
const alert = ref({
    show: false,
    type: 'success',
    message: '',
    position: 'top-center',
    duration: 3000
});

// ShowAlert
const showAlert = (type, message) => {
    alert.value = {
        show: true,
        type,
        message,
        position: 'top-center',
        duration: 3000
    };
};

// Close alert
const closeAlert = () => {
    alert.value.show = false;
};

// Verify if the user is admin
onMounted(() => {
    if (define.flash?.success) {
        showAlert('success', define.flash.success);
    } else if (define.flash?.error) {
        showAlert('error', define.flash.error);
    }
});

const handleFormSubmit = () => {
    form.post(route('User.add'), {
        onSuccess: () => {
            showAlert('success', 'Usuario creado correctamente');
            form.reset();
        },
        onError: () => {
            showAlert('error', 'Error al crear el usuario');
        }
    });
};

const navigateToEdit = (userId) => {
    showAlert('info', 'Redirigiendo a la página de edición...');
    window.location.href = route('UserId.edit', userId);
};

const confirmDelete = (userId) => {
    if (confirm('¿Estás seguro de que deseas eliminar este usuario?')) {
        showAlert('warning', 'Eliminando usuario...');
        window.location.href = route('UserId.delete', userId);
    }
};
</script>

<template>

    <Head title="Dashboard" />
    <AdminPanel>
        <!-- Componente de alerta -->
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
        <button v-show="userform == true" @click="userform = false" name="NewUser" class="px-2 py-2 sm:px-6 bg-blue-700 rounded-lg text-white mt-10 ml-60">Nou Usuari</button>
        <button v-show="userform == false" @click="userform = true" name="UserTable" class="px-2 py-2 sm:px-6 bg-blue-700 rounded-lg text-white mt-10 ml-60">Taula Usuaris</button>
        <div v-show="userform == false" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 my-9">
            <div class="bg-box rounded-lg p-8 shadow-lg">
                <!-- Title for content section -->
                <h2 class="text-2xl font-bold text-center mb-6 text-title">Nou Usuari</h2>
                <form @submit.prevent="handleFormSubmit" enctype="multipart/form-data">
                    <label>Nom d'Usuari</label>
                    <input aria-label="User Name" v-model="form.name" type="text" name="name" class="border border-gray-300 p-2 w-full rounded-lg mb-2" id="name" />
                    <InputError :message="form.errors.name" class="mb-4 mt-1" />
                    <label>Correu Electrònic</label>
                    <input aria-label="Mail" v-model="form.email" type="email" name="email" class="border border-gray-300 p-2 w-full rounded-lg mb-2" id="email" />
                    <InputError :message="form.errors.email" class="mb-4 mt-1" />
                    <label>Contrasenya</label>
                    <input aria-label="Password" v-model="form.password" type="password" name="password" class="border border-gray-300 p-2 w-full rounded-lg mb-2" id="password" />
                    <InputError :message="form.errors.password" class="mb-4 mt-1" />
                    
                    <button type="submit" class="bg-[#FFD4A5] text-title p-2 rounded-lg w-full mt-8" :disabled="form.processing">
                        {{ form.processing ? 'Processant...' : 'Crear Usuari' }}
                    </button>
                </form>
            </div>
        </div>
        <div v-show="userform == true" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-16 mt-8">
            <template v-if="$page.props.auth.user && $page.props.auth.user.role == 0">
                <div class="bg-box p-4 shadow sm:rounded-lg sm:p-8 overflow-x-auto md:overflow-visible">
                    <table id="User_Table" class="text-title min-w-full rounded-lg overflow-hidden">
                        <tbody>
                            <tr class="bg-gray-800 w-full rounded-lg">
                                <th
                                    class="w-1/4 rounded-l-lg px-6 py-2 text-sm font-semibold text-white uppercase tracking-wider">
                                    Usuari</th>
                                <th class="w-1/4 px-6 py-2 text-sm font-semibold text-white uppercase tracking-wider">
                                    Rol</th>
                                <th class="w-1/4 px-6 py-5 text-sm font-semibold text-white uppercase tracking-wider">
                                    Email</th>
                                <th
                                    class="w-1/4 rounded-r-lg px-6 py-5 text-sm font-semibold text-white uppercase tracking-wider">
                                </th>
                            </tr>
                            <tr v-for="user in users" id="button-container" class="bg-[#FFD4A5] text-center p-y-4 rounded-3xl">
                                <td class="w-1/4 rounded-l-lg py-2">{{ user.name }}</td>
                                <td class="w-1/4 py-2" v-if="user.role === 0">Admin</td>
                                <td class="w-1/4 py-2" v-else-if="user.role === 1">Supervisor</td>
                                <td class="w-1/4 py-2" v-else>User</td>
                                <td class="w-1/4 py-2">{{ user.email }}</td>
                                <td class="w-1/4 rounded-r-lg py-2">
                                    <button @click="navigateToEdit(user.id)" :name="'Edit_'+user.name" class="bg-blue-600 text-white p-1 rounded-lg mr-4 my-1"><i class="pi pi-user-edit mx-1"></i>Modificar</button>
                                    <button @click="confirmDelete(user.id)" :name="'Delete_'+user.name" class="bg-red-600 text-white p-1 rounded-lg"><i class="pi pi-trash mx-1"></i>Eliminar</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </template>
        </div>
    </AdminPanel>
</template>