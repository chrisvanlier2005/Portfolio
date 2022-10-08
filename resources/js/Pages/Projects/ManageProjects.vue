<script setup>
import Layout from "@/Layouts/Layout.vue";
import  BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import BreezeButton from "@/Components/Breeze/Button.vue";
import {ImageElement} from "@/Classes/Image.js";
import GridCardManage from "@/Components/Grid/Cards/GridCardManage.vue";
import ButtonSmall from "@/Components/Buttons/ButtonSmall.vue";
import { computed, onMounted } from "vue";
defineProps({
    projects: {
        type: Array,
        default: []
    }
})
</script>

<template>
    <BreezeAuthenticatedLayout>
        <template #header>
            <section class="flex flex-row gap-6 items-center justify-between">
                <article>
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        <h1>Manage Projects</h1>
                    </h2>
                </article>
                <article>
                    <ButtonSmall href="/projects/create">Create Project</ButtonSmall>
                </article>
            </section>
        </template>
        <div class="py-12">
            <div class="grid
            sm:grid-cols-2 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4
            min-h-[50vh] relative z-[99]
            gap-6 p-6 pt-12
            max-w-[1600px] mx-auto
            ">
                <GridCardManage v-for="project in projects" :project="project"></GridCardManage>
            </div>
        </div>

    </BreezeAuthenticatedLayout>
</template>

<script>
export default {
    name: "ManageProjects"
};
</script>

<style scoped>

</style>
