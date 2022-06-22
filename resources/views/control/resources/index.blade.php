@extends('layouts.master')

@section('title')
    <title>Mundo VMC · Recursos de {{Auth::user()->department->name}}</title>
@endsection

@section('content')
    <header class="header__container">
        @include('fragment._menu-compuesto-responsive')
    </header>


    
    <div class="container pt-5 pb-5">
        <div class="row pt-2">
            <div class="mb-4">
                {{ (session('status')) ? session('status') : "" }}
            </div>
            @forelse ($resources as $resource)
                <div class="col-sm-12 col-md-4 col-xl-4 p-3">
                    <div class="container-resource">
                        <div class="card-resource">
                            <div class="box">
                                <div class="content">
                                    <h2>
                                        @switch($resource->type)
                                            @case('pdf')
                                                <i class="fa-solid fa-file-pdf"></i>
                                            @break
                                            @case('image')
                                                <i class="fa-solid fa-image"></i>
                                            @break
                                            @case('font')
                                                <i class="fa-solid fa-font"></i>
                                            @break
                                            @case('text-document')
                                                <i class="fa-solid fa-file-word"></i>
                                            @break
                                            @case('presentation-document')
                                                <i class="fa-solid fa-file-powerpoint"></i>
                                            @break
                                            @default
                                                <i class="fa-solid fa-circle-question"></i>
                                            @break
                                        @endswitch
                                    </h2>
                                    <h3>{{ $resource->name_resource }}</h3>
                                    <p>
                                        <small>{{  date('d/m/Y', strtotime($resource->created_at))}}</small>
                                    </p>
                                    <P>
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
                                    </P>
                                    <a href="{{route('resource.download', $resource)}}">
                                        <i class="fa-solid fa-file-arrow-down"></i>                
                                    </a>
                                    @if ($resource->type == 'image' || $resource->type == 'pdf')
                                        <a id="myImg" data-link="{{ asset('' . Storage::url('public/resources/' . strtolower(Auth::user()->department->name) . '/' . $resource->resource)) }}" title="{{$resource->name_resource}}" data-type="{{ $resource->type }}">
                                            <i class="fa-solid fa-eye" data-link="{{ asset('' . Storage::url('public/resources/' . strtolower(Auth::user()->department->name) . '/' . $resource->resource)) }}" title="{{$resource->name_resource}}" data-type="{{ $resource->type }}"></i>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <h2 class="display-1">No hay recursos para el departamento de {{Auth::user()->department->name}}</h2>
            @endforelse
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/modalimg.js') }}"></script>
@endsection