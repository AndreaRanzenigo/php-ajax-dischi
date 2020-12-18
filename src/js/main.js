//Main JS
import Vue from 'vue';
import axios from 'axios';

const app = new Vue({
    el: '#app',
    data: {
        discs: []
    },
    created() {
        axios.get('http://localhost/boolean-php/php-ajax-dischi/script/json-database.php')
        .then( response => {
        // handle success
        //console.log(response);
        this.discs = response.data;
        })
        .catch( error => {
        // handle error
        console.log(error);
  })
    },
    methods: {
        setAuthor() {
            if(this.discs.includes)
             axios.get('http://localhost/boolean-php/php-ajax-dischi/script/filter-author.php')
             .then( response => {
                 // handle success
                 //console.log(response);
                 this.discs = [];
                 this.discs = response.data;
                 })
                 .catch( error => {
                 // handle error
                 console.log(error);
        })
    }
}
});