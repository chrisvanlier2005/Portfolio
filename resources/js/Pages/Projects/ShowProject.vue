<script setup>
import Layout from "@/Layouts/Layout.vue";
import FadedCircle from "@/Components/Styling/FadedCircle.vue";
import { Link, usePage } from "@inertiajs/inertia-vue3";
import { computed } from "vue";


defineProps({
    project: {
        type: Object,
    }
})
const user = computed(() => usePage().props.value.auth.user);
</script>
<template>
<Layout>
    <section class="relative min-h-screen flex flex-col">
        <div class="pb-4">
            <Link v-if="user" :href="'/projects/' + project.id + '/edit'">Edit</Link>
            <h1 class="text-6xl font-bold">{{project.title}}</h1>
            <p>{{project.description}}</p>

        </div>
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
section {
    margin-top: 5rem;
}
</style>
