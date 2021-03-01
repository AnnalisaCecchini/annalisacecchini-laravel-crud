// SLIDER
import Vue from 'vue';

const homeslider = new Vue ({
    el: '#homeslider',
    // compilo i dati
    data: {
        indexPhoto: 0,
        photos: [
            {
                img: './img/slider-1.png',
                title: 'UX/UI Design' ,
                description: 'Before starting coding, I set up detailed Adobe XD prototypes, for both desktop and mobile users. The layout is Mobile-First designed.'
            }, 
            {
                img: './img/slider-2.png',
                title: 'Laravel - Sass - BEM' ,
                description: 'Everything is made in Laravel PHP Framework, style is set up in Sass partials, CSS classes follow BEM (Block Element Modifier) methodology.'
            }, 
            {
                img: './img/slider-3.png',
                title: 'Admin Area' ,
                description: 'From my Admin Area, I can manage messages sent through the Contact Form (Laravel Eloquent CRUD).'
            }, 
            {
                img: './img/slider-4.png',
                title: 'Axios Call to API' ,
                description: 'Messages are returned from MySql DB via Axios API Call. Access to the DB is protected by an Auth::user( )->isAdmin( ) check on the API Controller which returns the .json.'
            },
            {
                img: './img/slider-5.png',
                title: 'Repository on GitHub' ,
                description: 'Find the complete repository on GitHub!'
            }, 

        ], 
        intervalID: 0
    },
    // The created hook allows you to add code which is run if the Vue instance is created.
    // If you link the created hook, you can directly execute code as soon as the program starts. 
    created() {
        this.startLoop();
    },
    methods: {
        // credo le 2 funzioni sulle freccie e le associo sul HTML, al click
        nextPhoto() {
            this.indexPhoto += 1;
          
            // chiudo il giro...quando rischio di superare image4, ricomincio da 0
            if (this.indexPhoto > (this.photos.length - 1)) {
                this.indexPhoto = 0;
            }
        },
        prevPhoto() {
            this.indexPhoto -= 1;

            // chiudo il giro all'inverso, se indice < 0 lo faccio ripartire dall'ultima foto
            if (this.indexPhoto < 0) {
                this.indexPhoto = this.photos.length - 1;
            }
        },
        setPhoto(index) {
            this.indexPhoto = index;
        },
        // ogni 3 secondi passo automaticamente alla successiva
        // mi serve un loop di inizio
        startLoop() {
            this.intervalID = setInterval(() => {
                this.nextPhoto();
            }, 5000);
        },
        // e un clearinterval, per fermare il loop alla fine e farlo ricominciare
        stopLoop() {
            clearInterval(this.intervalID);
        }
         
        // poi andrò a portare le mie funzioni nello slider
    }
});