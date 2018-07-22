import './bootstrap';
import router from './routes';
import VModal from 'vue-js-modal';
import PortalVue from 'portal-vue';

Vue.use(PortalVue)
Vue.use(VModal)
Vue.component("series-dropdown", require("./components/SeriesDropdown.vue"));
Vue.component("support-button", require("./components/SupportButton.vue"));
Vue.component("breadcrumb", require("./components/Breadcrumb.vue"))


new Vue({
    el: '#app',

    router,
});
