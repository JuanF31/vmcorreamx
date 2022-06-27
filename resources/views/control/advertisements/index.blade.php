
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
            <img src="{{ asset('assets/banners/banner-departamento-calidad-1654641490.png') }}" alt="">
        </div>
    </header>

    <style>
        .slider-nav-dark.slider-nav-round .slider-nav::before{
            background-color: var(--azul__primario) !important;
        }
        .btn-ad a{
            padding: .8rem;
            background-color: var(--azul__primario);
            color: var(--azul__terciario);
            font-size: 1.4rem;
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
        .bg-ad{
            background-color: #0A1A27;
        }
    </style>
    <div class="btn-ad container pt-5 pb-5" data-aos="fade-up">
        <div class="swiffy-slider slider-item-show2 slider-item-reveal slider-nav-outside slider-nav-round slider-nav-visible slider-indicators-outside slider-indicators-round slider-indicators-dark slider-nav-animation slider-nav-animation-fadein slider-item-first-visible slider-nav-dark">
            <ul class="slider-container py-5">
                @for ($i = 0; $i <= 10; $i++)
                <li>
                    <div id="card-ad-{{$i}}" class="card bg-ad rounded shadow" style="width: 100%;">
                        <img src="{{ asset('assets/IMG-20220623-WA0001.jpg') }}" class="img-fluid rounded mx-auto d-block" alt="..." width="45%">
                        <div class="card-body bg-white p-4">
                            <h5 >Titulo {{ $i }}</h5>
                            <h5 class="display-6 card-title" data-image="{{asset('assets/icons-departments/'."image-$i.png")}}">Departamento {{ $i }}</h5>
                            <small>24/06/2022 · 10:00 a.m.</small>
                            <p class="card-text text-truncate">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse vitae sit officia consequuntur nostrum voluptatum odit id explicabo enim. Dignissimos cum inventore harum exercitationem! Laboriosam repellat sit dolorum cum quisquam.</p>
                            <a id="btn_more" href="hola" data-id="{{$i}}" class="btn">Ver más</a>
                        </div>
                    </div>
                </li>
                @endfor
            </ul>
        
            <button type="button" class="slider-nav" aria-label="Go left"></button>
            <button type="button" class="slider-nav slider-nav-next" aria-label="Go left"></button>
        
            <div class="slider-indicators">
                @for ($i = 0; $i <= 5; $i++)
                    <button aria-label="Go to slide"></button>
                @endfor
            </div>
        </div>
    </div>
@endsection

@section('script')
<script src="{{ asset('js/modalAvisos.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.5.3/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
@endsection