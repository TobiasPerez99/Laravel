<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <style>
        .active{
            color: red;
            text-decoration: none;
            text-transform: uppercase;
        }
    </style>
</head>
<body>

    @include('partials.nav')

    @yield('content')

</body>
</html>