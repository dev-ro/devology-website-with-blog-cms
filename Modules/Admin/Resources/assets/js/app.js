require('./bootstrap');
// Vue js
window.Vue = require('vue');

import WsyEdit from './components/wysywig.vue';


const app = new Vue({
    el: "#app",
    components: {
        'wsy-editor' : WsyEdit
    },
    created() {
        console.log('created');
    }
});