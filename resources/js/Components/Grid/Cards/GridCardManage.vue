<script setup>
import ButtonSmall from "@/Components/Buttons/ButtonSmall.vue";

function useImage(image) {
    if (image) {
        return image.src.replace("public", "/storage");
    } else {
        return "https://via.placeholder.com/150";
    }
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

    <div v-if="project" class="w-full h-fit p-6 relative shadow-xl flex flex-col justify-center border border-gray-300 rounded-xl">

        <img :alt="project.title" :src="useImage(project.thumbnail)" class="mb-3 rounded-xl aspect-square object-cover" loading="lazy">
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
