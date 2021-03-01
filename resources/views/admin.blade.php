@extends('layouts.main')

@section('pagetitle')
    Admin | Annalisa Cecchini
@endsection

@section('content')
    <section class="height-default container admin">
        <div class="logout">
            <a class="btn btn__secondary btn__secondary--slim" href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                @csrf
            </form>
        </div>
        <h1>Hello Admin!</h1>
        <h3>These are your messages</h3>
        <div id="admincontacts" >
            <ul class="contacts__list mt-2">
                <li v-for="contact in contacts"
                    class="contacts__item"
                >
                    <p><span class="tc-bold contacts__item__label">Name: </span>@{{ contact.name }}</p>
                    <p><span class="tc-bold contacts__item__label">Lastname: </span>@{{ contact.lastname }}</p>
                    <p><span class="tc-bold contacts__item__label">Phone: </span>@{{ contact.phone }}</p>
                    <p><span class="tc-bold contacts__item__label">Email: </span>@{{ contact.email }}</p>
                    <p><span class="tc-bold contacts__item__label">Received: </span>@{{ contact.createdDateHumanReadable }} </p>
                    <p><span class="tc-bold contacts__item__label">Message: </span>@{{ contact.message }}</p>

                    <a class="btn btn__primary btn__primary--slim mt-1" :href="`mailto:${contact.email}`">Reply</a>
                </li>
            </ul>
        </div>
    </section>
@endsection


@section('scripts')
    <script src="{{ asset('js/adminapi.js') }}"></script>
@endsection