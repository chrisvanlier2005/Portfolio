<template>
    <div class="absolute w-full h-full halftone left-[-4rem]"></div>
</template>

<script>
export default {
    name: "HalftoneBackground"
};
</script>

<style scoped>

    .halftone{
        /* dotted background effect */
        background-image: linear-gradient(
            -45deg,
            rgba(255, 255, 255, 0.28) 1px,
            transparent 1px,
            transparent 2px
        );
        background-size: 4px 4px;
        border-radius: 100px;
        width: 100vw;
    }
    .halftone::after{
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image:radial-gradient(circle at center, transparent, black) ;
        background-size: 50% 100%;
    }


</style>
