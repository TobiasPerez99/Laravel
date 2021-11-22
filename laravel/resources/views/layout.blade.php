<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="/js/app.js" defer></script>
    <style>
        .active{
            color: red;
            text-decoration: none;
        }
    </style>
</head>
<body>
    
    <div class="d-flex flex-column h-screen justify-content-between" id="app">

    <header>
        @include('partials.session-status')
        @include('partials.nav')
    </header>

    <main class="py-4">

        @yield('content')

    </main>

    <footer class="bg-white text-black-50 text-center py-3 shadow">

        {{config('app.name')}} ~ Copyright {{date('Y')}} 

    </footer>

    </div>

</body>
</html>