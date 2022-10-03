<script setup>
import ButtonSmall from "@/Components/Buttons/ButtonSmall.vue";

function useImage(image) {
    if (image !== undefined) {
        return image.src.replace('public', '/storage');
    }
    return "https://media.istockphoto.com/vectors/thumbnail-image-vector-graphic-vector-id1147544807?k=20&m=1147544807&s=612x612&w=0&h=pBhz1dkwsCMq37Udtp9sfxbjaMl27JUapoyYpQm0anc=";
}

function imageSource(link) {
    return link.replace("public", "storage");
}

defineProps({
    project: {
        type: Object

    }
});
</script>
<template>

    <div v-if="project" class="w-full h-full p-6 relative shadow-xl flex flex-col justify-center">
        <img :alt="project.title" :src="useImage(project.thumbnail)" class="mb-3 rounded-xl" loading="lazy">
        <h1 class="text-xl font-semibold">{{ project.title }}</h1>
        <div class="flex gap-3 w-full">
            <button-small :href="'/projects/' + project.id" as="button" method="delete">Delete</button-small>
            <button-small :href="'/projects/' + project.id + '/edit'">Edit</button-small>
            <button-small :href="'/projects/' + project.id">Read More</button-small>
        </div>
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

.glass {
    backdrop-filter: blur(5px);
    -webkit-backdrop-filter: blur(5px);
    background-color: rgba(255, 255, 255, 0.2);
    outline: 2px solid rgba(255, 255, 255, 0.25);
    border-radius: 20px;
}
</style>
