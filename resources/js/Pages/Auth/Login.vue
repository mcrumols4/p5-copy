<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
        <Head title="Iniciar Sessió" />

        <div class="flex min-h-screen items-center justify-center bg-[#F5F3F2] dark:bg-[#F5F3F2] px-4">
            <div class="w-full max-w-md bg-[#FFF1EA] dark:bg-[#FFF1EA] rounded-lg shadow-lg p-8">
                <!-- Logo and Title Section -->
                <div class="text-center mb-8">
                    <Link href="/" class="inline-block hover:opacity-80 transition-opacity duration-200">
                        <img src="/images/logo.png" alt="ILoveJobs Logo" class="h-16 mx-auto mb-6" />
                    </Link>
                    <h2 class="text-3xl font-extrabold text-[#4D4242] dark:text-[#4D4242] mb-3">
                        Inicia Sessió
                    </h2>
                    <p class="text-sm text-[#4D4242] dark:text-[#4D4242]">
                        Accedeix al teu compte per continuar
                    </p>
                </div>

                <div v-if="status" class="mb-6 text-sm font-medium text-green-600 text-center">
                    {{ status }}
                </div>

                <!-- Form Section -->
                <form @submit.prevent="submit" class="space-y-6">
                    <div class="text-center">
                        <InputLabel for="email" name="email" value="Correu electrònic" class="text-left block text-[#4D4242] dark:text-[#4D4242]" />
                        <TextInput
                            id="email"
                            name="email"
                            type="email"
                            class="mt-2 block w-full bg-white border-[#E5D8D1] dark:border-[#E5D8D1] dark:bg-white dark:text-[#4D4242] rounded-lg shadow-sm focus:ring-[#4D4242] focus:border-[#4D4242]"
                            v-model="form.email"
                            required
                            autofocus
                            autocomplete="username"
                        />
                        <InputError class="mt-2 text-left" :message="form.errors.email" />
                    </div>

                    <div>
                        <InputLabel for="password" name="password" value="Contrasenya" class="text-[#4D4242] dark:text-[#4D4242]" />
                        <TextInput
                            id="password"
                            name="password"
                            type="password"
                            class="mt-1 block w-full bg-white border-[#E5D8D1] dark:border-[#E5D8D1] dark:bg-white dark:text-[#4D4242] rounded-lg shadow-sm focus:ring-[#4D4242] focus:border-[#4D4242]"
                            v-model="form.password"
                            required
                            autocomplete="current-password"
                        />
                        <InputError class="mt-2" :message="form.errors.password" />
                    </div>

                    <div class="flex items-center justify-between">
                        <label class="flex items-center">
                            <Checkbox 
                                name="remember" 
                                v-model:checked="form.remember"
                                class="rounded border-[#E5D8D1] text-[#4D4242] focus:ring-[#4D4242]"
                            />
                            <span class="ms-2 text-sm text-[#4D4242] dark:text-[#4D4242]">Recorda'm</span>
                        </label>

                        <Link
                            v-if="canResetPassword"
                            :href="route('password.request')"
                            class="text-sm text-[#4D4242] hover:underline dark:text-[#4D4242]"
                        >
                            Has oblidat la contrasenya?
                        </Link>
                    </div>

                    <div class="flex justify-center">
                        <PrimaryButton
                            type="submit"
                            name="submit"
                            class="w-full flex items-center justify-center py-3 px-6 bg-[#4D4242] hover:bg-opacity-90 text-white font-semibold rounded-lg shadow-md transition duration-300 text-base"
                            :class="{ 'opacity-25': form.processing }"
                            :disabled="form.processing"
                        >
                            <span class="inline-block text-center">
                                {{ form.processing ? 'Processant...' : 'Iniciar Sessió' }}
                            </span>
                        </PrimaryButton>
                    </div>

                <!-- Social Login Section -->
                <div class="mt-6">
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-[#E5D8D1]"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-[#FFF1EA] text-[#4D4242]">O continua amb</span>
                        </div>
                    </div>

                    <div class="mt-6 grid grid-cols-5 gap-3"> <!-- Update grid to cols-5 -->
                        <a :href="route('socialite.redirect', 'google')" 
                           class="w-full inline-flex justify-center py-2 px-4 border border-[#E5D8D1] rounded-md shadow-sm bg-white text-sm font-medium text-[#4D4242] hover:bg-gray-50">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12.545,10.239v3.821h5.445c-0.712,2.315-2.647,3.972-5.445,3.972c-3.332,0-6.033-2.701-6.033-6.032s2.701-6.032,6.033-6.032c1.498,0,2.866,0.549,3.921,1.453l2.814-2.814C17.503,2.988,15.139,2,12.545,2C7.021,2,2.543,6.477,2.543,12s4.478,10,10.002,10c8.396,0,10.249-7.85,9.426-11.748L12.545,10.239z"/>
                            </svg>
                        </a>

                        <a :href="route('socialite.redirect', 'x')" 
                        class="w-full inline-flex justify-center py-2 px-4 border border-[#E5D8D1] rounded-md shadow-sm bg-white text-sm font-medium text-[#4D4242] hover:bg-gray-50">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                            </svg>
                        </a>

                        <a :href="route('socialite.redirect', 'github')" 
                           class="w-full inline-flex justify-center py-2 px-4 border border-[#E5D8D1] rounded-md shadow-sm bg-white text-sm font-medium text-[#4D4242] hover:bg-gray-50">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                        
                        <a :href="route('socialite.redirect', 'spotify')" 
                           class="w-full inline-flex justify-center py-2 px-4 border border-[#E5D8D1] rounded-md shadow-sm bg-white text-sm font-medium text-[#4D4242] hover:bg-gray-50">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.66 0 12 0zm5.521 17.34c-.24.359-.66.48-1.021.24-2.82-1.74-6.36-2.101-10.561-1.141-.418.122-.779-.179-.899-.539-.12-.421.18-.78.54-.9 4.56-1.021 8.52-.6 11.64 1.32.42.18.479.659.301 1.02zm1.44-3.3c-.301.42-.841.6-1.262.3-3.239-1.98-8.159-2.58-11.939-1.38-.479.12-1.02-.12-1.14-.6-.12-.48.12-1.021.6-1.141C9.6 9.9 15 10.561 18.72 12.84c.361.181.54.78.241 1.2zm.12-3.36C15.24 8.4 8.82 8.16 5.16 9.301c-.6.179-1.2-.181-1.38-.721-.18-.601.18-1.2.72-1.381 4.26-1.26 11.28-1.02 15.721 1.621.539.3.719 1.02.419 1.56-.299.421-1.02.599-1.559.3z"/>
                            </svg>
                        </a>

                        <a :href="route('socialite.redirect', 'linkedin-openid')" 
                           class="w-full inline-flex justify-center py-2 px-4 border border-[#E5D8D1] rounded-md shadow-sm bg-white text-sm font-medium text-[#4D4242] hover:bg-gray-50">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                </svg>
                            </a>

                        <a :href="route('socialite.redirect', 'twitch')" 
                           class="w-full inline-flex justify-center py-2 px-4 border border-[#E5D8D1] rounded-md shadow-sm bg-white text-sm font-medium text-[#4D4242] hover:bg-gray-50">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                <path d="M11.571 4.714h1.715v5.143H11.57zm4.715 0H18v5.143h-1.714zM6 0L1.714 4.286v15.428h5.143V24l4.286-4.286h3.428L22.286 12V0zm14.571 11.143l-3.428 3.428h-3.429l-3 3v-3H6.857V1.714h13.714Z"/>
                            </svg>
                        </a>
                        
                        <a :href="route('socialite.redirect', 'discord')" 
                           class="w-full inline-flex justify-center py-2 px-4 border border-[#E5D8D1] rounded-md shadow-sm bg-white text-sm font-medium text-[#4D4242] hover:bg-gray-50">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M20.317 4.37a19.791 19.791 0 0 0-4.885-1.515a.074.074 0 0 0-.079.037c-.21.375-.444.864-.608 1.25a18.27 18.27 0 0 0-5.487 0a12.64 12.64 0 0 0-.617-1.25a.077.077 0 0 0-.079-.037A19.736 19.736 0 0 0 3.677 4.37a.07.07 0 0 0-.032.027C.533 9.046-.32 13.58.099 18.057a.082.082 0 0 0 .031.057a19.9 19.9 0 0 0 5.993 3.03a.078.078 0 0 0 .084-.028a14.09 14.09 0 0 0 1.226-1.994a.076.076 0 0 0-.041-.106a13.107 13.107 0 0 1-1.872-.892a.077.077 0 0 1-.008-.128a10.2 10.2 0 0 0 .372-.292a.074.074 0 0 1 .077-.01c3.928 1.793 8.18 1.793 12.062 0a.074.074 0 0 1 .078.01c.12.098.246.198.373.292a.077.077 0 0 1-.006.127a12.299 12.299 0 0 1-1.873.892a.077.077 0 0 0-.041.107c.36.698.772 1.362 1.225 1.993a.076.076 0 0 0 .084.028a19.839 19.839 0 0 0 6.002-3.03a.077.077 0 0 0 .032-.054c.5-5.177-.838-9.674-3.549-13.66a.061.061 0 0 0-.031-.03zM8.02 15.33c-1.183 0-2.157-1.085-2.157-2.419c0-1.333.956-2.419 2.157-2.419c1.21 0 2.176 1.096 2.157 2.42c0 1.333-.956 2.418-2.157 2.418zm7.975 0c-1.183 0-2.157-1.085-2.157-2.419c0-1.333.955-2.419 2.157-2.419c1.21 0 2.176 1.096 2.157 2.42c0 1.333-.946 2.418-2.157 2.418z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                </form>
            </div>
        </div>
</template>

<style scoped>
:deep(.application-logo), :deep(.shrink-0) {
    display: none !important;
}
</style>