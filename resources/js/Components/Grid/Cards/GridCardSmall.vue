<script setup>
 import ButtonSmall from "@/Components/Buttons/ButtonSmall.vue";
 import { onMounted, ref     } from "vue";
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
 const props = defineProps({
     project: {
         type: Object,
     }
 })
 const createdAt = ref(null)
 onMounted(() => {
     const date = new Date(props.project.created_at)
     console.log(date)
     createdAt.value.innerText = `Created: ${date.toLocaleDateString()}`
 });
</script>
<template>
<!--    <div v-if="project" class="glass w-full h-full p-6 relative">
        <img v-if="project.images[0]" :src="imageSource(project.images[0].src)" :alt="project.title" class="mb-3 rounded-xl" loading="lazy">
        <img v-else :src="useImage(project.image)" :alt="project.title" class="mb-3 rounded-xl" loading="lazy">
        <h1 class="text-xl font-semibold">{{ project.title }}</h1>
        <p class="text-sm lg:text-md">{{ project.description }}</p>
        <button-small :href="'/projects/' + project.id" class="absolute bottom-3 right-6">Read More</button-small>
    </div>
    <div v-else class="glass w-full h-full p-6 relative">
        <h1 class="text-xl font-semibold pb-3"><slot name="title"></slot></h1>
        <div><slot name="content"></slot></div>
    </div>-->
    <article class="shadow-lg shadow-rose-700
    h-full w-full rounded-xl
    overflow-hidden
    relative article-container">
        <Link :href="route('projects.show', {'id': project.id})">
            <img :src="useImage(project.images[0])" :alt="project.title"
                 class="w-full h-full object-cover"/>
            <div
                class="absolute bottom-0 left-0 w-full h-16
                faded-gradient">
                <div class="flex flex-col justify-center h-full px-4">
                    <h1 class="text-xl font-semibold">{{ project.title }}</h1>

                    <div class="article-details-hidden">
                        <p class="text-sm lg:text-md">{{ project.description }}</p>
                        <p ref="createdAt">{{project.created_at}}</p>
                    </div>
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
