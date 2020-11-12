require('./bootstrap');

import Vue from 'vue';
import VueEcho from 'vue-echo-laravel';
import tracks from './components/Tracks';

Vue.use(VueEcho, {
    broadcaster: 'socket.io',
    host: window.location.hostname + ':6001',
	auth: {
        headers: {
            Authorization: 'Bearer ' + document.head.querySelector('meta[name="csrf-token"]').content
        },
    },
});

if ($('#tracks').length) {
    const app = new Vue({
        el: '#tracks',
        components: {
            tracks
        }
    });
} else {
    console.log('#tracks not found');
}
