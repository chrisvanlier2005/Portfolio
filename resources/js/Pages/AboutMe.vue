<script setup>
import Layout from '../Layouts/Layout.vue';
import HalftoneBackground from "@/Components/Styling/HalftoneBackground.vue";
import FadedCircle from "@/Components/Styling/FadedCircle.vue";
</script>
<template>
    <Layout>
        <section class="relative min-h-[90rem]">
            <article class="relative z-10 glass p-5 w-fit">
                <h1 class="text-6xl font-semibold">About me</h1>
                <h4>Interested to learn more about me? this is the page!</h4>
            </article>
            <halftone-background class="top-0"/>
            <faded-circle style="left: 0; top: 0; background: linear-gradient(blue, lightskyblue); width: 40rem; height: 40rem; filter: blur(300px)"></faded-circle>
            <faded-circle style="right: 0; bottom: 0; background: linear-gradient(#ff0000, #ffcd00); width: 40rem; height: 40rem; filter: blur(300px)"></faded-circle>
        </section>
    </Layout>
</template>


<style scoped>
.glass{
    backdrop-filter: blur(5px);
    -webkit-backdrop-filter: blur(5px);
    background-color: rgba(255, 255, 255, 0.1);
    outline: 1px solid rgba(255,255,255,0.25);
    border-radius: 20px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.42);
}
</style>
