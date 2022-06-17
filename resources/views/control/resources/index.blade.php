@extends('layouts.master')

@section('title')
    <title>Mundo VMC · Recursos de {{Auth::user()->department->name}}</title>
@endsection

@section('content')
    <header class="header__container">
        @include('fragment._menu-compuesto-responsive')
    </header>
    <div class="container pt-5 pb-5" data-aos="fade-up">
        <div class="row pt-2">
            @forelse ($resources as $resource)
            <div class="col-sm-12 col-md-4 col-xl-4 p-3">
                <h2>{{ $resource->name_resource }}</h2>
                <small>Publicado: {{  date('d/m/Y', strtotime($resource->created_at))}}</small>
                <br>
                <small>
                    @switch($resource->type)
                    @case('pdf')
                        PDF
                    @break
                    @case('image')
                        Imagen
                    @break
                    @case('font')
                        Fuente
                    @break
                    @case('text-document')
                        Documento de Word
                    @break
                    @case('presentation-document')
                        Documento de PowerPoint
                    @break
                    @default
                        Otro
                    @break
                @endswitch
                </small>
                <br>
                <style>
                    .txt-d a{
                        text-decoration: none !important;
                    }
                </style>
                <p class="fs-1 txt-d">
                    <a href="{{ route('resource.download', $resource) }}">
                        <i class="fa-solid fa-file-arrow-down"></i>                
                    </a>
                    <a href="{{ asset('' . Storage::url('public/resources/' . strtolower(Auth::user()->department->name) . '/' . $resource->resource)) }}" target="_blank">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                </p>
            </div>
            @empty
                <h2 class="display-1">No hay recursos para el departamento de {{Auth::user()->department->name}}</h2>
            @endforelse
        </div>
    </div>
@endsection