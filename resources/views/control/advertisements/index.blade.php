
@extends('layouts.master')

@section('title') 
    <title>Mundo VMC · Avisos</title>
@endsection

@section('css')
<link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.5.3/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
@endsection

@section('content')
    <header class="header__container">
        @include('fragment._menu-compuesto-responsive')
        <div class="flex__box" data-aos="fade-up">
            <img src="{{ asset('assets/banners/banner-departamento-administrativo-1654642030.png') }}" alt="">
        </div>
    </header>

    <style>
        .slider-nav-dark.slider-nav-round .slider-nav::before{
            background-color: var(--azul__primario) !important;
        }
        .btn-ad a{
            padding: 1rem;
            background-color: var(--azul__primario);
            color: var(--azul__terciario);
            font-size: 1.6rem;
            border-radius: .9rem;
        }
        .btn-ad a i{
            background-color: var(--azul__terciario);
            color: var(--azul__primario);
            margin-right: .5rem;
            padding: 1rem;
            border-radius: .5rem;
        }
        .btn-ad a:hover{
            animation: shadow-pulse 1000ms 1;
            background-color: var(--azul__terciario);
            color: var(--azul__primario);
        }
    </style>
    <div class="btn-ad container pt-5 pb-5" data-aos="fade-up">
        <div class="swiffy-slider slider-item-show2 slider-item-reveal slider-nav-outside slider-nav-round slider-nav-visible slider-indicators-outside slider-indicators-round slider-indicators-dark slider-nav-animation slider-nav-animation-fadein slider-item-first-visible slider-nav-dark">
            <ul class="slider-container py-4">
                <li>
                    <div class="card shadow h-100">
                        <div class="ratio ratio-16x9">
                            <img src="https://swiffyslider.com/assets/img/photos/img7.webp" class="card-img-top" loading="lazy" alt="...">
                        </div>
                        <div class="card-body p-3 p-xl-5">
                            <h3 class="card-title h5">See the world</h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div><a href="#" class="btn">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card shadow h-100">
                        <div class="ratio ratio-16x9">
                            <img src="https://swiffyslider.com/assets/img/photos/img8.webp" class="card-img-top" loading="lazy" alt="...">
                        </div>
                        <div class="card-body p-3 p-xl-5">
                            <h3 class="card-title h5">Tranquil locations far away</h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn">Go somewhere</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card shadow h-100">
                        <div class="ratio ratio-16x9">
                            <img src="https://swiffyslider.com/assets/img/photos/img9.webp" class="card-img-top" loading="lazy" alt="...">
                        </div>
                        <div class="card-body p-3 p-xl-5">
                            <h3 class="card-title h5">Road trip in the wilderness</h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn">Go somewhere</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card shadow h-100">
                        <div class="ratio ratio-16x9">
                            <img src="https://swiffyslider.com/assets/img/photos/img4.webp" class="card-img-top" loading="lazy" alt="...">
                        </div>
                        <div class="card-body p-3 p-xl-5">
                            <h3 class="card-title h5">To the hidden lake side</h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn">Go somewhere</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card shadow h-100">
                        <div class="ratio ratio-16x9">
                            <img src="https://swiffyslider.com/assets/img/photos/img5.webp" class="card-img-top" loading="lazy" alt="...">
                        </div>
                        <div class="card-body  p-3 p-xl-5">
                            <h3 class="card-title h5">Up, up, up in the Air</h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn">Go somewhere</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card shadow h-100">
                        <div class="ratio ratio-16x9">
                            <img src="https://swiffyslider.com/assets/img/photos/img6.webp" class="card-img-top" loading="lazy" alt="...">
                        </div>
                        <div class="card-body p-3 p-xl-5">
                            <h3 class="card-title h5">A climbers birds view</h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn">Go somewhere</a>
                        </div>
                    </div>
                </li>
            </ul>
        
            <button type="button" class="slider-nav" aria-label="Go left"></button>
            <button type="button" class="slider-nav slider-nav-next" aria-label="Go left"></button>
        
            <div class="slider-indicators">
                <button class="active" aria-label="Go to slide"></button>
                <button aria-label="Go to slide"></button>
                <button aria-label="Go to slide"></button>
                <button aria-label="Go to slide"></button>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.5.3/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
@endsection