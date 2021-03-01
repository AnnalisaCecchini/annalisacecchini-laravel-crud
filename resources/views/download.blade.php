@extends('layouts.main')

@section('pagetitle')
    Download | Annalisa Cecchini
@endsection


@section('content')
    <section class="download__resume t-center">
        <h2>Download RESUME</h2>
        <h3>
            Find out more about my experiences and skills
        </h3>
        <div class="download__resume__btn t-center">
            <i class="fas fa-arrow-down"></i>
            <a class="btn btn__primary" href="{{ asset('download/annalisacecchini_resume_2021.pdf') }}" target="_blank">Download <span class="btn__primary--bold t-upper">resume</span></a>
        </div>
        <p>Click the button, to learn more about my career</p>

    </section>
    <section class="download__extras download--dark">
        <h2 class="t-center">Or get a look to some Extras!</h2>
        <h3 class="t-center">Some useful diagrams I have prepared, to spread in a simple way what I do</h3>
        <div class="download__extras__box">
            <div class="container download__section download__section--reverse">
                <div class="download__box t-center">
                    <img src="{{ asset('img/javascript-scope-hoisting-mockup.png') }}" alt="js-scope-hoisting">
                </div>
                <div class="download__box mt-3">
                    <ul class="download__list">
                        <li class="download__items">
                            <p>Javascript - 
                                <span class="tc-bold">Basics</span>
                            </p>
                            <a class="btn btn__secondary btn__secondary--slim btn__secondary--disabled" href="#!">Download</a>
                        </li>
                        <li class="download__items">
                            <p>Javascript - 
                                <span class="tc-bold">Variables</span>
                            </p>
                            <a class="btn btn__secondary btn__secondary--slim" href="{{ asset('/download/javascript-variables.pdf') }}" target="_blank">Download</a>
                        </li>
                        <li class="download__items">
                            <p>Javascript - 
                                <span class="tc-bold">Functions</span>
                            </p>
                            <a class="btn btn__secondary btn__secondary--slim" href="{{ asset('/download/javascript-functions.pdf') }}" target="_blank">Download</a>
                        </li>
                        <li class="download__items mt-1">
                            <p>Javascript - 
                                <span class="tc-bold">Scope & Hoisting</span>
                            </p>
                            <a class="btn btn__secondary btn__secondary--slim" href="{{ asset('/download/javascript-scope-hoisting.pdf') }}" target="_blank">Download</a>
                        </li>
                        <li class="download__items">
                            <p>Javascript - 
                                <span class="tc-bold">This</span>
                            </p>
                            <a class="btn btn__secondary btn__secondary--slim btn__secondary--disabled" href="#!" target="_blank">Download</a>
                        </li>
                        <li class="download__items">
                            <p>Javascript - 
                                <span class="tc-bold">Array & Objects</span>
                            </p>
                            <a class="btn btn__secondary btn__secondary--slim btn__secondary--disabled" href="#!" target="_blank">Download</a>
                        </li>
                        <li class="download__items">
                            <p>Javascript - 
                                <span class="tc-bold">Loops</span>
                            </p>
                            <a class="btn btn__secondary btn__secondary--slim" href="{{ asset('/download/javascript-loops.pdf') }}" target="_blank">Download</a>
                        </li>
                        <li class="download__items">
                            <p>Javascript - 
                                <span class="tc-bold">Conditionals</span>
                            </p>
                            <a class="btn btn__secondary btn__secondary--slim btn__secondary--disabled" href="#!" target="_blank">Download</a>
                        </li>
                        <li class="download__items">
                            <p>Javascript - 
                                <span class="tc-bold">Arrow Functions</span>
                            </p>
                            <a class="btn btn__secondary btn__secondary--slim btn__secondary--disabled" href="#!" target="_blank">Download</a>
                        </li>
                        <li class="download__items">
                            <p>Javascript - 
                                <span class="tc-bold">Storage</span>
                            </p>
                            <a class="btn btn__secondary btn__secondary--slim" href="{{ asset('/download/javascript-storage.pdf') }}" target="_blank">Download</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="download__section container">
            <div class="download__box t-center">
                <img src="{{ asset('img/laravel-basics-mockup.png') }}" alt="laravel-basics">
            </div>
            <div class="download__box mt-3">
                <ul class="download__list">
                    <li class="download__items">
                        <p>Laravel - 
                            <span class="tc-bold">Basics</span>
                        </p>
                        <a class="btn btn__secondary btn__secondary--slim" href="{{ asset('/download/laravel-basics.pdf') }}" target="_blank">Download</a>
                    </li>
                    <li class="download__items">
                        <p>Laravel - 
                            <span class="tc-bold">Blade</span>
                        </p>
                        <a class="btn btn__secondary btn__secondary--slim btn__secondary--disabled" href="#!" target="_blank">Download</a>
                    </li>
                    <li class="download__items mt-1">
                        <p>Laravel - 
                            <span class="tc-bold" target="_blank">Eloquent</span>
                        </p>
                        <a class="btn btn__secondary btn__secondary--slim btn__secondary--disabled" href="#!" target="_blank">Download</a>
                    </li>
                    <li class="download__items">
                        <p>Laravel - 
                            <span class="tc-bold">Middleware</span>
                        </p>
                        <a class="btn btn__secondary btn__secondary--slim btn__secondary--disabled" href="#!" target="_blank">Download</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

@endsection
