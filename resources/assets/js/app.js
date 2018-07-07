import './bootstrap';
import router from './routes';
import PortalVue from 'portal-vue'

Vue.use(PortalVue)

new Vue({
    el: '#app',

    router
});
