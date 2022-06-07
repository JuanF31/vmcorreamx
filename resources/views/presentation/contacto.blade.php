@extends('layouts.master')
@section('title')
<title>{{ config('app.name') }} · Contacto </title>
@endsection

@section('content')
    @include('fragment.sidebar')

    <!-- Home section -->
    <div class="seccion__body bg-textura">

        <!-- header -->
        <header class="header__container">
            <div class="barra">
                <div class="btn__menu" id="btn__abrir">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>

            <div class="flex__box" data-aos="fade-up">
                <img src="{{ asset('assets/banners/Banner_contacto.png') }}" alt="Banner Mundo VMC">
            </div>
        </header>
        <!-- End header -->

        <!-- Main section or body -->
        <div class="body__container">
            <div class="container-fluid">
                <div class="container">
                    <main data-aos="fade-up">
                        <h5 class="position-relative d-inline-block text-uppercase heading">
                            Contacto
                            <span class="sub__line1"></span>
                            <span class="sub__line2"></span>
                        </h5>
                    </main>
                    <div class="row mb-5 mt-5">
                        <div class="col-lg-8 col-md-12 col-sm-12" data-aos="fade-up">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <h3 class="title-mapa pt-3">Sucursal VMC Puebla</h3>
                                    <div class="mapa-contacto">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.408181334441!2d-98.10274578560424!3d19.045782957872067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfeae55326537f%3A0xe2ff1ae036f494f9!2sVMC%20SUCURSAL%20PUEBLA!5e0!3m2!1ses-419!2smx!4v1646667221393!5m2!1ses-419!2smx" width="100%" allowfullscreen="true" class="mapa-circular"></iframe>
                                    </div>
                                    <div class="icono-contacto">
                                        <p><i class="fa-solid fa-location-dot"></i> Calle San Luis N°13, Col. San Lorenzo, Chachapa Amozoc, Puebla, C.P. 72990.</p>
                                        <p><i class="fa-solid fa-phone"></i> +52 222 2 86 74 16,&nbsp; +52 222 1 22 64 64</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <h3 class="title-mapa pt-3">Sucursal VMC S.L.P</h3>
                                    <div class="mapa-contacto">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3696.1679961557293!2d-100.90187088555508!3d22.119569555021847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842aa3851d72d391%3A0x18a27039199a137d!2sBlvd.%20Las%20Mercedes%20337%2C%20Cielo%20Claro%20las%20Mercedes%2C%20San%20Luis%2C%20S.L.P.!5e0!3m2!1ses-419!2smx!4v1646667889791!5m2!1ses-419!2smx" width="100%" allowfullscreen="true" class="mapa-circular"></iframe>
                                    </div>
                                    <div class="icono-contacto">
                                        <p><i class="fa-solid fa-location-dot"></i> Las Mercedes #337, Col. Las Mercedes C.P. 78394, San Luis Potosi</p>
                                        <p><i class="fa-solid fa-phone"></i></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <h3 class="title-mapa pt-3">Sucursal VMC Coahuila</h3>
                                    <div class="mapa-contacto">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3604.1338939084685!2d-100.95276568549296!3d25.400328329663495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86880d1c76417253%3A0x9d9577ee352dc22f!2sSan%20Gelacio%20169%2C%20San%20Jos%C3%A9%2C%2025019%20Saltillo%2C%20Coah.!5e0!3m2!1ses-419!2smx!4v1646668016573!5m2!1ses-419!2smx" width="100%" allowfullscreen="true" class="mapa-circular"></iframe>
                                    </div>
                                    <div class="icono-contacto">
                                        <p><i class="fa-solid fa-location-dot"></i> San Gelacio #169, Col. San Jose Saltillo, Coahuila.</p>
                                        <p><i class="fa-solid fa-phone"></i></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <h3 class="title-mapa pt-3">Sucursal VMC USA</h3>
                                    <div class="mapa-contacto">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3538.798364283433!2d-99.50914378544807!3d27.506645640891325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8661218738041957%3A0x6031f9348f12e0b4!2s1100%20Matamoros%20St%2C%20Laredo%2C%20TX%2078040%2C%20EE.%20UU.!5e0!3m2!1ses-419!2smx!4v1646668122818!5m2!1ses-419!2smx" width="100%" allowfullscreen="true" class="mapa-circular"></iframe>
                                    </div>
                                    <div class="icono-contacto">
                                        <p><i class="fa-solid fa-location-dot"></i> Wells Fargo Building 2nd Floor Office 254 1100 Matamoros Laredo TX 78040.</p>
                                        <p><i class="fa-solid fa-phone"></i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12" data-aos="fade-up">
                            <h3 class="title-mapa p-3 px-lg-5 px-md-5 text-start">Contáctanos</h3>
                            <ul class="lista-contactanos px-lg-5 px-md-5 p-3">
                                <li><a href="mailto:grupovmc@vmcorrea.com"><i class="fa-solid fa-envelope"></i> contacto@vmcorreamx.com</a></li>
                            </ul>
                            <h3 class="title-mapa p-3 px-lg-5 px-md-5 text-start">Nuestras redes sociales</h3>
                            <ul class="lista-contactanos px-lg-5 px-md-5 p-3">
                                <li><a href="https://www.facebook.com/VMCORREAMEXICO" target="_blank"><i class="fa-brands fa-facebook"></i> @VMCORREAMEXICO</a></li>
                                <li><a href="https://www.youtube.com/channel/UCmKFtJLLDygtppbts6RGBdw" target="_blank"><i class="fa-brands fa-youtube"></i> VMCORREA MÉXICO</a></li>
                                <li><a href="https://www.instagram.com/vmc_correa/" target="_blank"><i class="fa-brands fa-instagram"></i> @vmc_correa</a></li>
                                <li><a href="https://mx.linkedin.com/company/vmcorrea" target="_blank"><i class="fa-brands fa-linkedin"></i> VMCorrea México</a></li>
                                <li><a href="#" target="_blank"><i class="fa-brands fa-whatsapp"></i> +52 </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End body -->
        @include('fragment.modal_menu')
        @include('fragment.footer')
    </div>
    <!-- End Home section -->

    
@endsection
