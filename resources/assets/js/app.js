/**
 * Bootstrap.js config.
 */
require('./bootstrap');

window.Vue = require('vue');

/**
 * Main vue instance.
 */
const app = new Vue({
    el: '#app',
    data: {
        currentTime: '',
        currentYear: moment().format('YYYY')
    },
    mounted() {
        setInterval(() => {
            this.currentTime = moment().utc().format('ddd, do MMM YYYY - HH:mm:ss');
        },1000);
    },
});
