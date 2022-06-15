<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('title')
    <link rel="shortcut icon" href="{{ asset('assets/icons/logo-vmc.ico') }}" type="image/x-icon">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                @yield('header')
            </div>
        </header>
        
        <div class="container mx-auto">
            <div class="card card-white mt-4">
                <div class="mb-4">
                    {{ (session('status')) ? session('status') : "" }}
                </div>
                @yield('content')
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>