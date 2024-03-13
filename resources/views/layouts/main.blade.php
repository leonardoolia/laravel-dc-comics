<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{config('generics')['app_name']}} | @yield('title')</title>

    @vite('resources/js/app.js')

</head>

<body>

<header>
    @include('includes.header')
</header>

<main class="container">
    @yield('main-content')
</main>

<footer>
</footer>

</body>

</html>