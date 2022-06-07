@extends('layouts.master')

@section('title')
<title>{{ config('app.name') }} · Seguridad Industrial</title>
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
                <div class="slider__hero" data-aos="fade-up">
                    <img src="{{ asset('assets/banners/Banner_Servicio_SeguridadIn.png') }}" alt="Banner Seguridad Industrial">
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
                                        <span class="bold">VMCORREA</span> es empresa prestadora de servicios en las áreas de Seguridad Industrial, Salud en el Trabajo, Protección Ambiental, Calidad, Capacitación y entrenamiento con estricto apego al marco normativo aplicable, siempre comprometidos con la calidad, la seguridad y la preservación del medio ambiente, a través de la participación constante de nuestro personal calificado y certificado. 
                                        Soportado en un equipo humano competente, participativo y comprometido con la calidad para satisfacer los requisitos de nuestros clientes, mejorando la eficacia y desempeño de nuestros procesos.
                                    </p>
                                </div>
                                <div class="col-lg-5 flex__box" data-aos="zoom-in">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                                <img src="{{ asset('assets/icons/seguridad-tiny.png') }}" loading="lazy" class="rounded" alt="Seguridad Industrial" width="70%">
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
                                        Fomentar en nuestros clientes un ambiente de trabajo seguro para la prevención de accidentes y enfermedades ocupacionales, así como el cumplimiento de la legislación nacional e internacional.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <!-- End body -->
            <div class="flex__box" data-aos="fade-up">
                <img src="{{ asset('assets/img/seguridad_industrial.png') }}">
            </div>
            <div class="flex__box catalogo__container">
                <iframe src="https://publuu.com/flip-book/25584/80083/page/1?embed" width="100%" height="700" scrolling="no" frameborder="0" allowfullscreen="" class="publuuflip"></iframe>
            </div>
            @include('fragment.modal_menu')
            @include('fragment.footer')

        </div>
        <!-- End Home section -->

@endsection