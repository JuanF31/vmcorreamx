@extends('dashboard.layout')

@section('title')
    <title>MundoVMC · Nuevo Aviso</title>
@endsection

@section('content')
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <form method="POST" action="{{ route('advertisements.store') }}" enctype="multipart/form-data">
        @include('dashboard.advertisements._form')
    </form>
@endsection