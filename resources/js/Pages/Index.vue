<script setup>
import Layout from '../Layouts/Layout.vue';
import { Head, usePage } from "@inertiajs/inertia-vue3";
import LandingTitle from "@/Components/Sections/LandingTitle.vue";
import Projects from "@/Components/Sections/Projects.vue";
import About from "@/Components/Sections/About.vue";
import { onMounted, ref } from "vue";
defineProps({
    projects: Array
})
</script>

<template>
    <Head>
        <title>Homepage</title>
    </Head>
    <Layout>
        <LandingTitle class="z-[-1]"></LandingTitle>
        <!--    Projects section    -->
        <Projects :projects="projects" ref="projectsEl"></Projects>
        <!--    About me section    -->
        <About></About>
        <!--    Contact section    -->
    </Layout>
</template>

<script>
export default {
    name: "Index"
}
</script>

<style scoped>

</style>
