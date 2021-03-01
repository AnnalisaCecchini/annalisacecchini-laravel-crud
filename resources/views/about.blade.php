@extends('layouts.main')

@section('pagetitle')
    About | Annalisa Cecchini
@endsection


@section('content')
    <section class="about container--small">
        <div class="about__left">
            <h1>Hi! I am Annalisa</h1>
            <div>
                <h3 class="competences__item__title h2--bold mt-3">
                    <span class="competences__item__title--tag tc-active">></span>
                    Marketing Master's Degree
                </h3>
                <p>
                    at Luigi Bocconi University 
                </p>
            </div>
            <div>
                <h3 class="competences__item__title h2--bold">
                    <span class="competences__item__title--tag tc-active">></span>
                    10+ years Sales Experience
                </h3>
                <p>
                    as Sales Manager
                </p>
            </div>
            <div>
                <h3 class="competences__item__title h2--bold">
                    <span class="competences__item__title--tag tc-active">></span>
                    Full Stack Web Developer
                </h3>
                <p>
                    Professional Course at Boolean Careers
                </p>
            </div>
        </div>
        <div class="about__right">
            <img src="{{ asset('/img/annalisacecchini-linkedin-web.png')}}" alt="annalisa-cecchini-about">        
        </div>
        <div class="about__copy">
            <p class="about__copy--text"><span class="tc-titles--bold">Country Manager Italy</span> at FUJIFILM Irvine Scientific, in 2020 I turned 360° my life to upgrade my professional skills on <span class="tc-titles--bold">IT solutions</span>. I have strong competencies in <span class="tc-titles--bold">operational coordination</span>, <span class="tc-titles--bold">knowledge sharing processes</span>, and <span class="tc-titles--bold">identification of standards</span>, methods and procedures to be applied to different projects. I'm currently based in Milan.</p>
            <a class="btn btn__primary mt-4" href="{{ asset('download/annalisacecchini_resume_2021.pdf') }}" target="_blank">Download <span class="btn__primary--bold t-upper">resume</span></a>
        </div>



    </section>



@endsection
