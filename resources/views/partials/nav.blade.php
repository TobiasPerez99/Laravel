<nav>
    <ul>
        <li class="{{ setActive('home') }}"><a href="{{ route('home') }}">@lang('home')</a></li>
        <li class="{{ setActive('project.index') }}"><a href="{{ route('project.index') }}">@lang('portfolio')</a></li>
        <li class="{{ setActive('contact') }}"><a href="{{ route('contact') }}">@lang('contacto')</a></li>
        <li class="{{ setActive('about') }}"><a href="{{ route('about') }}">@lang('about')</a></li>
    </ul>
</nav>