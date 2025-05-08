<script setup>
import Navigation from '@/Components/Navigation.vue';
import Footer from '@/Components/Footer.vue';
import Tabs from '@/Components/AdminPanelTabs.vue';
</script>

<template>
    <div class="min-h-screen flex flex-col flex-grow">
        <Navigation/>
        <main>
            <Tabs/>
            <slot />
        </main>
        <Footer/>
    </div>
</template>