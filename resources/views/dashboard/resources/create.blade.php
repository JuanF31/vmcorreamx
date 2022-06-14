@extends('dashboard.layout')

@section('title')
    <title>MundoVMC · Nuevo Recurso para {{ $department->name }}</title>
@endsection

@section('header')
    <p class="text-xl">Nuevo recurso para {{ $department->name }}</p>
@endsection

@section('content')
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <form method="POST" action="{{ route('resources.store', $department) }}" enctype="multipart/form-data">
        @include('dashboard.resources._form')
    </form>
@endsection
