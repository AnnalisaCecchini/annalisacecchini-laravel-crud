@extends('layouts.main')

@section('pagetitle')
    Portfolio | Annalisa Cecchini
@endsection


@section('content')

    <section class="projects">
        <div class="portfolio__line container">
            <div class="portfolio__box portfolio__box__text">
                <h2>Netflix Clone</h2>
                <h3>API Connection (Axios)</h3>
                <p class="project__description mt-1">This is a 2 pages website-clone. On the Homepage I followed closely Netflix homepage design. I involved the user's action by managing <span class="project__description--tool">FAQ accordion in Vue.js</span> . On the Movies page, I represented the list of movies, available upon <span class="project__description--tool">API request</span> to TMDB database. I managed the request by <span class="project__description--tool">Axios</span>, returning data in the HTML page by using <span class="project__description--tool">Vue.js</span>.</p>
                <h3 class="mt-2">On GitHub:</h3>
                <ul class="project__github">
                    <li class="mt-1">
                        <a class="tc-active t-unline" target="_blank" href="https://annalisacecchini.github.io/netflix-clone-vuejs-axios/">
                            <i class="tc-active fas fa-arrow-right"></i>
                            Have a look to the project..
                        </a>
                    </li>
                    <li class="mt-1">
                        <a class="tc-active t-unline" target="_blank" href="https://github.com/AnnalisaCecchini/netflix-clone-vuejs-axios">
                            <i class="tc-active fas fa-arrow-right"></i>
                            ..or browse deeper into my code!
                        </a>
                    </li>
                </ul>
                <div class="portfolio__icons">
                    <ul class="portfolio__icons__list">
                        <li class="portfolio__icons__item tc-bold">
                            <i class="fab fa-html5"></i>
                            <p class="t-upper tc-titles">html 5</p>
                        </li>
                        <li class="portfolio__icons__item tc-bold">
                            <i class="fab fa-css3-alt"></i>
                            <p class="t-upper tc-titles">css 3</p>
                        </li>
                        <li class="portfolio__icons__item tc-bold">
                            <i class="fab fa-sass"></i>
                            <p class="t-upper tc-titles">sass</p>
                        </li>
                        <li class="portfolio__icons__item tc-bold">
                            <i class="fab fa-vuejs"></i>
                            <p class="t-upper tc-titles">vue.js</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="portfolio__box portfolio__box__img">
                <img src="{{ asset('img/web-mockup-dev-netflix.png') }}" alt="netflix-clone">
            </div>
        </div>
    </section>
    <section class="projects projects--reverse">
        <div class="portfolio__line portfolio__line--reverse container">
            <div class="portfolio__box portfolio__box__text">
                <h2>Todoist Clone</h2>
                <h3>Vue.js</h3>
                <p class="project__description mt-1">This is a 2 pages website-clone. On the Homepage I followed closely Todoist homepage design. Click on the CTA, to access todos.html page. Here, <span class="project__description--tool">Vue.js</span> scripts will allow you manage your tasks, by <span class="project__description--tool">adding</span> todos, <span class="project__description--tool">deleting</span> todos, or just marking them as <span class="project__description--tool">completed tasks</span>. Let's try it!</p>
                <h3 class="mt-2">On GitHub:</h3>
                <ul class="project__github">
                    <li class="mt-1">
                        <a class="tc-active t-unline" target="_blank" href="https://annalisacecchini.github.io/todoist-clone-vuejs/">
                            <i class="tc-active fas fa-arrow-right"></i>
                            Have a look to the project..
                        </a>
                    </li>
                    <li class="mt-1">
                        <a class="tc-active t-unline" target="_blank" href="https://github.com/AnnalisaCecchini/todoist-clone-vuejs">
                            <i class="tc-active fas fa-arrow-right"></i>
                            ..or browse deeper into my code!
                        </a>
                    </li>
                </ul>
                <div class="portfolio__icons">
                    <ul class="portfolio__icons__list">
                        <li class="portfolio__icons__item tc-bold">
                            <i class="fab fa-html5"></i>
                            <p class="t-upper tc-titles">html 5</p>
                        </li>
                        <li class="portfolio__icons__item tc-bold">
                            <i class="fab fa-css3-alt"></i>
                            <p class="t-upper tc-titles">css 3</p>
                        </li>
                        <li class="portfolio__icons__item tc-bold">
                            <i class="fab fa-sass"></i>
                            <p class="t-upper tc-titles">sass</p>
                        </li>
                        <li class="portfolio__icons__item tc-bold">
                            <i class="fab fa-vuejs"></i>
                            <p class="t-upper tc-titles">vue.js</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="portfolio__box portfolio__box__img">
                <img src="{{ asset('img/web-mockup-dev-todoist.png') }}" alt="todoist-clone">
            </div>
        </div>
    </section>
    <section class="projects">
        <div class="portfolio__line container">
            <div class="portfolio__box portfolio__box__text">
                <h2>Whatsapp Clone</h2>
                <h3>Vue.js</h3>
                <p class="project__description mt-1">This is a single page Web App clone. I followed closely Whatsapp Web Appe design, simulating in <span class="project__description--tool">Vue.js</span> some of its peculiar features:<span class="project__description--tool">search for the desired contact</span>, <span class="project__description--tool">send message</span> to the contact, <span class="project__description--tool">get an answer</span> (after 1 second) and finally, <span class="project__description--tool">last login will be updated</span> automatically</p>
                <h3 class="mt-2">On GitHub:</h3>
                <ul class="project__github">
                    <li class="mt-1">
                        <a class="tc-active t-unline" target="_blank" href="https://annalisacecchini.github.io/whatsapp-clone-vuejs/">
                            <i class="tc-active fas fa-arrow-right"></i>
                            Have a look to the project..
                        </a>
                    </li>
                    <li class="mt-1">
                        <a class="tc-active t-unline" target="_blank" href="https://github.com/AnnalisaCecchini/whatsapp-clone-vuejs">
                            <i class="tc-active fas fa-arrow-right"></i>
                            ..or browse deeper into my code!
                        </a>
                    </li>
                </ul>
                <div class="portfolio__icons">
                    <ul class="portfolio__icons__list">
                        <li class="portfolio__icons__item tc-bold">
                            <i class="fab fa-html5"></i>
                            <p class="t-upper tc-titles">html 5</p>
                        </li>
                        <li class="portfolio__icons__item tc-bold">
                            <i class="fab fa-css3-alt"></i>
                            <p class="t-upper tc-titles">css 3</p>
                        </li>
                        <li class="portfolio__icons__item tc-bold">
                            <i class="fab fa-vuejs"></i>
                            <p class="t-upper tc-titles">vue.js</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="portfolio__box portfolio__box__img">
                <img src="{{ asset('img/web-mockup-whatsapp.png') }}" alt="whatsapp-clone">
            </div>
        </div>
    </section>
    <section class="projects projects--reverse">
        <div class="portfolio__line portfolio__line--reverse container">
            <div class="portfolio__box portfolio__box__text">
                <h2>DigitalOcean Clone</h2>
                <h3>Bootstrap</h3>
                <p class="project__description mt-1">For this one page clone, I used Bootstrap. Bootstrap is a front-end open source toolkit, with a <span class="project__description--tool">responsive grid system</span> and prebuilt components. The main components I used were for layout, navbar, jumbotron, buttons, forms.
                <h3 class="mt-2">On GitHub:</h3>
                <ul class="project__github">
                    <li class="mt-1">
                        <a class="tc-active t-unline" target="_blank" href="https://annalisacecchini.github.io/digitalocean-clone-bootstrap-vuejs/">
                            <i class="tc-active fas fa-arrow-right"></i>
                            Have a look to the project..
                        </a>
                    </li>
                    <li class="mt-1">
                        <a class="tc-active t-unline" target="_blank" href="https://github.com/AnnalisaCecchini/digitalocean-clone-bootstrap-vuejs">
                            <i class="tc-active fas fa-arrow-right"></i>
                            ..or browse deeper into my code!
                        </a>
                    </li>
                </ul>
                <div class="portfolio__icons">
                    <ul class="portfolio__icons__list">
                        <li class="portfolio__icons__item tc-bold">
                            <i class="fab fa-html5"></i>
                            <p class="t-upper tc-titles">html 5</p>
                        </li>
                        <li class="portfolio__icons__item tc-bold">
                            <i class="fab fa-css3-alt"></i>
                            <p class="t-upper tc-titles">css 3</p>
                        </li>
                        <li class="portfolio__icons__item tc-bold">
                            <i class="fab fa-bootstrap"></i>
                            <p class="t-upper tc-titles">bootstrap</p>
                        </li>
                        <li class="portfolio__icons__item tc-bold">
                            <i class="fab fa-vuejs"></i>
                            <p class="t-upper tc-titles">vue.js</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="portfolio__box portfolio__box__img">
                <img src="{{ asset('img/web-mockup-dev-digitalocean.png') }}" alt="digitalocean-clone">
            </div>
        </div>
    </section>
    <section class="projects">
        <div class="portfolio__line container">
            <div class="portfolio__box portfolio__box__text">
                <h2>AnnalisaCecchini Portfolio</h2>
                <h3>Laravel - Crud - API Connection (Axios)</h3>
                <p class="project__description mt-1">This is my personal <span class="project__description--tool">Full Stack</span> Portfolio, developed in <span class="project__description--tool">Laravel 7 PHP Framework</span>. Style is set up in Sass partials, CSS classes follow <span class="project__description--tool">BEM methodology</span>. From my  <span class="project__description--tool">Admin Area</span>, I can manage messages sent through the  <span class="project__description--tool">Contact Form (Laravel Eloquent CRUD)</span>. Messages are returned from MySql DB via <span class="project__description--tool">Axios API Call</span>. Access to the DB is protected by an Auth::user( )->isAdmin( ) check on the API Controller which returns the .json.</p>
                <h3 class="mt-2">On GitHub:</h3>
                <ul class="project__github">
                    <li class="mt-1">
                        <a class="tc-active t-unline" target="_blank" href="https://annalisacecchini.com/">
                            <i class="tc-active fas fa-arrow-right"></i>
                            You are in the project : ) 
                        </a>
                    </li>
                    <li class="mt-1">
                        <a class="tc-active t-unline" target="_blank" href="https://github.com/AnnalisaCecchini">
                            <i class="tc-active fas fa-arrow-right"></i>
                            ..browse deeper into my code!
                        </a>
                    </li>
                </ul>
                <div class="portfolio__icons">
                    <ul class="portfolio__icons__list">
                        <li class="portfolio__icons__item tc-bold">
                            <i class="fab fa-html5"></i>
                            <p class="t-upper tc-titles">html 5</p>
                        </li>
                        <li class="portfolio__icons__item tc-bold">
                            <i class="fab fa-css3-alt"></i>
                            <p class="t-upper tc-titles">css 3</p>
                        </li>
                        <li class="portfolio__icons__item tc-bold">
                            <i class="fab fa-sass"></i>
                            <p class="t-upper tc-titles">sass</p>
                        </li>
                        <li class="portfolio__icons__item tc-bold">
                            <i class="fab fa-laravel"></i>
                            <p class="t-upper tc-titles">laravel</p>
                        </li>
                        <li class="portfolio__icons__item tc-bold">
                            <i class="fab fa-vuejs"></i>
                            <p class="t-upper tc-titles">vue.js</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="portfolio__box portfolio__box__img">
                <img src="{{ asset('img/web-mockup-dev-annalisacecchini.png') }}" alt="annalisacecchini-portfolio">
            </div>
        </div>
    </section>

@endsection