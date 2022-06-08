@extends('layouts.master')

@section('title')
<title>{{ config('app.name') }} · Maquinados</title>
@endsection

@section('content')
    @include('fragment.sidebar')

        <!-- Home section -->
        <div class="seccion__body">

            <!-- header -->
            <header class="header__container">
                @include('fragment._menu-simple-responsive')
    
                <div class="slider__hero" data-aos="fade-up">
                    <img src="{{ asset('assets/banners/Banner_Servicio_Maquinados.png') }}" alt="Banner Riggin">
                </div>
            </header>
            <!-- End header -->
    
            <!-- Main section or body -->
            <div class="body__container">
                <main class="main">
                    <div class="container-fluid">
                        <div class="container">
                            <div class="row pb-5">
                                <div class="col-lg-7 col-sm-12" data-aos="fade-up">
                                    <div class="section-title mb-4">
                                        <h5 class="position-relative d-inline-block text-uppercase heading">
                                            ¿Qué es?
                                            <span class="sub__line1"></span>
                                            <span class="sub__line2"></span>
                                        </h5>
                                    </div>
                                    <p class="p__text mb-4">
                                        En <span class="bold">VMCORREA</span> ofrecemos el servicio de movimiento de equipos y maquinaria pesada, tanto dentro de las instalaciones así como preparación y empaque para transportarla fuera de las mismas o al extranjero. Desplazamos, elevamos, rotamos y posicionamos la maquinaria en sus instalaciones hasta conseguir el objetivo que nos marquen; ampliar el espacio libre de la planta, agrupar maquinas, optimizar la transferencia de sus productos entre maquinas, etc.
                                    </p>
                                </div>
                                <div class="col-lg-5 flex__box" data-aos="zoom-in">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                                <img src="{{ asset('assets/icons/maquinados-tiny.png') }}" loading="lazy" class="rounded" alt="Maquinados" width="70%">
                                            </div>                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-sm-12" data-aos="fade-up">
                                    <div class="section-title mb-4">
                                        <h5 class="position-relative d-inline-block text-uppercase text__subheading ">
                                            Nuestro Objetivo
                                            <span class="sub__line1"></span>
                                            <span class="sub__line2"></span>
                                        </h5>
                                    </div>
                                    <p class="p mb-4">
                                        Ofrecer soluciones integrales a nuestros clientes utilizando siempre equipo, herramienta, materiales, y mano de obra calificada para siempre tratar de superar sus expectativas al ofrecer servicios y refacciones de la mejor calidad a precios competitivos y ubicarnos dentro de las opciones preferidas para nuestros clientes.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <!-- End body -->
            <div class="flex__box" data-aos="fade-up">
                <img src="{{ asset('assets/img/maquinados.png') }}">
            </div>
            <div class="flex__box body__container">
                
            </div>
            @include('fragment.modal_menu')
            @include('fragment.footer')

        </div>
        <!-- End Home section -->

@endsection