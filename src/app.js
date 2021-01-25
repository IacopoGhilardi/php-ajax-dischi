import Vue from 'vue';
const axios = require('axios').default;

console.log('vue');

const app = new Vue({

    el: '#root',
    data: {
        disks: []
    },
    mounted() {

        axios.get('partialsphp/db.php')
        .then((response) => {
            this.disks = response.data;
        })



    }

});