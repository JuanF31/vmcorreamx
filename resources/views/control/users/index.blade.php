@extends('layouts.master')

@section('title') 
    <title>Mundo VMC · Compañero VMC</title>
@endsection

@section('content')
        <!-- header -->
        <header class="header__container">
            @include('fragment._menu-compuesto-responsive')
            <div class="flex__box" data-aos="fade-up">
                <img src="{{ asset('assets/banners/banner-departamento-administrativo-1654642030.png') }}" >                
            </div>    
        </header>
        <!-- End header -->

        <div class="container pt-5" data-aos="fade-up">

            <div class="d-flex justify-content-end pt-0 p-3 pb-5">
                <div class="searchBox">
                    <form id="searchForm">
                        <input autocomplete="off" class="searchInput" type="text" name="searcher" id="searcher" placeholder="Buscar">
                        <div class="searchButton">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                    </form>
                </div>
            </div>
            
            <div id="app" class="pt-5">

            </div>

            <div class="row text-center pt-2">
                @forelse ($departments as $department)
                    <div class="col-xl-4 col-sm-12 col-md-12 rounded p-3">
                        <a href="{{ route('departments.show', $department) }}" class="card  carta-servicio">
                            <div class="overlay"></div>
                            <div class="circle">
                                <img src="{{ asset('assets/icons-departments/' . $department->icon) }}" alt="Departamento {{ $department->name }}" width="80">
                            </div>
                            <p>{{ $department->name }}</p>
                        </a>
                    </div>   
                @empty
                    <h2>No hay departamentos registrados</h2>
                @endforelse
            </div>
        </div>        
        <!-- End body -->
@endsection
@section('script')
<script src="{{ asset('js/buscador.js') }}"></script>
@endsection






