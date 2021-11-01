<nav>
    <ul>
        <li class="{{ setActive('home') }}"><a href="{{ route('home') }}">@lang('home')</a></li>
        <li class="{{ setActive('project.index') }}"><a href="{{ route('project.index') }}">@lang('portfolio')</a></li>
        <li class="{{ setActive('contact') }}"><a href="{{ route('contact') }}">@lang('contacto')</a></li>
        <li class="{{ setActive('about') }}"><a href="{{ route('about') }}">@lang('about')</a></li>
        @guest
        <li class="{{ setActive('login') }}"><a href="{{ route('login') }}">@lang('login')</a></li>
        
        @else
        
        <li><a href="#" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Cerrar Sesion</a></li>
                
        @endguest



        @auth
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf

        </form>
        @endauth

    </ul>
</nav>