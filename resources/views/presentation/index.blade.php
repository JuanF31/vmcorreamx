@extends('layouts.master')

@section('title') 
    <title>{{ config('app.name') }} · Inicio</title>
@endsection

@section('content')
        <!-- header -->
        <header class="header__container">
            @include('fragment._menu-simple-responsive')

            <div class="slider__hero">
                <!-- Carrousel -->
                <div class="container-fluid p-0">
                    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="3500">
                                <a href="{{ route('electrico') }}">
                                    <img class="w-100" src="{{ asset('assets/banners/electrico.png') }}" alt="Imagen VMCORREA">
                                </a>
                            </div>
                            <div class="carousel-item" data-bs-interval="3500">
                                <a href="{{ route('mecanico') }}">
                                    <img class="w-100"  src="{{ asset('assets/banners/mecanico.png') }}" alt="Imagen VMCORREA">
                                </a>
                            </div>
                            <div class="carousel-item" data-bs-interval="3500">
                                <a href="{{ route('automatizacion') }}">
                                    <img class="w-100" src="{{ asset('assets/banners/automatizacion.png') }}" alt="Imagen VMCORREA">
                                </a>
                            </div>
                            <div class="carousel-item" data-bs-interval="3500">
                                <a href="{{ route('industria') }}">
                                    <img class="w-100" src="{{ asset('assets/banners/Industria 4.0.png') }}" alt="Imagen VMCORREA">
                                </a>
                            </div>
                            <div class="carousel-item" data-bs-interval="3500">
                                <a href="{{ route('maquinados') }}">
                                    <img class="w-100" src="{{ asset('assets/banners/maquinados.png') }}" alt="Imagen VMCORREA">
                                </a>
                            </div>
                            <div class="carousel-item" data-bs-interval="3500">
                                <a href="{{ route('seguridad-industrial') }}">
                                    <img class="w-100" src="{{ asset('assets/banners/Seguridad Industrial.png') }}" alt="Imagen VMCORREA">
                                </a>
                            </div>
                            <div class="carousel-item" data-bs-interval="3500">
                                <a href="{{ route('riggin') }}">
                                    <img class="w-100" src="{{ asset('assets/banners/riggin.png') }}" alt="Imagen VMCORREA">
                                </a>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                            <div class="arrow">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </div>
                            <span class="visually-hidden">Previous</span>

                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                            <div class="arrow">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </div>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <!-- End Carrousel -->
            </div>
        </header>
        <!-- End header -->

        <!-- Main section or body -->
        <div class="cotenedor" data-aos="fade-up">
            <div class="flex__box">
                <img src="{{ asset('assets/img/home.png') }}" alt="Imagen Inicio">
            </div>
        </div>
        <!-- End body -->
@endsection


