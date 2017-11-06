window._ = require('lodash');

let Turbolinks = require("turbolinks")
Turbolinks.start()

try {
    window.$ = window.jQuery = require('jquery');
    window.moment = require('moment');
    window.owlCarousel = require('owl.carousel');

    /** Initalize Owl Carousel for homepage main banner */
    window.addEventListener('turbolinks:load', () => {
      $('.homepage-carousel').owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        dots: false
      });
      $('.homepage-events-carousel').owlCarousel({
        items: 2,
        loop: true,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        dots: false
      });
      $('.partners-carousel').owlCarousel({
        items: 5,
        loop: true,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        dots: false
      });
    });
    window.addEventListener("turbolinks:before-cache", function() {
      $('.homepage-carousel').owlCarousel('destroy');
      $('.homepage-events-carousel').owlCarousel('destroy');
      $('.partners-carousel').owlCarousel('destroy');
    });
} catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key'
// });
