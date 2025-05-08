<script setup>
import DeleteUserForm from './Partials/DeleteUserForm.vue';
import UpdatePasswordForm from './Partials/UpdatePasswordForm.vue';
import UpdateProfileInformationForm from './Partials/UpdateProfileInformationForm.vue';
import { Head } from '@inertiajs/vue3';
import AdminPanel from '@/Layouts/AdminPanelLayout.vue';
defineProps({
    mustVerifyEmail: {
        type: Boolean,
    },
    status: {
        type: String,
    },
    users: Array,
});

const value = 1;
</script>

<template>
    <Head title="Profile" />
    <AdminPanel>

        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800"
            >
                Profile
            </h2>
        </template>

        <div class="pb-12">
            <div class=" pt-16 mx-auto max-w-7xl space-y-6 sm:px-6 lg:px-8">
                <div class="bg-box p-4 shadow sm:rounded-lg sm:p-8">
                    <UpdateProfileInformationForm
                        :must-verify-email="mustVerifyEmail"
                        :status="status"
                        class="max-w-xl"/>
                </div>

                <div class="bg-box p-4 shadow sm:rounded-lg sm:p-8">
                    <UpdatePasswordForm class="max-w-xl" />
                </div>
                <template v-if="$page.props.auth.user && $page.props.auth.user.role > 0">
                    <div class="bg-box p-4 shadow sm:rounded-lg sm:p-8">
                        <DeleteUserForm class="max-w-xl" />
                    </div>
                </template>
            </div>
        </div>
    </AdminPanel>
</template>