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
        <section class="z-[99] relative max-w-[1400px] mx-auto my-24">
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
            <div class="w-full flex justify-center pb-3 my-6">
                <ButtonMedium :href="route('projects.index')" as="a">Want to see more?</ButtonMedium>
            </div>
            <faded-circle style="z-index: -1; background: linear-gradient(#ff00f2, #ca00ff);width: 40rem; height: 40rem;filter: blur(300px); left: -20%; top: 20%" class="circle-1"></faded-circle>

        </section>
        <!--    About me section    -->
        <section class="z-[99] relative max-w-[1400px] mx-auto my-24">
            <section-title>About me</section-title>
            <div class="flex gap-4 items-center">
                <div class="glassMorph p-4 my-3 w-2/3">
                    <h3 class="text-lg font-semibold">Personal information</h3>
                    <p>My name is Chris van Lier, i am 17 years old.</p>
                    <p>I am currently studying software development at Grafisch Lyceum Rotterdam.</p>
                    <p>Other than that i am a passionate developer, i love to learn new things and i am always looking for new challenges and to experiment.</p>
                    <p>Currently my main focus is on web development, but i am also interested in mobile app development.</p>
                    <hr class="my-3 opacity-25">
                    <p class="font-semibold mt-2">My main programming languages are:</p>
                    <ul class="list-disc ml-6">
                        <li>PHP</li>
                        <li>C#</li>
                        <li>JavaScript</li>
                    </ul>
                    <hr class="my-3 opacity-25">
                    <p class="font-semibold mt-2">Main frameworks:</p>
                    <ul class="list-disc ml-6">
                        <li>Laravel</li>
                        <li>Vue</li>
                        <li>.NET (ASP, MAUI)</li>
                    </ul>
                    <p>Of course i am always open to learn new things.</p>
                </div>
                <div class="glassMorph my-3 w-1/3 rounded-full h-fit  p-6">
                    <img src="/img/profile/profile_picture.jpg" alt="Profile picture" class="w-full rounded-full aspect-square hover:scale-[107%] duration-150 ease-out transition-all">
                </div>
            </div>
            <faded-circle style="z-index: -1; background: linear-gradient(#ff00f2, #ca00ff);width: 40rem; height: 40rem;filter: blur(300px); left: -20%; top: 20%" class="circle-1"></faded-circle>
            <faded-circle style="z-index: -1; background: linear-gradient(#00ff22, #fff200);width: 40rem; height: 40rem;filter: blur(300px); right: -20%; bottom: 20%" class="circle-2"></faded-circle>
            <r-g-b-ribbon style="
            transform: skew(30deg, 0deg) rotate(-160deg) scaleY(1.5);
            top: 50%;
            right: -80%" class="z-[-1]"></r-g-b-ribbon>
        </section>
        <!--    Contact section    -->
    </Layout>
</template>
