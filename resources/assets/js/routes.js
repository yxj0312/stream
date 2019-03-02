import VueRouter from 'vue-router';

let routes = [
    {
        path: '/',
        component: require('./views/Home')
    },

    {
        path: '/about',
        component: require('./views/About')
    },

    {
        path: '/contact',
        component: require('./views/Contact')
    },

    {
        path: '/series',
        component: require('./views/Series')
    },

    {
        path: '/scroll',
        component: require('./views/Scroll')
    },

    {
        path: '/count',
        component: require('./views/Count')
    },

    {
        path: '/conditional',
        component: require('./views/ConditionalElementPage')
    },
];

export default new VueRouter({
    routes,
    linkActiveClass: 'is-active'
});