
require('./bootstrap');

window.Vue = require('vue');

import Buefy from 'buefy';

Vue.use(Buefy);


Vue.component(
    'uni-input',
    require('./components/universtiesInput.vue')
);

Vue.component(
    'uni-books',
    require('./components/uniBooks.vue')
);

Vue.component(
    'all-books',
    require('./components/allBooks.vue')
);

var app = new Vue({
  el: '#app',


});

