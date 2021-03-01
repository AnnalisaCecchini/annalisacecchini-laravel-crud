@extends('layouts.main')

@section('pagetitle')
    Home | Annalisa Cecchini
@endsection

@section('content')

    {{-- HERO --}}
    <section class="home__hero container">
        <div class="hero__box">
            <h1 class="hero__box__title">
                I am your <span class="tc-bold--shad">trusted</span> person, to get the job done
            </h1>
            <p class="hero__box__subtitle h2">
                10+ years experienced <span class="tc-bold">Sales Manager</span>, with solid <span class="tc-bold">Marketing Master's Degrees</span>, 
                and ultimately passionate <span class="tc-bold">Full Stack Web Developer</span>.
                {{-- Passionate <span class="tc-bold">Full Stack Web Developer</span>, 
                with <span class="tc-bold">Marketing</span> Master's Degrees and 
                10+ years as <span class="tc-bold">Sales Manager</span>. --}}
            </p>
            <a class="btn btn__primary" href="{{ route('projects') }}">Get a look to my <span class="btn__primary--bold t-upper">projects</span></a>
            <h4 class="ml-1">Or
                <a class="cta__link tc-active t-upper t-unline" href="{{ route('download') }}">download resume</a>
            </h4>
        </div>
        <div class="hero__box mt-5">
            <img src="{{ asset('img/hero_web.png') }}" alt="annalisa-cecchini-web-developer-hero">
        </div>
    </section>

    {{-- SLIDER --}}
    <section class="home__slider">
        <div id="homeslider"  class="home__title t-center">
            <h2>I get results, by planning and paying attention to details</h2>
            <h3>Find out more about how I built up this website project</h3>

            <div class="slider container--small"
            @mouseenter="stopLoop"
            @mouseleave="startLoop"
            >
                <div class="slider__arrow slider__arrow--left prev" @click="prevPhoto">
                    <i class="fas fa-arrow-left"></i>
                </div>

                <div class="slider__box images">

                    <img class="slider__box_img" :src="photos[indexPhoto].img" :alt="photos[indexPhoto].title">
                    <h3 class="h2--bold">@{{ photos[indexPhoto].title }}</h3>
                    <p>@{{ photos[indexPhoto].description }}</p>
                </div>

                <div class="slider__arrow slider__arrow--right next" @click="nextPhoto">
                    <i class="fas fa-arrow-right"></i>
                </div>

                <div class="slider__nav slider__btns">
                    <span v-for="(item, index) in photos" 
                        :class="index == indexPhoto ? 'btnactive' : '' "
                        class=" slider__btn"
                        @click="setPhoto(index)"
                    >
                    </span>
                </div>
    </section>

    {{-- SKILLS --}}
    <section class="home__skills container">
        <div class="home__skills__title t-center container--small">
            <h2>PASSION drives hard TRAINING</h2>
            <h3>Keep learning is essential component for professional growth</h3>
        </div>
        <div class="home__skills__container mt-3">
            <div class="skills__box subjects">
                <ul class="skills__list skills__list--subj">
                    <li class="skills__item skills__item--hide">
                        <h3 class="tc-bold t-upper">tools</h3>
                    </li>
                    <li class="skills__item t-upper">
                        <p>html 5</p>
                    </li>
                    <li class="skills__item t-upper">
                        <p>css 3</p>
                    </li>
                    <li class="skills__item t-upper">
                        <p>javascript</p>
                    </li>
                    <li class="skills__item t-upper">
                       <P>jquery</P>
                    </li>
                    <li class="skills__item t-upper">
                        <P>vue.js</P>
                    </li>
                    <li class="skills__item t-upper">
                        <p>bootstrap</p>
                    </li>
                    <li class="skills__item t-upper">
                        <p>sass</p>
                    </li>
                    <li class="skills__item t-upper">
                        <p>php</p>
                    </li>
                    <li class="skills__item t-upper">
                        <p>laravel</p>
                    </li>
                    <li class="skills__item t-upper">
                        <p>mysql</p>
                    </li>
                    <li class="skills__item t-upper">
                       <P>xd</P>
                    </li>
                    <li class="skills__item t-upper">
                        <p>illustrator</p>
                    </li>
                    <li class="skills__item t-upper">
                        <p>photoshop</p>
                    </li>
                    <li class="skills__item t-upper">
                        <p>indesign</p>
                    </li>
                    <li class="skills__item t-upper">
                        <p>excel</p>
                    </li>
                </ul>
            </div>
            <div class="skills__box years">
                <ul class="skills__list">
                    <li class="skills__item">
                        <h3 class="tc-bold">EXPERIENCE</h3>
                    </li>
                    <li class="skills__item">
                        <p class="skills__item--bg1">1 year</p>
                    </li>
                    <li class="skills__item">
                        <p>1 year</p>
                    </li>
                    <li class="skills__item">
                        <p>1 year</p>
                    </li>
                    <li class="skills__item">
                        <p>1 year</p>
                    </li>
                    <li class="skills__item">
                        <p>1 year</p>
                    </li>
                    <li class="skills__item">
                        <p>1 year</p>
                    </li>
                    <li class="skills__item">
                        <p>1 year</p>
                    </li>
                    <li class="skills__item">
                        <p class="skills__item--bg2">1 year</p>
                    </li>
                    <li class="skills__item">
                        <p>1 year</p>
                    </li>
                    <li class="skills__item">
                        <p>1 year</p>
                    </li>
                    <li class="skills__item">
                        <p class="skills__item--bg3">1 year</p>
                    </li>
                    <li class="skills__item">
                        <p>1 year</p>
                    </li>
                    <li class="skills__item">
                        <p>1 year</p>
                    </li>
                    <li class="skills__item">
                        <p>1 year</p>
                    </li>
                    <li class="skills__item">
                        <p class="skills__item--bg4">10 years</p>
                    </li>
                </ul>
            </div>
            <div class="skills__box passion">
                <ul class="skills__list skills__list--pass">
                    <li class="skills__item">
                        <h3 class="tc-bold">PASSION</h3>
                    </li>
                    <li class="skills__item">
                        <p class="skills__item__100">100%</p>
                    </li>
                    <li class="skills__item">
                        <p class="skills__item__100">100%</p>
                    </li>
                    <li class="skills__item">
                        <p class="skills__item__100">100%</p>
                    </li>
                    <li class="skills__item">
                        <p class="skills__item__100">100%</p>
                    </li>
                    <li class="skills__item">
                        <p class="skills__item__100">100%</p>
                    </li>
                    <li class="skills__item">
                        <p class="skills__item__100">100%</p>
                    </li>
                    <li class="skills__item">
                        <p class="skills__item__100">100%</p>
                    </li>
                    <li class="skills__item">
                        <p class="skills__item__100">100%</p>
                    </li>
                    <li class="skills__item">
                        <p class="skills__item__100">100%</p>
                    </li>
                    <li class="skills__item">
                        <p class="skills__item__100">100%</p>
                    </li>
                    <li class="skills__item">
                        <p class="skills__item__100">100%</p>
                    </li>
                    <li class="skills__item">
                        <p class="skills__item__100">100%</p>
                    </li>
                    <li class="skills__item">
                        <p class="skills__item__100">100%</p>
                    </li>
                    <li class="skills__item">
                        <p class="skills__item__100">100%</p>
                    </li>
                    <li class="skills__item">
                        <p class="skills__item__100">. . .  !!<p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

@endsection


@section('scripts')
    <script src="{{ asset('js/homeslider.js') }}"></script>
@endsection