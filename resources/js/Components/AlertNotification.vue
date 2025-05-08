<script setup>
import { ref, watch } from 'vue';

const props = defineProps({
    show: {
        type: Boolean,
        default: false
    },
    type: {
        type: String,
        default: 'success', // success, error, warning, info
        validator: (value) => ['success', 'error', 'warning', 'info'].includes(value)
    },
    message: {
        type: String,
        default: ''
    },
    duration: {
        type: Number,
        default: 5000 // 5 seconds by default
    },
    position: {
        type: String,
        default: 'top-right', // top-right, top-left, bottom-right, bottom-left, top-center, bottom-center
        validator: (value) => ['top-right', 'top-left', 'bottom-right', 'bottom-left', 'top-center', 'bottom-center'].includes(value)
    }
});

const emit = defineEmits(['close']);
const isVisible = ref(props.show);

watch(() => props.show, (newValue) => {
    isVisible.value = newValue;
    if (newValue && props.duration > 0) {
        setTimeout(() => {
            closeAlert();
        }, props.duration);
    }
});

const closeAlert = () => {
    isVisible.value = false;
    emit('close');
};

const getAlertClasses = () => {
    const baseClasses = 'fixed z-50 p-4 rounded-lg shadow-lg flex items-center transition-all duration-300 transform';
    
    // Type of alert
    const typeClasses = {
        success: 'bg-green-100 border-l-4 border-green-500 text-green-700',
        error: 'bg-red-100 border-l-4 border-red-500 text-red-700',
        warning: 'bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700',
        info: 'bg-blue-100 border-l-4 border-blue-500 text-blue-700'
    };
    
    // Position
    const positionClasses = {
        'top-right': 'top-4 right-4',
        'top-left': 'top-4 left-4',
        'bottom-right': 'bottom-4 right-4',
        'bottom-left': 'bottom-4 left-4',
        'top-center': 'top-4 left-1/2 -translate-x-1/2',
        'bottom-center': 'bottom-4 left-1/2 -translate-x-1/2'
    };
    
    return `${baseClasses} ${typeClasses[props.type]} ${positionClasses[props.position]}`;
};

const getIconClass = () => {
    const icons = {
        success: 'fas fa-check-circle',
        error: 'fas fa-exclamation-circle',
        warning: 'fas fa-exclamation-triangle',
        info: 'fas fa-info-circle'
    };
    
    return icons[props.type];
};
</script>

<template>
    <Transition
        enter-active-class="transition duration-300 ease-out"
        enter-from-class="transform opacity-0 scale-95"
        enter-to-class="transform opacity-100 scale-100"
        leave-active-class="transition duration-200 ease-in"
        leave-from-class="transform opacity-100 scale-100"
        leave-to-class="transform opacity-0 scale-95"
    >
        <div v-if="isVisible" :class="getAlertClasses()" role="alert">
            <div class="flex items-center">
                <div class="flex-shrink-0 mr-3">
                    <i :class="getIconClass()"></i>
                </div>
                <div class="flex-grow">
                    <p class="font-medium">{{ message }}</p>
                </div>
                <div class="flex-shrink-0 ml-3">
                    <button 
                        @click="closeAlert" 
                        class="text-gray-500 hover:text-gray-700 focus:outline-none"
                        aria-label="Cerrar"
                    >
                        <span class="text-xl">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </Transition>
</template>