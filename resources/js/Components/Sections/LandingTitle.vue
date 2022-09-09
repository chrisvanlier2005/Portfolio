<script setup>
import { onMounted, ref } from "vue";
import FadedCircle from "@/Components/Styling/FadedCircle.vue";
import RGBRibbon from "@/Components/Styling/RGBRibbon.vue";
import GlassShapes from "@/Components/Styling/GlassShapes.vue";
import { Link } from "@inertiajs/inertia-vue3";
import ButtonSmall from "@/Components/Buttons/ButtonSmall.vue";
import HalftoneBackground from "@/Components/Styling/HalftoneBackground.vue";

let name = ref(null);
let firstLetterToRGB = (el) => {
    let colors = [
        "255,0,0",
        "0,255,0",
        "0,30,255"
    ]
    let colorVariation = 0;
    console.log(el)
    let words = el.innerText.split(" ");
    el.innerHTML = "";
    for (let i = 0; i < words.length; i++){
        let letters = words[i].split('');
        // create elements for each letters
        for (let j = 0; j < letters.length; j++){
            let letterElement = document.createElement('span');
            // is the first letter of the word
            if (j === 0){
                letterElement.style.color = "rgb(" + colors[colorVariation] + ")";
                colorVariation++;
            }
            letterElement.classList.add('text-hover-size')
            letterElement.innerText = letters[j]
            el.appendChild(letterElement);
        }
        // make sure there is a space between words.
        let space = document.createElement("span");
        space.innerText = " ";
        el.appendChild(space)
    }
}

let birthday = new Date('Juli 12, 2005')
let date = new Date();
let age = date.getFullYear() - birthday.getFullYear();

onMounted(() => {
    firstLetterToRGB(name.value)
})
</script>
<template>
    <div class="relative">
        <div class="screen w-full flex items-center">
            <!--     Main content       -->
            <div class="z-10">
                <h1 ref="name" class="text-3xl md:text-6xl font-bold z-[99] filter-shadow text-center md:text-left">Chris van Lier</h1>
                <p class="font-medium text-center md:text-left filter-shadow">Hello, i'm a <span class="text-pink-500">full-stack</span> student developer.</p>
                <p class="mb-3 text-center md:text-left filter-shadow">Also i'm <span class="text-amber-400">{{ age }}</span> Years old.</p>
            </div>
            <halftone-background></halftone-background>
            <!--     Faded circles in the background       -->
            <faded-circle style="right: 0; top: -20%;background: linear-gradient(red, orange);width: 40rem; height: 40rem;filter: blur(300px)"></faded-circle>
            <faded-circle style="left: 0; bottom: -20%; background: linear-gradient(blue, lightskyblue); width: 40rem; height: 40rem; filter: blur(300px)"></faded-circle>
            <GlassShapes class="z-[1]"></GlassShapes>
            <r-g-b-ribbon style="
            transform: skew(30deg, 0deg) rotate(-9deg);
            top: 50%;
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
.filter-shadow{
    filter: drop-shadow(0px 0px 4px black);
}
.screen{
    height: calc(100vh - 3.5rem);
}

</style>
<style>
.text-hover-size{
    display: inline-block;
    transition: all .3s;
    transform: scale(1);
}
.text-hover-size:hover{

    transform: scale(1.5)  translateY(-30%);
}
</style>
