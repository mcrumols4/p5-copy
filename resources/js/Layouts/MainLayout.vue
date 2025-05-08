<script setup>
import Navigation from '@/Components/Navigation.vue';
import Footer from '@/Components/Footer.vue';
</script>
<template>
    <div class="min-h-screen flex flex-col flex-grow">
        <Navigation></Navigation>
        <main>
            <slot />
        </main>
        <Footer></Footer>
    </div>
</template>