require('./bootstrap');
window.Vue = require('vue').default;
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
require('./components/datePicker');
require('./components/select2');

const app = new Vue({
  el: '#app',
});
