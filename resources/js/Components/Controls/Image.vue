<script setup>
defineProps({
    src: {
        type: String,
        required: true
    },
    alt: {
        type: String,
        default: "Image"
    },
});
</script>
<template>
    <img :src="src" :alt="alt" class="w-full h-full object-cover"/>
</template>
