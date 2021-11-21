<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <script src="/js/app.js" defer></script>
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