@extends('layouts.master')

@section('title')
    <title>{{ config('app.name') }} · Proyectos</title>
@endsection

@section('content')
    @include('fragment.sidebar')
    <!-- Home section -->
    <div class="seccion__body">

        <!-- header -->
        <header class="header__container">
            <div class="barra">
                <div class="btn__menu" id="btn__abrir">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>

            <div class="flex__box" data-aos="fade-up">
                <img src="assets/banners/Banner_proyectos.png" alt="Banner Nosotros">
            </div>
        </header>
        <!-- End header -->

        <!-- Main section or body -->
        <div class="contenedor">
            <div class="body__container">
                <main class="main" data-aos="fade-up">
                    <div class="container-fluid">
                        <div class="container">
                            <h5 class="position-relative d-inline-block text-uppercase heading">
                                periodo 2022
                                <span class="sub__line1"></span>
                                <span class="sub__line2"></span>
                            </h5>
                        </div>
                    </div>
                </main>
            </div>
            <div class="cotenedor" data-aos="fade-up">
                <div class="flex__box">
                    <img src="{{ asset('assets/img/proyectos2.png') }}" alt="Imagen Proyectos" srcset="">
                </div>
            </div>
        </div>
        <!-- End body -->
        @include('fragment.modal_menu')
        @include('fragment.footer')
    </div>
@endsection