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
    },
    methods: {
        loggedIn() {
            return this.$page.props.auth.user;
        }
    }
}
</script>
<template>
    <div id="wrapper" class="bg-black text-white min-h-screen px-16 md:px-24 extraLarge:px-64  relative overflow-x-hidden overflow-y-hidden">
        <div class="fixed top-0 left-0 w-full px-12 extraLarge:px-64 z-[99] nav-wrapper">
            <nav class="py-3 font-semibold flex flex-row justify-between items-center">
                <h1 class="text-xl" ref="title"><Link :href="route('home')">Chris van Lier</Link></h1>
                <ul class=" gap-7 hidden md:flex">
                    <li v-for="link in links">
                        <Link :href="link.href">{{ link.text }}</Link>
                    </li>
                    <li v-if="loggedIn()" class="flex gap-2">
                        <Link :href="route('dashboard')">Dashboard</Link>
                        <Link :href="route('logout')" method="POST" as="button">Logout</Link>
                    </li>
                    <li v-else>
                        <Link :href="route('login')">Login</Link>
                    </li>
                </ul>
            </nav>
        </div>'
        <transition name="page" mode="out-in">
            <main class="relative z-0" v-if="animate">
                <slot></slot>
            </main>
        </transition>
    </div>
</template>
<style scoped>
.nav-wrapper {
    backdrop-filter: blur(5px);
    background-color: rgba(0, 0, 0, 0.7);

}
nav h1 {
    filter: drop-shadow(1px 2px 5px black);
}
</style>

