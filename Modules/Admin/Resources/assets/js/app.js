require('./bootstrap');

// Vue js
window.vue = require('vue');

// JSON Editor JS
require('./jsoneditor');

// Functions file
require('./functions');

const app = new Vue({
    el: "#app",
});