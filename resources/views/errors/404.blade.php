@extends('layouts.main')

@section('pagetitle')
    404 | Annalisa Cecchini
@endsection

@section('content')
    <section class="container">
        <div class="pagenotfound">
            <h2>Whoooopsss!!!</h2>
            <h3>I've tried my best, but I cannot find the page you're looking for :(</h3>
            {{-- <h4 class="mt-5">Come back to the Homepage, to start a new path!</h4> --}}
            <p class="mt-2">
                <a class="tc-active t-unline" href="{{ route('contacts.create') }}">Contact me</a> for more information or try going back to the Homepage.
            </p>
            <a class="btn btn__primary mt-5" href="/">Go to the <span class="t-upper">homepage</span></a>
        </div>
    </section>

@endsection