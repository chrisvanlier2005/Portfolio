<script setup>

const props = defineProps({
    gap: {
        type: String,
        default: "0"
    },

    justify: {
        type: String,
        default: "flex-start"
    },
    align: {
        type: String,
        default: "flex-start"
    },
    responsive: {
        type: String,
        default: false
    },
    responsiveBreakpoint: {
        type: String,
        default: "md"
    },
    responsiveDirection: {
        type: String,
        default: "column"
    },
});
let gap = parseInt(props.gap);
gap = gap * 0.2 + "rem";
</script>
<template>
    <div class="flex w-full h-full" :style="`gap: ${gap}; justify-content: ${props.justify}; align-items: ${props.align}`" :class="{'flex-col': props.responsive, 'sm:flex-row': props.responsive, 'md:flex-row': props.responsive, 'lg:flex-row': props.responsive, 'xl:flex-row': props.responsive, '2xl:flex-row': props.responsive}">
        <slot/>
    </div>
</template>
