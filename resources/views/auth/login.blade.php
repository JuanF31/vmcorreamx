@extends('layouts.master')

@section('title')
    <title>{{ config('app.name') }} · MundoVMC</title>
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
                    <img src="{{ asset('assets/banners/Banner_Mundo.png') }}" alt="Banner Mundo VMC">
                </div>
            </header>
            <!-- End header -->
            <!-- Main section or body -->
            <div class="mt-5 mb-5 container" data-aos="fade-up">
                <div class="row pt-5 pb-5">
                    <div class="col-lg-7 col-md-12 flex__box">
                        <img src="{{ asset('assets/img/mundo_frase.png') }}" alt="Imagen Login">
                    </div>
                    <div class="col-lg-5 col-md-12 flex__box">
                        <div class="row m-4">
                            <h4 class="text-uppercase display-5">Inicio de sesión</h4>

                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />                            
                            <form class="col-12" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="col-12 mb-3">
                                    <label for="username" class="form-label">Nombre de usuario</label>
                                    <input type="text" name="username" class="form-control form__custom" id="username" placeholder="Ingrese su nombre de usuario" value="{{ old('username') }}" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="password" class="form-label">Contraseña</label>

                                    <div class="input-group">
                                        <input type="password" id="password" name="password" class="form-control form__custom" placeholder="Ingrese su contraseña" autocomplete="current-password" required>
                                        <span class="input-group-btn">
                                            <button class="btn btn-outline-dark" id="btnPassword" type="button"><i id="iconPassword" class="fa-solid fa-eye"></i></button>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-12 pt-4">
                                    <button class="button btn__3" type="submit">Iniciar Sesión</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Main -->
            @include('fragment.modal_menu')
            @include('fragment.footer')

        </div>
@endsection
@section('script')
<script src="{{ asset('js/changeInputPassword.js') }}"></script>
@endsection