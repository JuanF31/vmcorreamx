@extends('layouts.master')

@section('title') 
    <title>Mundo VMC · Compañero VMC</title>
@endsection

@section('content')
    @include('fragment.sidebar')

    <!-- Home section -->
    <div class="seccion__body">
        @include('fragment._header')

        <div class="container pt-5">
            <div class="d-flex justify-content-end">
                <div class="searchBox">
                    <form id="searchForm">
                        <input class="searchInput" type="text" name="searcher" id="searcher" placeholder="Buscar">
                        <div class="searchButton">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                    </form>
                </div>
            </div>

            <div class="mt-5 pb-4">
            
            </div>
            <style>
                .border-blue{
                    border: .2rem solid var(--azul__primario);
                }.alert{
                    padding: 0 !important;
                }.alert-dismissible{
                    padding-right: 0 !important;
                }.carta-servicio a{
                    text-decoration: none;
                    color: #212121;
                }.link-profile a{
                    text-decoration: none;
                    color: red;
                }
            </style>
            <div id="app" class="dashboard pt-5">

            </div>
        

            <div class="row text-center pt-5">
                @forelse ($departments as $department)
                    <div class="col-xl-4 col-sm-12 col-md-12 rounded carta-servicio p-3">
                        <a href="{{ route('departments.show', $department) }}">
                            <div class="bg-white rounded shadow-sm py-5 px-4">
                                <img src="{{ asset('assets/icons-departments/' . $department->icon) }}" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm p-4 bg-blue">
                                <h2 class="mb-0">{{ $department->name }}</h2>
                            </div>
                        </a>
                    </div>    
                @empty
                    <h2>No hay departamentos registrados</h2>
                @endforelse
            </div>
        </div>
        
        @include('fragment.modal_menu')
        {{-- @include('fragment._footer-mundovmc') --}}
    </div>
    <!-- End body -->

    @section('script')
        <script src="{{ asset('js/buscador.js') }}"></script>
    @endsection
@endsection






