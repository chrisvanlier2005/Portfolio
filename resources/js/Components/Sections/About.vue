<script setup>
import SectionTitle from "@/Components/Typography/SectionTitle.vue";
import FadedCircle from "@/Components/Styling/FadedCircle.vue";
import HalftoneBackground from "@/Components/Styling/HalftoneBackground.vue";
import GridItemSmall from "@/Components/Grid/GridItemSmall.vue";
import GridCardSmall from "@/Components/Grid/Cards/GridCardSmall.vue";
</script>
<template>
    <section class="min-h-[90rem] relative mt-24 z-1">
        <div class="z-10 relative">
            <section-title class="pb-3">About me</section-title>
            <div class="grid grid-cols-1 md:grid-cols-3 h-96 gap-6">
                <grid-item-small class="col-span-2">
                    <grid-card-small >
                        <template v-slot:title>
                            <span class="drop-shadow-xl">What you need to know!</span>
                        </template>
                        <template v-slot:content>
                            <p class="text-sm">
                                I'm a full-stack web developer with a passion for creating beautiful and functional websites.
                            </p>
                            <p class="text-sm">
                                I'm currently a student at Grafisch Lyceum in Rotterdam, where I'm learning to code.</p>
                            <p class="text-sm">
                                Currently, I'm looking for an <b>internship</b> or <b>part-time</b> job.
                            </p>
                            <h2 class="font-semibold pt-4 pb-1">My hobbies / free-time enjoyments</h2>
                            <ul class="list-disc pl-10">
                                <li>
                                    <p class="text-sm">
                                        I love to play Golf in the weekends.
                                    </p>
                                </li>
                                <li>
                                    <p class="text-sm">
                                        I watch a lot of Videos
                                    </p>
                                </li>
                                <li>
                                    <p class="text-sm">
                                        I love to experiment with new technologies.
                                    </p>
                                </li>
                                <li>
                                    <p class="text-sm">
                                        I really enjoy creating things.
                                    </p>
                                </li>
                            </ul>
                        </template>
                    </grid-card-small>
                </grid-item-small>
                <grid-item-small>
                    <grid-card-small>
                        <template v-slot:title>
                            <span class="drop-shadow-xl">What I'm doing</span>
                        </template>
                        <template v-slot:content>
                            <div id="scroll" class="grid grid-cols-2 h-full gap-5 p-6 m-2 overflow-x-hidden h-96"  style="transform: rotate(0deg)">
                                <grid-card-small class="p-1 flex items-center justify-center">
                                    <template v-slot:content>
                                        <h1 class="text-center">Laravel</h1>
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1969px-Laravel.svg.png" loading="lazy" alt="Laravel">
                                    </template>
                                </grid-card-small>
                                <grid-card-small class="p-1 flex items-center justify-center">
                                    <template v-slot:content>
                                        <h1 class="text-center">Vue.js</h1>
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Vue.js_Logo_2.svg/2367px-Vue.js_Logo_2.svg.png" loading="lazy" alt="Laravel">
                                    </template>
                                </grid-card-small>
                                <grid-card-small class="p-1 flex items-center justify-center">
                                    <template v-slot:content>
                                        <h1 class="text-center">Laravel</h1>
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1969px-Laravel.svg.png" loading="lazy" alt="Laravel">
                                    </template>
                                </grid-card-small>
                                <grid-card-small class="p-1 flex items-center justify-center">
                                    <template v-slot:content>
                                        <h1 class="text-center">Vue.js</h1>
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Vue.js_Logo_2.svg/2367px-Vue.js_Logo_2.svg.png" loading="lazy" alt="Laravel">
                                    </template>
                                </grid-card-small>
                                <grid-card-small class="p-1 flex items-center justify-center">
                                    <template v-slot:content>
                                        <h1 class="text-center">Laravel</h1>
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1969px-Laravel.svg.png" loading="lazy" alt="Laravel">
                                    </template>
                                </grid-card-small>
                                <grid-card-small class="p-1 flex items-center justify-center">
                                    <template v-slot:content>
                                        <h1 class="text-center">Vue.js</h1>
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Vue.js_Logo_2.svg/2367px-Vue.js_Logo_2.svg.png" loading="lazy" alt="Laravel">
                                    </template>
                                </grid-card-small>


                            </div>
                        </template>
                    </grid-card-small>
                </grid-item-small>
            </div>
        </div>
        <halftone-background></halftone-background>

        <faded-circle style="right: 0; top: -20%;background: linear-gradient(#00ffc4, #32c8ff);width: 40rem; height: 40rem;filter: blur(300px); z-index: 0;"></faded-circle>
    </section>
</template>

<style scoped>
#scroll{
    direction: ltr;
    border-radius: 1rem;
    mask-image: linear-gradient(to bottom, transparent 0%, black 20%, black 80%, transparent 100%);
}

#scroll::-webkit-scrollbar {
    width: 10px;
    background-color: #f5f5f5;
    border-radius: 1rem;

}
#scroll::-webkit-scrollbar-thumb {
    background-color: #888;
    border-radius: 1rem;
}
#scroll::-webkit-scrollbar-thumb:hover {
    background-color: #555;
}
#scroll::-webkit-scrollbar-thumb:active {
    background-color: #555;
}
</style>
