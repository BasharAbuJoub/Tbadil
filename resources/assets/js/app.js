
require('./bootstrap');

window.Vue = require('vue');

import Buefy from 'buefy';

Vue.use(Buefy);


var app = new Vue({
  el: '#app',
  data: {
    message: 'Hello from the Vue side'
  }
});
