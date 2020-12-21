//Main JS
import Vue from 'vue';
import axios from 'axios';

const app = new Vue({
    el: '#app',
    data: {
        albums: [],
        artists: [],
        key: 'all'
    },
    created() {
        axios.get('http://localhost/boolean-php/php-ajax-dischi/script/get-album.php')
        .then( response => {
        // handle success
        //console.log(response);
        // this.discs = response.data;
        this.albums = response.data.albums;
        this.artists = response.data.artists;
        })
        .catch( error => {
        // handle error
        console.log(error);
    });
    },
    methods: {
        filter() {
            axios.get('http://localhost/boolean-php/php-ajax-dischi/script/get-album.php', {

                params: {
                    artist: this.key
                }
            })
        .then( response => {
        // handle success
        //console.log(response);
        // this.discs = response.data;
        this.albums = response.data.albums;
        this.artists = response.data.artists;
        })
        .catch( error => {
        // handle error
        console.log(error);
        })
        }
}
});