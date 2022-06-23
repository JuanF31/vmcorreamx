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
    @yield('css')
</head>
<body>
    <div class="loader-page">
        <div class="row">
            <div class="col-12 d-flex justify-content-center p-0 m-0">
                <img src="{{ asset('assets/icons/loader.svg') }}" alt="" srcset="">
            </div>
            <div class="col-12 d-flex justify-content-center p-0 m-0">
                <img src="{{ asset('assets/icons/loader-vmc.png') }}" alt="" srcset="">
            </div>
        </div>
    </div>

    @include('fragment.sidebar')
    <div class="seccion__body">
        @yield('content')
        @include('fragment.modal_menu')
    
        @includeWhen(
            request()->route()->getName() != 'control' && 
            request()->route()->getName() != 'user.index' &&
            request()->route()->getName() != 'departments.show' &&
            request()->route()->getName() != 'user.show' &&
            request()->route()->getName() != 'resource.department.show' &&
            request()->route()->getName() != 'advertisement.index'
        , 'fragment.footer')
    </div>
    @includeWhen(request()->route()->getName() == 'control', 'control.organizational_chart.modalOrganitational')
    @includeWhen(request()->route()->getName() == 'resource.department.show', 'control.resources.imgmodal')


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