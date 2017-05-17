require('./bootstrap');
// INSPINIA
require('./plugins/metisMenu/jquery.metisMenu.js');
require('./plugins/slimscroll/jquery.slimscroll.min.js');
require('./plugins/jquery-ui/jquery-ui.js');
require('./inspinia.js');
require('./plugins/pace/pace.min.js');

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});
