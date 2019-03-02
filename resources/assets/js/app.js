import './bootstrap';
import router from './routes';
import VModal from 'vue-js-modal';
import PortalVue from 'portal-vue';
import PopperTooltip from 'tooltip.js';

Vue.use(PortalVue)
Vue.use(VModal)
Vue.component("series-dropdown", require("./components/SeriesDropdown.vue"));
Vue.component("support-button", require("./components/SupportButton.vue"));
Vue.component("breadcrumb", require("./components/Breadcrumb.vue"))
Vue.component("tooltip", require("./components/Tooltip.vue"));
Vue.component("conditional-element", require("./components/CondtionalElement.vue"));



Vue.directive('tooltip', {
    // For directive, we can hook to the bind method, and that gonna give us the element, that we are binding to.
    bind(elem,bindings) {
        new PopperTooltip(elem, {
            placement: bindings.arg, // or bottom, left, right, and variations
            title:  bindings.value
        });
    }
})


new Vue({
    el: '#app',

    router,

    mounted() {
        document.querySelectorAll('[data-tooltip]').forEach(elem => {
            new PopperTooltip(elem, {
                placement: elem.dataset.tooltipPlacement || 'top', // or bottom, left, right, and variations
                title: elem.dataset.tooltip
            });
        });
    },
});
