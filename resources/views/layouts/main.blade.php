<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('pagetitle')</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    {{-- HEADER --}}
    @include('partials.header')

    {{-- MAIN --}}
    <main>
        @yield('content')
    </main>

    {{-- FOOTER --}}
    @include('partials.footer')

    {{-- FIXED ELEMENTS --}}
    @include('partials.fixed')

    {{-- JS --}}
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')

</body>
</html>