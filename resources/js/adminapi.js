// AXIOS CALL FOR DB CONTACTS
import Vue from 'vue';
// import axios from 'axios';

const app = new Vue({
    el: '#admincontacts',
    data: {
        contacts: []
    }, 
    created() {
        axios.get('http://annalisacecchini.com/api/messages')
            .then(response => {
                console.log(response.data);
                this.contacts = response.data;
            })
            .catch(error => {
                console.log(error)
            })
            }
});