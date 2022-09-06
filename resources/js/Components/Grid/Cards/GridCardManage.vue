<script setup>
import { Link } from "@inertiajs/inertia-vue3";
 import ButtonSmall from "@/Components/Buttons/ButtonSmall.vue";
 function useImage(image){
     if (image !== undefined){
         return image;
     }
     return "https://media.istockphoto.com/vectors/thumbnail-image-vector-graphic-vector-id1147544807?k=20&m=1147544807&s=612x612&w=0&h=pBhz1dkwsCMq37Udtp9sfxbjaMl27JUapoyYpQm0anc=";
 }
function imageSource(link){
    return link.replace('public', 'storage')
}
 defineProps({
     project: {
         type: Object,

     }
 })
</script>
<template>

    <div v-if="project" class="w-full h-full p-6 relative shadow-xl flex flex-col justify-center">
        <img :src="useImage(project.image)" :alt="project.title" class="mb-3 rounded-xl" loading="lazy">
        <h1 class="text-xl font-semibold">{{ project.title }}</h1>
        <p>{{project.id}}</p>
        <!--   delete button     -->
        <div class="flex gap-3 w-full">
            <button-small :href="'/projects/' + project.id" method="delete" as="button">Delete</button-small>
            <button-small :href="'/projects/' + project.id + '/edit'">Edit</button-small>
            <button-small :href="'/projects/' + project.id">Read More</button-small>
        </div>
        </div>
    <div v-else class="glass w-full h-full p-6 relative">
        <h1 class="text-xl font-semibold pb-3"><slot name="title"></slot></h1>
        <div><slot name="content"></slot></div>
    </div>

</template>

<script>
export default {
    name: "GridCardManage"
};
</script>

<style scoped>
    img {
      width: 100%;
      height: 70%;
      object-fit: cover;
    }

    .glass{
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        background-color: rgba(255, 255, 255, 0.2);
        outline: 2px solid rgba(255,255,255,0.25);
        border-radius: 20px;
    }
</style>
