<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('title')
    {{-- Favicoon --}}
    <link rel="shortcut icon" href="{{ asset('assets/icons/logo-vmc.ico') }}" type="image/x-icon"/>
    {{-- Normalize --}}
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}"/>
    {{-- Boostrap --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    {{-- Animate CSS --}}
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}"/>
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    {{-- AOS --}}
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"/>
</head>
<body>
    @yield('content')

    {{-- Jquery --}}
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    {{-- Boostrap --}}
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    {{-- AOS --}}
    <script src="{{ asset('js/aos.js') }}"></script>
    {{-- Main --}}
    <script src="{{ asset('js/main.js') }}"></script>
    {{-- Section for some script area --}}
    @yield('script')
</body>
</html>