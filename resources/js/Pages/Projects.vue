<script setup>
import Layout from '../Layouts/Layout.vue';
import RGBRibbon from "@/Components/Styling/RGBRibbon.vue";
import halftoneBackground from "@/Components/Styling/HalftoneBackground.vue";
import fadedCircle from "@/Components/Styling/FadedCircle.vue";
import GridCardSmall from "@/Components/Grid/Cards/GridCardSmall.vue";
import { usePage, Link } from "@inertiajs/inertia-vue3";
import { computed } from "vue";
defineProps({
    projects: {
        type: Array,
        default: []
    }
});
const user = computed(() => usePage().props.value.auth.user);
</script>
<template>
    <Layout>
        <section class="flex min-h-[50vh] relative gap-6  items-center justify-center">
            <div class="z-[1]">
                <h1 class="text-6xl font-semibold filter-shadow">Projects</h1>
            </div>
            <halftone-background></halftone-background>
            <r-g-b-ribbon style="
            transform: skew(30deg, 0deg) rotate(-9deg);
            top: 20%;
            right: -40%;"></r-g-b-ribbon>
            <fadedCircle style="right: 0; top: 0; background: linear-gradient(#ff0000, #ffab00); width: 40rem; height: 40rem; filter: blur(300px)"></fadedCircle>
            <fadedCircle style="left: 0; bottom: 0; background: linear-gradient(#0077ff, #d000ff); width: 40rem; height: 40rem; filter: blur(300px)"></fadedCircle>
        </section>
        <section class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 gap-6 p-4">
            <GridCardSmall v-for="project in projects" :project="project"></GridCardSmall>
        </section>
    </Layout>
</template>


<style scoped>

</style>
