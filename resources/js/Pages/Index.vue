<script setup>
import Layout from '../Layouts/Layout.vue';
import { Head } from "@inertiajs/inertia-vue3";
import LandingTitle from "@/Components/Sections/LandingTitle.vue";
import SectionTitle from "@/Components/Typography/SectionTitle.vue";
import GridItemSmall from "@/Components/Grid/GridItemSmall.vue";
import GridItemLarge from "@/Components/Grid/GridItemLarge.vue";
import GridCardSmall from "@/Components/Grid/Cards/GridCardSmall.vue";
import GridCardLarge from "@/Components/Grid/Cards/GridCardLarge.vue";
import RGBRibbon from "@/Components/Styling/RGBRibbon.vue";
import ButtonMedium from "@/Components/Buttons/ButtonMedium.vue";
import fadedCircle from "@/Components/Styling/FadedCircle.vue";
const props = defineProps({
    projects: Array
})
</script>

<template>
    <Head>
        <title>Homepage</title>
    </Head>
    <Layout>
        <LandingTitle></LandingTitle>
        <section class="z-[99] relative max-w-[1400px] mx-auto">
            <section-title>Recent Projects</section-title>
            <p>Interested to see what i've been doing? Here are my most recent projects!</p>
            <div class="z-1 grid grid-cols-1 md:grid-cols-2 grid-rows-2 h-[110rem] max-h-[40rem] gap-7 py-4 relative ">
                <!--        For medium screens        -->
                <GridItemSmall class="md:hidden">
                    <GridCardSmall  v-if="projects[0]" :project="projects[0]"></GridCardSmall>
                </GridItemSmall>
                <!--        For smaller screens        -->
                <GridItemLarge class="hidden md:block">
                    <GridCardLarge v-if="projects[0]" :project="projects[0]"></GridCardLarge>
                </GridItemLarge>
                <GridItemSmall>
                    <GridCardSmall v-if="projects[1]" :project="projects[1]" ></GridCardSmall>
                </GridItemSmall>
                <GridItemSmall>
                    <GridCardSmall v-if="projects[2]" :project="projects[2]" ></GridCardSmall>
                </GridItemSmall>
            </div>
            <r-g-b-ribbon style="
            transform: skew(30deg, 0deg) rotate(-160deg) scaleY(1.5);
            top: 50%;
            left: -80%" class="z-[-1]"></r-g-b-ribbon>
            <div class="w-full flex justify-center pb-3">
                <ButtonMedium :href="route('projects.index')" as="a">Want to see more?</ButtonMedium>
            </div>
            <faded-circle style="z-index: -1; background: linear-gradient(#ff00f2, #ca00ff);width: 40rem; height: 40rem;filter: blur(300px); left: -20%; top: 20%" class="circle-1"></faded-circle>

        </section>
        <!--    About me section    -->
        <section class="py-16">
            <h1>About me</h1>

        </section>
        <!--    Contact section    -->
    </Layout>
</template>
