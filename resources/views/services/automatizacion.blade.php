@extends('layouts.master')

@section('title')
<title>{{ config('app.name') }} · Automatización</title>
@endsection


@section('content')
    <!-- header -->
    <header class="header__container">
        @include('fragment._menu-simple-responsive')
    
        <div class="slider__hero" data-aos="fade-up">
            <img src="{{ asset('assets/banners/Banner_Servicio_Automatizacion.png') }}" alt="Banner Riggin">
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
                                    En <span class="bold">VMCORREA</span> creamos automatización de procesos a la medida según las necesidades y objetivos de nuestros clientes, que comprenden desde automatización básica hasta automatización avanzada, que incluyen sistemas de control distribuido, sistemas PLC, CCMs inteligentes con cualquier protocolo estándar de comunicación, así como gestión y medición de la energía.
                                    Contamos con un departamento de desarrollo tecnológico que puede diseñar maquinaria automatizada, que se adapte a las necesidades específicas de nuestros clientes.
                                    Somos distribuidores de las mejores marcas reconocidas internacionalmente.                                </p>
                            </div>
                            <div class="col-lg-5 col-sm-12 flex__box">
                                <img src="{{ asset('assets/icons/automatizacion-tiny.png') }}" loading="lazy" class="rounded" alt="Automatización" width="70%">
                            </div>
                        </div>
                        <div class="row pt-4">
                            <div class="col-lg-12 col-sm-12" data-aos="fade-up">
                                <div class="section-title mb-4">
                                    <h5 class="position-relative d-inline-block text-uppercase text__subheading ">
                                        Nuestro Objetivo
                                        <span class="sub__line1"></span>
                                        <span class="sub__line2"></span>
                                    </h5>
                                </div>
                                <p class="p mb-4">
                                    Tomar toda la experiencia con la que cuenta la empresa, y el personal altamente calificado, equipo especializado y todo lo necesario para apoyar a la industria en general en sus proyectos de modernización y crecimiento. 
                                    Y así posicionarnos como la mejor alternativa para cada uno de sus proyectos
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div class="flex__box" data-aos="fade-up">
            <img src="{{ asset('assets/img/automatizacion.png') }}">
        </div>
        <div class="flex__box catalogo__container">
            <iframe src="https://publuu.com/flip-book/25584/80087/page/1?embed" width="100%" height="700" scrolling="no" frameborder="0" allowfullscreen="" class="publuuflip"></iframe>
        </div>
    </div>
    <!-- End main section -->
@endsection