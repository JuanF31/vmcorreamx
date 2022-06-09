@extends('layouts.master')

@section('title')
<title>{{ config('app.name') }} · Seguridad Industrial</title>
@endsection

@section('content')
    <!-- header -->
    <header class="header__container">
        @include('fragment._menu-simple-responsive')

        <div class="flex__box" data-aos="fade-up">
            <img src="{{ asset('assets/banners/Banner_Servicio_SeguridadIn.png') }}" alt="Banner Seguridad Industrial">
        </div>
    </header>
    <!-- End header -->
    
    <!-- Main section or body -->
    <div class="contenedor">
        <div class="body__container">
            <main class="main">
                <div class="container-fluid">
                    <div class="container">
                        <div class="row" data-aos="fade-up">
                            <div class="col-lg-7 col-sm-12">
                                <h5 class="position-relative d-inline-block text-uppercase heading">
                                    ¿Qué es?
                                    <span class="sub__line1"></span>
                                    <span class="sub__line2"></span>
                                </h5>
                                <p class="p__text">
                                    <span class="bold">VMCORREA</span> es empresa prestadora de servicios en las áreas de Seguridad Industrial, Salud en el Trabajo, Protección Ambiental, Calidad, Capacitación y entrenamiento con estricto apego al marco normativo aplicable, siempre comprometidos con la calidad, la seguridad y la preservación del medio ambiente, a través de la participación constante de nuestro personal calificado y certificado. 
                                    Soportado en un equipo humano competente, participativo y comprometido con la calidad para satisfacer los requisitos de nuestros clientes, mejorando la eficacia y desempeño de nuestros procesos.                                
                                </p>
                            </div>
                            <div class="col-lg-5 col-sm-12 flex__box">
                                <img src="{{ asset('assets/icons/seguridad-tiny.png') }}" loading="lazy" class="rounded" alt="Seguridad Industrial" width="70%">
                            </div>
                        </div>
                        <div class="row pt-4">
                            <div class="col-lg-12 col-sm-12 pt-2" data-aos="fade-up">
                                <h5 class="position-relative d-inline-block text-uppercase text__subheading pt-2">
                                    Nuestro Objetivo
                                    <span class="sub__line1"></span>
                                    <span class="sub__line2"></span>
                                </h5>
                                <p class="p">
                                    Fomentar en nuestros clientes un ambiente de trabajo seguro para la prevención de accidentes y enfermedades ocupacionales, así como el cumplimiento de la legislación nacional e internacional.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div class="flex__box" data-aos="fade-up">
            <img src="{{ asset('assets/img/seguridad_industrial.png') }}">
        </div>
        <div class="flex__box catalogo__container">
            <iframe src="https://publuu.com/flip-book/25584/80083/page/1?embed" width="100%" height="700" scrolling="no" frameborder="0" allowfullscreen="" class="publuuflip"></iframe>
        </div>
    </div>
    <!-- End main section -->
@endsection