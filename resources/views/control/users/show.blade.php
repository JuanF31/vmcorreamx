@extends('layouts.master')

@section('title') 
    <title>Mundo VMC · {{$user->name . ' ' . $user->lastname_d  . ' ' . $user->lastname_m}} - Tarjeta Digital</title>
@endsection

@section('content')
    @include('fragment.sidebar')

    <!-- Home section -->
    <div class="seccion__body">

        @include('fragment._header')
        <p class="fs-1">
            @if ($user->lada && $user->phone_number)
            <a class="blue" href="https://wa.me/{{ $user->lada . $user->phone_number }}?text=Buen día {{ $user->name . ' ' . $user->lastname_d }}" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>               
        @endif
        @if ($user->url_linkedin)
            <a class="blue" href="{{ $user->url_linkedin }}" target="_blank" ><i class="fa-brands fa-linkedin"></i></a>
        @endif
            
        </p>
        <button onclick="history.back()">Atras</button>
        @if (isset($user->profile->digital_card))
            <img src="{{ asset('assets/digital-cards/' . $user->profile->digital_card)}}" alt="">
        @else
            <h1>No hay tarjeta digital asignada a {{ $user->name }}</h1>
        @endif
        
        @include('fragment.modal_menu')
    </div>
    <!-- End body -->

@endsection






