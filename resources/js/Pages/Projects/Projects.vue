<script setup>
import Layout from '../../Layouts/Layout.vue';
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

        <Link v-if="user" :href="route('manage')" class="absolute z-[999]">Manage</Link>
        <div class="grid sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 min-h-[50vh] relative z-[99] gap-6 p-6">
            <halftone-background></halftone-background>
            <r-g-b-ribbon style="
            transform: skew(30deg, 0deg) rotate(-9deg);
            top: 20%;
            right: -40%;"></r-g-b-ribbon>
            <faded-circle style="right: 0; top: 0; background: linear-gradient(#ff0000, #ffab00); width: 40rem; height: 40rem; filter: blur(300px)"></faded-circle>
            <faded-circle style="left: 0; bottom: 0; background: linear-gradient(#0077ff, #d000ff); width: 40rem; height: 40rem; filter: blur(300px)"></faded-circle>
            <GridCardSmall v-for="project in projects" :project="project"></GridCardSmall>
        </div>



    </Layout>
</template>


<style scoped>

</style>
