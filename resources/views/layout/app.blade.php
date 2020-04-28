<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @include('layout.partials.head')

    @yield('title')

</head>

<body class="@yield('body_class')">

@include('layout.partials.nav')

@yield('header')

@yield('content')

@include('layout.partials.footer')

@include('layout.partials.footer-scripts')

@yield('js')

</body>

</html>
