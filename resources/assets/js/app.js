require('./bootstrap');

Vue.component('home-view', require('./components/HomeView.vue'));
Vue.component('news-create-view', require('./components/News/CreateView.vue'));
Vue.component('news-edit-view', require('./components/News/EditView.vue'));
Vue.component('news-view', require('./components/News/NewsView.vue'));

const app = new Vue({
    el: "#app",
});
