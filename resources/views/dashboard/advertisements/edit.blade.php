@extends('dashboard.layout')

@section('title') 
    <title>Mundo VMC · Editar aviso | {{$advertisement->title}}</title>
@endsection

@section('header')
    <p class="text-xl">Aviso | {{$advertisement->title}}</p>
@endsection

@section('content')
<x-auth-validation-errors class="mb-4" :errors="$errors" />

<div class="grid grid-cols-12 gap-2 my-2">
    <div class="col-span-6">
        <img src="{{asset('assets/advertisements/advertisement-recursos-humanos-memorandum.png')}}" width="50%" alt="">
    </div>
    <div class="col-span-6">
        <form action="{{route('advertisements.update', $advertisement)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @include('dashboard.advertisements._form')
        </form>
    </div>
</div>
@endsection

