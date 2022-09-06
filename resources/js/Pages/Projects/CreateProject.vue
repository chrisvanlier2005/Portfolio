<script setup>
import  Layout  from "../../Layouts/Layout.vue";
import BreezeButton from "@/Components/Breeze/Button.vue";
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import BreezeInput from "@/Components/Breeze/Input.vue";
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import Editor from "@/Components/Typography/Editor.vue";
import ButtonSmall from "@/Components/Buttons/ButtonSmall.vue";
import Label from "@/Components/Breeze/Label.vue";
const form = useForm({
    title: 'Project Title',
    description: 'project description',
    tags: '',
    html: '<p>hello world</p>',
});

const submit = () => {
    form.post(route('projects.store'));
}

</script>
<template>
    <Head>
        <title>Creating project</title>
    </Head>
    <BreezeAuthenticatedLayout>
        <template #header>
            <section class="flex flex-row gap-6 items-center justify-between">
                <article>
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        <h1>Create new Project</h1>
                    </h2>
                </article>
                <article>
                    <!--         Contains menu options           -->
                    <ButtonSmall href="/projects/manage">&lt;- Go back</ButtonSmall>
                </article>
            </section>
        </template>

        <section class="px-24">
            <form @submit.prevent="submit" class="mt-20 relative">
                <BreezeButton class="absolute top-0 right-0" :class="{ 'opacity-25': form.processing }"
                              :disabled="form.processing" name="submitBtn">Save & Upload
                </BreezeButton>

                <div class="pt-10">
                    <Label for="title">Project title</Label>
                    <input id="title" type="text"
                           class="border-gray-300 w-full mt-2
                           focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                           v-model="form.title"
                           required autofocus autocomplete="username" />
                    <div v-if="form.errors.title">{{ form.errors.title }}</div>
                </div>
                <div class="pt-10">
                    <Label for="description">Project description</Label>
                    <textarea id="description" class="border-gray-300 w-full mt-2
                           focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                              v-model="form.description" required></textarea>
                    <div v-if="form.errors.description">{{ form.errors.description }}</div>
                </div>
                <div>
                    <Label for="tags">Tags</Label>
                    <input id="tags" type="text"
                           class="border-gray-300 w-full mt-2
                           focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                           v-model="form.tags"/>
                    <div v-if="form.errors.tags">{{ form.errors.tags }}</div>
                </div>
                <div class="pt-10 relative">
                    <div v-if="form.errors.html">{{ form.errors.html }}</div>
                    <editor v-model="form.html" class=""></editor>
                </div>
            </form>
        </section>
    </BreezeAuthenticatedLayout>
</template>
<script>

</script>

<style>
.ProseMirror{
 @apply bg-white p-10 border-[1px] border-gray-300 w-full mt-2
 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm;
}
.ProseMirror > * + * {
    margin-top: 0.75em;
}
.ProseMirror code {
    background-color: rgba(97, 97, 97, 0.1);
    color: #616161;
}

.content {
    padding: 1rem 0 0;
}
.content h3 {
    margin: 1rem 0 0.5rem;
}
.content pre {
    border-radius: 5px;
    color: #333;
}
.content code {
    display: block;
    white-space: pre-wrap;
    font-size: 0.8rem;
    padding: 0.75rem 1rem;
    background-color: #e9ecef;
    color: #495057;
}
</style>
