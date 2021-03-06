

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


var polylineUtil = require('time-aware-polyline');

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
Vue.component('categoria-component', require('./components/CategoriaComponent').default);
Vue.component('subcategoria-component', require('./components/subcategoriaComponent').default);
Vue.component('memo-component', require('./components/MemoComponent').default);
Vue.component('tipomemo-component', require('./components/TipomemoComponent').default);
Vue.component('location', require('./components/location').default);


Vue.component('rcategorias', require('./components/Rcategorias').default);
Vue.component('rdepartamentos', require('./components/Rdepartamentos').default);
Vue.component('rmemos', require('./components/Rmemos').default);
Vue.component('rnotificaiones', require('./components/Rnotificaciones').default);
Vue.component('rplanes', require('./components/Rplanes').default);
Vue.component('rplanespoliciales', require('./components/Rplanespoliciales').default);
Vue.component('rsubcategorias', require('./components/Rsubcategorias').default);
Vue.component('rtiponotificaiones', require('./components/Rtiponotificaciones').default);
Vue.component('rusuarios', require('./components/Rusuarios').default);
Vue.component('rtipomemos', require('./components/Rtipomemos').default);

import $ from 'jquery';
const app = new Vue({
    el: '#app',
    mounted() {
        this.$toastr.defaultPosition = "toast-top-left";
        // Send message to browser screen

    }
},);
