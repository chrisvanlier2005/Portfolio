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
});
let gap = parseInt(props.gap);
gap = gap * 0.2 + "rem";
</script>
<template>
    <div class="flex flex-col w-full h-full" :style="`gap: ${gap}; flex-direction: column; justify-content: ${props.justify}; align-items: ${props.align}`">
        <slot/>
    </div>
</template>
