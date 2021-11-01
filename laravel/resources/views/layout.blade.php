<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <style>
        .active{
            color: red;
            text-decoration: none;
        }
    </style>
</head>
<body>

    @include('partials.nav')

    @include('partials.session-status')

    @yield('content')

</body>
</html>