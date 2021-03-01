<header>
    <div class="header container">
        <div class="menu-btn">
            <span class="menu-btn__burger"></span>
        </div>
    
        {{-- logo mobile --}}
        <a class="nav-logo--mobile" href="{{ route('homepage') }}">
            <img src="{{ asset('img/annalisalogo-mobile.png') }}" alt="annalisa-cecchini-logo-mobile">
        </a>
    
        {{-- logo desktop --}}
        <a class="nav-logo--desktop" href="{{ route('homepage') }}">
            <img src="{{ asset('img/annalisacecchini-logo-inline-white.png') }}" alt="annalisa-cecchini-logo-desktop">
        </a>
    
        <nav class="nav">
            <ul class="menu-nav">
                <li class="menu-nav__item">
                    <a href="/" class="menu-nav__link">
                        Home
                    </a>
                </li>
                <li class="menu-nav__item">
                    <a href="{{ route('about') }}" class="menu-nav__link">
                        About Me
                    </a>
                </li>
                <li class="menu-nav__item">
                    <a href="{{ route('projects') }}" class="menu-nav__link">
                        Portfolio
                    </a>
                </li>
                <li class="menu-nav__item">
                    <a href="{{ route('download') }}" class="menu-nav__link">
                        Download
                    </a>
                </li>
                <li class="menu-nav__item">
                    <a href="{{ route('contacts.create') }}" class="menu-nav__link">
                        Contact me
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    

</header>