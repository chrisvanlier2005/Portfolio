<script setup>
const props = defineProps({
    width: {
        type: String,
        default: "1"
    },
    gap: {
        type: String,
        default: "0"
    },
    responsive: {
        type: String,
        default: false
    },
    responsiveBreakpoint: {
        type: String,
        default: "md"
    },
    responsiveWidth: {
        type: String,
        default: "1"
    },
})
let gap = parseInt(props.gap);
gap = gap * 0.2 + "rem";
</script>
<template>
    <!--  grid with cols depending on the col property  -->
    <div class="grid" :style="`grid-template-columns: repeat(${props.width}, 1fr); gap: ${gap}`">
        <slot></slot>
    </div>
</template>

