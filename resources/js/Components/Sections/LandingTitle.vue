<script setup>
import { onMounted, ref } from "vue";
import FadedCircle from "@/Components/Styling/FadedCircle.vue";
import RGBRibbon from "@/Components/Styling/RGBRibbon.vue";
import GlassShapes from "@/Components/Styling/GlassShapes.vue";
import HalftoneBackground from "@/Components/Styling/HalftoneBackground.vue";
import { LetterManipulation } from "@/Classes/ui/LetterManipulation";

let birthday = new Date('Juli 12, 2005')
let date = new Date();
let age = date.getFullYear() - birthday.getFullYear();


</script>
<template>
    <div class="relative">
        <div class="screen w-full flex items-center justify-center">
            <!--     Main content       -->
            <div class="z-10 text-center">
                <p class="text-center text-lg filter-shadow">Hi, my name is</p>
                <h1 ref="title" class="text-3xl md:text-8xl font-bold z-[99]
                filter-shadow text-center
                md:text-left gradient-text
                ">Chris van Lier</h1>
                <p class="text-lg font-semibold filter-shadow">I'm a Student Software Development</p>
            </div>
            <halftone-background></halftone-background>
            <!--     Faded circles in the background       -->
            <faded-circle style="background: linear-gradient(red, orange);width: 40rem; height: 40rem;filter: blur(300px); left: 20%" class="circle-1"></faded-circle>
            <faded-circle style="background: linear-gradient(blue, lightskyblue); width: 30rem; height: 30rem; filter: blur(190px); right: 20%" class="circle-2"></faded-circle>
            <GlassShapes class="z-[1]"></GlassShapes>
            <r-g-b-ribbon style="
            transform: skew(30deg, 0deg) rotate(-9deg);
            top: 70%;
            right: -40%;"></r-g-b-ribbon>
        </div>
    </div>
</template>

<script>
export default {
    name: "LandingTitle",
};
</script>

<style scoped>

.screen{
    height: calc(100vh - 3.5rem);
}

</style>
