<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
{{--    @vite(['resources/css/app.css', 'resources/js/app.js'])--}}

    <link
        rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-
   B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous"
    />

    <link rel="stylesheet" href="{{ asset('assets/bootstrap/bootstrap.min.css') }}">

    @yield('style')
</head>
<body>

@include('client.blocks.navbar')

<main>
    @yield('content')
</main>

@include('client.blocks.footer')

<script src="{{ asset('assets/bootstrap/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('assets/client/js/main.js') }}"></script>

@stack('script')
</body>
</html>
