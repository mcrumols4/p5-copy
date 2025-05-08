<script setup>
import { computed } from 'vue';

const route1 = '/dashboard';
const route2 = '/profile';
const route3 = '/dashboard/pages';
const route4 = '/modify/questionnaire';

const pathname = window.location.pathname;
</script>

<template>
    <div class="pt-32">
    <div class="w-[95%] md:w-[75%] justify-self-center mt-5 text-xl font-medium">
        <div class="flex flex-wrap md:flex-nowrap gap-4">
            <template v-if="$page.props.auth.user && $page.props.auth.user.role == 0">
                <a :href="route1" :class="{ active: pathname == route1 }" class="border-b-2 px-2 md:mx-2">Usuaris</a>
                <a :href="route2" :class="{ active: pathname == route2 }" class="border-b-2 px-2 md:mx-2">Perfil</a>
            </template>
            <a :href="route3" :class="{ active: pathname == route3 }" class="border-b-2 px-2 md:mx-2">Pàgines</a>
            <a name="Qüestionaris" :href="route4" :class="{ active: pathname == route4 }" class="border-b-2 px-2 md:mx-2">Qüestionaris</a>
        </div>
    </div>
</div>
</template>

<style scoped>
.active {
    border-color: black;
}
</style>