<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import { onMounted, ref } from "vue";
let links = [
    { text: "Home", href: route('home') },
    { text: "Projects", href: route('projects.index') },
    { text: "About me", href: route('about-me') },
    { text: "Contact", href: route('contact') }
];

</script>
<script>
export default {
    data(){
        return {
            animate: false
        };
    },
    mounted() {
        this.animate = true;
    }
}
</script>
<template>
    <div id="wrapper" class="bg-black text-white min-h-screen px-16 md:px-24 extraLarge:px-64  relative overflow-x-hidden overflow-y-hidden">
        <div class="fixed top-0 left-0 w-full px-24 extraLarge:px-64 z-[99]">
            <nav class="py-3 font-semibold flex flex-col md:flex-row justify-between items-center">
                <h1 class="text-xl" ref="title"><Link :href="route('home')">Chris van Lier</Link></h1>
                <ul class="flex gap-7">
                    <li v-for="link in links">
                        <Link :href="link.href">{{ link.text }}</Link>
                    </li>
                </ul>
            </nav>
        </div>'
        <transition name="page" mode="out-in">
            <main class="relative z-0 pt-14" v-if="animate">
                <slot></slot>
            </main>
        </transition>
    </div>
</template>
<style scoped>
nav {
    backdrop-filter: blur(5px);
}
nav h1 {
    filter: drop-shadow(1px 2px 5px black);
}

</style>
<style>
.page-enter-active,
.page-leave-active {
    transition: all 100ms;
}

.page-enter-from,
.page-leave-to {

}
</style>

