import Vue from 'vue';
const axios = require('axios').default;

console.log('vue');

const app = new Vue({

    el: '#root',
    data: {
        logo: 'https://upload.wikimedia.org/wikipedia/commons/7/71/Spotify.png',
        disks: []
    },
    mounted() {
        axios.get('partialsphp/db.php')
        .then((response) => {
            console.log(response);
            this.disks = response.data;
        })
    }
});