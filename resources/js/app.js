import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import VueSweetalert2 from "vue-sweetalert2";
import "sweetalert2/dist/sweetalert2.min.css";

import ListItem from "@/Components/Controls/ListItem.vue";
import List from "@/Components/Controls/List.vue";
import Image from "@/Components/Controls/Image.vue";
import HorizontalStack from "@/Components/Controls/HorizontalStack.vue";
import VerticalStack from "@/Components/Controls/VerticalStack.vue";
const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .component('ListItem', ListItem)
            .component('List', List)
            .component('Image', Image)
            .component('HorizontalStack', HorizontalStack)
            .component('VerticalStack', VerticalStack)
            .use(ZiggyVue, Ziggy)
            .mount(el);
    },
});

InertiaProgress.init({ color: '#4B5563' });
