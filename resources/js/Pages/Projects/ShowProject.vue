<script setup>
import Layout from "@/Layouts/Layout.vue";
import FadedCircle from "@/Components/Styling/FadedCircle.vue";
import { Link, usePage } from "@inertiajs/inertia-vue3";
import { computed } from "vue";
import RGBRibbon from "@/Components/Styling/RGBRibbon.vue";
import halftoneBackground from "@/Components/Styling/HalftoneBackground.vue";
import IconX from "@/Components/IconX.vue";
import { Inertia } from "@inertiajs/inertia";
defineProps({
    project: {
        type: Object,
    }
})
const back = () => {
    const url = usePage().props.value.previousUrl;
    if (url) {
        Inertia.visit(url, {preserveScroll: true});
    }
}
const user = computed(() => usePage().props.value.auth.user);
</script>
<template>
<Layout>
    <div class="flex min-h-[50vh] relative gap-6  items-center justify-center">
        <div class="absolute left-0 top-12 w-fit h-fit  z-[99] cursor-pointer   ">
            <IconX @click="back()"></IconX>
        </div>
        <halftoneBackground></halftoneBackground>
        <faded-circle style="right: 0; top: 0; background: linear-gradient(#ff0000, #ffab00); width: 40rem; height: 40rem; filter: blur(300px)"></faded-circle>
        <faded-circle style="left: 0; bottom: 0; background: linear-gradient(#0077ff, #d000ff); width: 40rem; height: 40rem; filter: blur(300px)"></faded-circle>
        <div class="z-[99] relative">
            <h1 class="text-6xl font-semibold filter-shadow text-center">{{project.title}}</h1>
            <p class="text-center">{{project.description}}</p>
        </div>
    </div>
    <section class="relative min-h-screen flex flex-col z-[99] gap-3">
        <Link v-if="user" :href="'/projects/' + project.id + '/edit'" class="bg-blue-500 px-2 z-[99] rounded-md w-fit">Edit</Link>
        <div class="prose bg-white rounded-md max-w-none w-full px-4 py-2" v-html="project.html"></div>
        <faded-circle style="right: 0; top: -20%;background: linear-gradient(red, orange);width: 40rem; height: 40rem;filter: blur(300px); z-index: -1;"></faded-circle>
    </section>
</Layout>
</template>

<script>
export default {
    name: "ShowProject"
};
</script>

<style scoped>

</style>
