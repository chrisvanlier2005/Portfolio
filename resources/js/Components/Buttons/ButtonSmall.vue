<script setup>
    import { Link } from "@inertiajs/inertia-vue3";
    defineProps({
        href: String,
        method: {
            type: String,
            default: "get"
        }
    })
</script>
<template>
    <Link :method="method" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150" :href="href"><slot></slot></Link>
</template>

<script>
export default {
    name: "ButtonSmall"
};
</script>

<style scoped>

</style>
