<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <title> {{ env('APP_NAME') }} | @yield('title')</title>

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    @include('includes.header')

    <main class="bg-light">
        <h1>ciao</h1>
        @yield('main-content')
    </main>

    @include('includes.footer')

</body>

</html>
