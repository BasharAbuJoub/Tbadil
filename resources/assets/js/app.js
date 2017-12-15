
require('./bootstrap');

window.Vue = require('vue');

import Buefy from 'buefy';

Vue.use(Buefy);



Vue.component(
    'uni-input',
    require('./components/universtiesInput.vue')
);


var app = new Vue({
  el: '#app',
  data: {
    message: 'Hello from the Vue side'
  }
});
