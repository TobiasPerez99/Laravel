<nav class="navbar navbar-light navbar-expand-sm bg-white shadow-sm">
    <div class="container">
    <a class="navbar-brand" href="{{route('home')}}">{{ config('app.name') }}</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link {{ setActive('home') }}" href="{{ route('home') }}">@lang('home')</a>
        </li> 
        <li class="nav-item "><a class="nav-link {{ setActive('project.index') }}" href="{{ route('project.index') }}">@lang('portfolio')</a></li>
        <li class="nav-item "><a class="nav-link {{ setActive('contact') }}" href="{{ route('contact') }}">@lang('contacto')</a></li>
        <li class="nav-item "><a class="nav-link {{ setActive('about') }}" href="{{ route('about') }}">@lang('about')</a></li>
        @guest
        <li class="nav-item "><a class="nav-link {{ setActive('login') }}" href="{{ route('login') }}">@lang('login')</a></li>
        
        @else
        
        <li><a href="#" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Cerrar Sesion</a></li>
                
        @endguest

        @auth
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none align-text-center">
            @csrf

        </form>
        @endauth

    </ul>
    </div>
</div>
</nav>