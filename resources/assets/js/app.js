import './bootstrap';
import router from './routes';
import PortalVue from 'portal-vue'

Vue.use(PortalVue)
Vue.component("series-dropdown", require("./components/SeriesDropdown.vue"));


new Vue({
    el: '#app',

    router
});
