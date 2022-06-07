@extends('layouts.master')

@section('title') 
    <title>Mundo VMC · Panel de control</title>
@endsection

@section('content')
    @include('fragment.sidebar')

    <!-- Home section -->
    <div class="seccion__body">
        @include('fragment._header')
            <div class="row dashboard">
                <div class="col-xl-3 col-lg-3 col-md-12 bg-dashboard panel">
                    <div class="row">
                        <div class="col-12 log_out p-5 pt-4">
                            <li class="nav-item dropdown">
                                <a class="icon_log_out" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-circle-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="btn-logout">
                                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                                Cerrar Sesión
                                            </button>
                                        </form>
                                    </li>
                                </ul>                        
                            </li>
                            {{-- <i class="fa-solid fa-arrow-right-from-bracket"></i> --}}
                        </div>
                        <div class="col-12 p-5 pt-0">
                            <div class="contenedor__img">
                                <div class="icono-cabecera">
                                    <img src="{{ asset('assets/profiles/' . Auth::user()->profile_avatar) }}" alt="Avatar profile {{ Auth::user()->name . ' ' . Auth::user()->lastname_d . ' ' . Auth::user()->lastname_m }}" class="icono-valores">
                                </div>
                                <div class="carta">
                                    <div class="carta-cabecera">
                                        <h3 class="name">
                                            @switch(Auth::user()->degree_study->slug)
                                                @case('ingeniero')
                                                    Ing.   
                                                @break
                                                @case('licenciado')
                                                    Lic.   
                                                @break
                                                @case('contador-publico')
                                                    C.P. 
                                                @break
                                            @endswitch
                                            {{ Auth::user()->name }}
                                        </h3>
                                        <h3 class="last__name">{{ Auth::user()->lastname_d . ' ' . Auth::user()->lastname_m }}
                                            <span class="line3"></span>
                                        </h3>
                                        <div class="icon__puesto">
                                            <img src="{{ asset('assets/icons-departments/' . Auth::user()->department->icon) }}" width="15%" alt="Icono {{ Auth::user()->department->name }}">
                                        </div>
                                        <h3 class="cargo">{{ Auth::user()->position }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 bg__panel">
                            <h4>Cursos <br> Disponibles</h4>
                        </div>
                        <div class="col-12 p-5">
                            <h3 class="text-white">No hay nada para mostrar</h3>
                            {{-- <a class="btn mb-4 mx-4 btn__course"><i class="fa-solid fa-thumbtack"></i> Google Analitics</a>
                            <a class="btn m-4 btn__course"><i class="fa-solid fa-thumbtack"></i> Facebook Business</a>
                            <a class="btn m-4 btn__course"><i class="fa-solid fa-thumbtack"></i> Marketing</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 p-5 panel flex__box">
                    <div class="row">
                        <div class="col-12 mt-5 mb-5 flex__box">
                            <img src="{{ asset('assets/icons/logo-vmc-principal.png') }}" alt="Icono VMC" width="30%">
                        </div>
                        <div class="col-12 flex__box">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/akAIv5pLJRY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12 p-5 bg-buttons d-flex justify-content-center align-items-center">
                    <nav class="button__dashboard">
                        <a class="btn mb-5 btn__option" data-bs-toggle="modal" data-bs-target="#modalOrganigrama"><i class="fa-solid fa-sitemap"></i> Organigrama</a>
                        <a class="btn mb-5 mt-5 btn__option" data-bs-toggle="modal" data-bs-target="#modalDirectorio"><i class="fa-solid fa-users-line"></i> Directorio</a>
                        <a class="btn mb-5 mt-5 btn__option" data-bs-toggle="modal" data-bs-target="#modalRecursos"><i class="fa-solid fa-list"></i> Recursos</a>
                        <a class="btn mb-5 mt-5 btn__option" data-bs-toggle="modal" data-bs-target="#modalBoletin"><i class="fa-solid fa-folder-open"></i> Proyectos</a>
                        <a class="btn mb-5 mt-5 btn__option" data-bs-toggle="modal" data-bs-target="#modalAnuncios"><i class="fa-solid fa-bullhorn"></i> Anuncios</a>
                        <a class="btn mb-5 mt-5 btn__option" data-bs-toggle="modal" data-bs-target="#modalRevista"><i class="fa-solid fa-book-bookmark"></i> Revista</a>
                        <a class="btn mb-5 mt-5 btn__option" data-bs-toggle="modal" data-bs-target="#modalPlataformas"><i class="fa-solid fa-desktop"></i> Plataformas</a>                
                        <a href="{{ route('user.index') }}" class="btn mt-5"><i class="fa-solid fa-people-group"></i> Compañero VMC</a>
                    </nav>
                </div>
            </div>
        @include('fragment.modal_menu')
        @include('fragment._footer-mundovmc')
    </div>
    <!-- End body -->
    @include('control.organizational_chart.modalOrganitational')
@endsection






