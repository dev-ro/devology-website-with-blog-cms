require('./bootstrap');

// Vue js
window.Vue = require('vue');

// Functions file
require('./functions');

// Vue.component('editor-wy' , require('./components/wysywig.vue'));
import WsyEdit from './components/wysywig.vue';
const app = new Vue({
    el: "#app",
    components: {
        'wsy-editor' : WsyEdit
    },
    created() {
        console.log(';created');
    }
});