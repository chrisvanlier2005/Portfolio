<script setup>
 import ButtonSmall from "@/Components/Buttons/ButtonSmall.vue";
 import { Link } from "@inertiajs/inertia-vue3";
 function useImage(image) {
     if (image) {
         return image.src.replace("public", "/storage");
     } else {
         return "https://via.placeholder.com/150";
     }
 }
 function imageSource(link){
     return link.replace('public', 'storage')
 }
 defineProps({
     project: {
         type: Object,
         required: true
     }
 })
</script>
<template>
<!--    <div class="glass w-full h-full p-6 relative">
        <img v-if="project.images[0]" :src="imageSource(project.images[0].src)" :alt="project.title" class="mb-3 rounded-xl" loading="lazy">
        <img v-else :src="useImage(project.image)" :alt="project.title" class="mb-3 rounded-xl" loading="lazy">
        <h1 class="text-xl font-semibold">{{ project.title }}</h1>
        <p>{{ project.description }}</p>
        <button-small :href="'/projects/' + project.id" class="absolute bottom-3 right-6">Read More</button-small>
    </div>-->
    <article class="shadow-lg shadow-rose-700
    h-full w-full rounded-xl
    overflow-hidden
    relative article-container">
        <Link :href="route('projects.show', {'id': project.id})">
            <img :src="useImage(project.images[0])" :alt="project.title"
            class="w-full h-full object-cover"/>
            <div
                class="absolute bottom-0 left-0 w-full h-24
                faded-gradient">
                <div class="flex flex-col justify-center h-full px-4">
                    <h1 class="text-3xl font-semibold">{{ project.title }}</h1>
                    <p class="">{{ project.description }}</p>
                </div>
            </div>
        </Link>
    </article>
</template>

<script>
export default {
    name: "GridCardSmall"
};
</script>

<style scoped>
    .glass{
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        background-color: rgba(255, 255, 255, 0.2);
        outline: 2px solid rgba(255,255,255,0.25);
        border-radius: 20px;
    }
</style>
