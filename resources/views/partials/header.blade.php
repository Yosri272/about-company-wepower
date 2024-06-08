<!-- resources/views/partials/header.blade.php -->

<header id="header">
    <div class="container">
        <div id="logo" class="pull-left">
            <h1><a href="{{ route('home') }}" class="scrollto"><span>WE</span>Power</a></h1>
        </div>
        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="{{ route('home') }}">{{ __('messages.home') }}</a></li>
                <li><a href="{{ route('home') }}">{{ __('messages.about_us') }}</a></li>
                <li><a href="{{ route('home') }}">{{ __('messages.services') }}</a></li>
                <li><a href="{{ route('home') }}">{{ __('messages.portfolio') }}</a></li>
                <li><a href="{{ route('home') }}">{{ __('messages.team') }}</a></li>
                <li class="menu-has-children"><a href="">{{ __('messages.language') }}</a>
                    <ul>
                        <li><a href="{{ url('language/en') }}" onclick="setDirection('ltr')">{{ __('messages.english') }}</a></li>
                        <li><a href="{{ url('language/ar') }}" onclick="setDirection('rtl')">{{ __('messages.arabic') }}</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('home') }}">{{ __('messages.contact') }}</a></li>
            </ul>
        </nav>
    </div>
</header>
