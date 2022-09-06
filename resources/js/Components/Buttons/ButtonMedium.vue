<script setup>
    import { Link } from "@inertiajs/inertia-vue3";
    defineProps({
        href: String,
    })
</script>
<template>
    <Link class="bg-blue-500 text-xl w-fit px-3 rounded-md py-1 hover:bg-blue-700 transition-all" as="button" :href="href"><slot></slot></Link>
</template>

<script>
export default {
    name: "ButtonSmall"
};
</script>

<style scoped>

</style>
