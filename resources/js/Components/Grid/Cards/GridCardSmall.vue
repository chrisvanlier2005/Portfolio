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
     createdAt.value.innerText = `Created: ${date.toLocaleDateString()}`
 });
</script>
<template>
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
