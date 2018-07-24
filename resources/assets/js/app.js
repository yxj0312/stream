import './bootstrap';
import router from './routes';
import VModal from 'vue-js-modal';
import PortalVue from 'portal-vue';
import Tooltip from 'tooltip.js';

Vue.use(PortalVue)
Vue.use(VModal)
Vue.component("series-dropdown", require("./components/SeriesDropdown.vue"));
Vue.component("support-button", require("./components/SupportButton.vue"));
Vue.component("breadcrumb", require("./components/Breadcrumb.vue"))


new Vue({
    el: '#app',

    router,

    mounted() {
        document.querySelectorAll('[data-tooltip]').forEach(elem => {
            new Tooltip(elem, {
                placement: 'top', // or bottom, left, right, and variations
                title: "Hardcode the tooltips"
            });
        });
    },
});
