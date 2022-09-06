<script setup>
import  Layout  from "../../Layouts/Layout.vue";
import BreezeButton from "@/Components/Breeze/Button.vue";
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import Editor from "@/Components/Typography/Editor.vue";
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { onMounted, ref } from "vue";
import ButtonSmall from "@/Components/Buttons/ButtonSmall.vue";
const form = useForm({
    title: '',
    description: '',
    tags: '',
    html: '',
    id: null,
});

const submit = () => {
    form.put(route('projects.update', { project: form.id }));
}
const uploadImageForm = useForm({
    image: null,
    id: null,
})
const uploadImage = () => {
    uploadImageForm.post('/projects/' + uploadImageForm.id + '/image')
}
const getSrcAttr = (link) => {
    return link.replace("public", "/storage")
}
const showImageForm = ref(false);

const makeThumbnailForm = useForm({
    id: null,
})
const makeThumbnail = (id) => {
    makeThumbnailForm.id = id
    makeThumbnailForm.post('/images/thumbnail');
}
</script>
<template>
    <Head>
        <title>Edit project</title>
    </Head>
    <BreezeAuthenticatedLayout>
        <template #header>
            <section class="flex flex-row gap-6 items-center justify-between">
                <article>
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        <h1>Editing project</h1>

                    </h2>
                </article>
                <article>
                    <!--         Contains menu options           -->
                    <ButtonSmall href="/projects/manage">&lt;- Go back</ButtonSmall>
                </article>
            </section>
        </template>
        <section class="popup fixed top-0 left-0 w-screen h-screen z-[98] flex justify-center items-center" v-if="showImageForm">
            <article class="bg-white w-96 h-96 rounded-xl shadow-xl">
                <h1>Add image to project</h1>
                <form @submit.prevent="uploadImage">
                    <input type="file" name="image" id="image" @input="uploadImageForm.image = $event.target.files[0]">
                    <span v-if="uploadImageForm.errors.image">{{uploadImageForm.errors.image}}</span>
                    <progress v-if="uploadImageForm.progress" :value="uploadImageForm.progress.percentage" max="100"></progress>
                    <button type="submit" class="bg-blue-500">Upload</button>
                </form>
            </article>
        </section>
        <section class="px-24">
            <form @submit.prevent="submit" class="mt-20 relative">
                <BreezeButton class="absolute top-[-55px] right-0" :class="{ 'opacity-25': form.processing }"
                              :disabled="form.processing" name="submitBtn">Save & Upload
                </BreezeButton>
                <section class="grid grid-cols-1 md:grid-cols-3 p-5 gap-6">
                    <div class="col-span-2">
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
                                   v-model="form.tags" />
                            <div v-if="form.errors.tags">{{ form.errors.tags }}</div>
                        </div>
                    </div>
                    <div class="w-full bg-white rounded-xl shadow-xl p-6">
                        <div class="flex justify-between items-center">
                            <h1 class="text-xl font-semibold">Manage images</h1>
                            <div class="text-2xl font-semibold" @click="showImageForm = !showImageForm">+</div>

                        </div>
                        <section class="grid grid-cols-2">
                            <!--             Images and Thumbnails               -->
                            <div v-for="image in project.images" class="w-full h-24 bg-gray-100">
                                <img :src="getSrcAttr(image.src)" alt="image" class="aspect-square object-cover rounded-xl"/>
                                <button @click="makeThumbnail(image.id)" ></button>
                            </div>

                        </section>
                    </div>
                </section>

                <div class="pt-10 relative">
                    <div v-if="form.errors.html">{{ form.errors.html }}</div>
                    <editor v-model="form.html" class=""></editor>
                </div>
            </form>
        </section>
    </BreezeAuthenticatedLayout>
</template>
<script>
export default {
    props: {
        project: {
            type: Object,
            default: () => ({})
        }
    },
    mounted() {
        this.form.title = this.project.title;
        this.form.description = this.project.description;
        this.form.html = this.project.html;
        this.form.id = this.project.id;
        this.uploadImageForm.id = this.project.id;
        console.log(this.uploadImageForm);
    },
}
</script>

<style>
.ProseMirror{
 @apply bg-white p-10;
}
.ProseMirror > * + * {
    margin-top: 0.75em;
}
.ProseMirror code {
    background-color: rgba(97, 97, 97, 0.1);
    color: #616161;
}
.popup {
    background-color: rgba(0, 0, 0, 0.3);
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
