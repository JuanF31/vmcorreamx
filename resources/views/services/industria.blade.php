@extends('layouts.master')

@section('title')
<title>{{ config('app.name') }} · Industria 4.0</title>
@endsection

@section('content')
    @include('fragment.sidebar')

    <!-- Home section -->
    <div class="seccion__body">

        <!-- header -->
        <header class="header__container">
            @include('fragment._menu-simple-responsive')
            <div class="slider__hero" data-aos="fade-up">
                <img src="{{ asset('assets/banners/Banner_Servicio_Industria4.png') }}" alt="Banner Riggin">
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
                                        En <span class="bold">VMCORREA</span> basamos la industria 4.0 en el Internet de las cosas, que consiste en la intercomunicación de sus procesos industriales y departamentos de manera segura a través de internet, con el fin de que pueda controlar acciones de su personal, equipos e instrumentos desde cualquier parte del mundo instantáneamente, así como el monitoreo y análisis de los datos generados por cualquier área de su industria para optimizar y proveer información valiosa para la toma de decisiones.
                                        Podemos crear aplicaciones móviles seguras y hechas a la medida para su empresa, donde podrá ver y controlar de manera segura todo lo que considere importante desde cualquier parte del mundo y desde un solo lugar.
                                    </p>
                                </div>
                                <div class="col-lg-5 col-sm-12 flex__box">
                                    <img src="{{ asset('assets/icons/industrial-tiny.png') }}" loading="lazy" class="rounded" alt="Industria 4.0" width="60%">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-sm-12" data-aos="fade-up">
                                    <h5 class="position-relative d-inline-block text-uppercase text__subheading pt-2">
                                        Nuestro Objetivo
                                        <span class="sub__line1"></span>
                                        <span class="sub__line2"></span>
                                    </h5>
                                    <p class="p">
                                       <ul>
                                           <li>
                                            Recibir notificaciones cada vez que se produzca una advertencia o alarma en sus procesos, como si se detiene un motor o si se vacía el nivel de un tanque, para que tome acción inmediata desde donde esté y no pierda producto ni tiempo de producción.
                                           </li>
                                           <li>
                                            Dar y quitar permisos a administradores o personal de producción para que por ejemplo, controlen la velocidad de motores, modifiquen la cantidad de producción o reanuden o modifiquen el proceso.
                                           </li>
                                           <li>
                                            Revisar la taza de producción actual y las proyecciones.
                                           </li>
                                           <li>
                                            Analizar toda la información de su industria para tomar mejores decisiones y diferenciarse cada vez mas de sus competidores.
                                           </li>
                                           <li>
                                            Las posibilidades son su imaginación,solo usted conoce los requerimientos específicos de su empresa e industria, nosotros estamos para ayudarle a llevar esos requerimientos al siguiente nivel.
                                           </li>
                                       </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div class="flex__box" data-aos="fade-up">
                <img src="{{ asset('assets/img/industria_4.png') }}" alt="Imagen Industria 4.0">
            </div>
            <div class="flex__box catalogo__container">
                <iframe src="https://publuu.com/flip-book/23869/74991/page/1?embed" width="100%" height="700" scrolling="no" frameborder="0" allowfullscreen="" class="publuuflip"></iframe>
            </div>
        </div>
        <!-- End main section -->
        @include('fragment.modal_menu')
        @include('fragment.footer')

    </div>
    <!-- End Home section -->

@endsection