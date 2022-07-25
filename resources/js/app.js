require('./bootstrap');
import Vue from "vue";
import {createInertiaApp} from '@inertiajs/inertia-vue'
import {InertiaProgress} from '@inertiajs/progress'

InertiaProgress.init({
    color: '#69fa03',
    showSpinner: true
});

createInertiaApp({
    resolve: name => require(`./Pages/${name}`),
    setup({el, App, props, plugin}) {
        Vue.use(plugin)
        new Vue({
            render: h => h(App, props),
        }).$mount(el)
    },
})
