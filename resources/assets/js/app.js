require('./bootstrap');
import TurbolinksAdapter from 'vue-turbolinks';

window.Vue = require('vue');
Vue.use(TurbolinksAdapter)

/**
 * Main vue instance.
 */
document.addEventListener('turbolinks:load', () => {
    let app = new Vue({
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
});
