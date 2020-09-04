

require('./bootstrap');

window.Vue = require('vue');
import VueToastr from "vue-toastr";
Vue.use(VueToastr, {
    /* OverWrite Plugin Options if you need */
});
import VueSimpleAlert from "vue-simple-alert";
Vue.use(VueSimpleAlert);


import { Datetime } from 'vue-datetime'
// You need a specific loader for CSS files
import 'vue-datetime/dist/vue-datetime.css'

Vue.use(Datetime)

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
Vue.filter('active', function(value) {
    if (value=='ACTIVO') {
        return 'badge badge-success';
    }else{
        return 'badge badge-warning';
    }
});

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('user-component', require('./components/UserComponent').default);
Vue.component('tiponotificacion', require('./components/TiponotificacionComponent').default);
Vue.component('planpolicial', require('./components/PlanPolicialComponent').default);
Vue.component('notificacion', require('./components/NotificacionComponent').default);
Vue.component('menu-component', require('./components/MainComponent').default);
Vue.component('plan-component', require('./components/PlanComponent').default);
Vue.component('departamento-component', require('./components/DepartamentoComponent').default);
import $ from 'jquery';
const app = new Vue({
    el: '#app',
    mounted() {
        this.$toastr.defaultPosition = "toast-top-left";
        // Send message to browser screen

    }
},);
