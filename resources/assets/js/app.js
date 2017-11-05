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
        currentYear: moment().format('YYYY'),
    },
    mounted() {
        setInterval(() => {
            this.currentTime = moment().utc().format('ddd, Do MMM YYYY - HH:mm:ss');
        },1000);

        /**
         * Manage responsive navigation.
         */
        $('#toggle-mobile-menu').click(function () {
            $('#main-navigation').toggleClass('w-full flex flex-col grey-gradient z-30 absolute pin-l pin-t').slide(700);
        });
    },
});
