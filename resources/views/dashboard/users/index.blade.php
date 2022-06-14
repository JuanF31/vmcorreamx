@extends('dashboard.layout')

@section('title')
    <title>MundoVMC · Usuarios</title>
@endsection

@section('header')
    <p class="text-xl">Usuarios</p>
@endsection

@section('content')
<a href="{{ route('users.create') }}" type="button" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Nuevo usuario</a>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3">
                    Foto
                </th>
                <th scope="col" class="px-6 py-3">
                    Puesto
                </th>
                <th scope="col" class="px-6 py-3">
                    Departamento
                </th>
                <th scope="col" class="px-6 py-3">
                    Acciones
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                        {{ $user->lastname_d . ' ' . $user->lastname_m . ' ' . $user->name }}
                    </td>
                    <td class="px-6 py-4">
                        <img class="w-10 h-10 rounded-full" src="{{ asset('assets/profiles/' . $user->profile_avatar ) }}" alt="Rounded avatar">
                    </td>                     
                    <td class="px-6 py-4">
                        {{ $user->position }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $user->department->name }}
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ route('users.show', $user) }}" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 rounded-lg text-xs px-5 py-2.5 text-center mr-2 mb-2">Detalles</a>
                        <form action="{{ route('users.destroy', $user) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-xs px-5 py-2.5 text-center mr-2 mb-2">Eliminar</button>
                        </form>
                        <a href="{{ route('users.edit', $user) }}" class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-xs px-5 py-2.5 text-center mr-2 mb-2">Editar</a>
                        <a href="{{ route('profile.card', $user) }}" class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-xs px-5 py-2.5 text-center mr-2 mb-2">Perfil</a>
                        <a href="{{ route('password-change.edit', $user) }}" class="text-gray-900 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 font-medium rounded-lg text-xs px-5 py-2.5 text-center mr-2 mb-2">Contraseña</a>
                    </td>
                <tr>
            @empty
                <tr>
                    <td class="px-6 py-4">
                        No hay datos
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="py-4">
        {{$users->links()}}
    </div>
</div>    
@endsection
{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('users.create') }}">Crear</a>
                    <br>

                        {{ session('status') ? session('status') : '' }}
                    <div class="">
                        <table class="">
                            <tr>
                                <th>Nombre</th>
                                <th>Nombre de usuario</th>
                                <th>Puesto</th>
                                <th>Correo</th>
                                <th>Genero</th>
                                <th>Departamento</th>
                                <th>Teléfono</th>
                                <th>Linkedin</th>
                                <th>Foto</th>
                                <th>Acciones</th>
                            </tr>
                        
                            @forelse ($users as $user)
                            
                                <tr>
                                    <td>{{ $user->lastname_d . ' ' . $user->lastname_m . ' ' . $user->name }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->position }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ ($user->gender == 'M') ? 'Masculino' : 'Femenino' }}</td>
                                    <td>{{ $user->department->name }}</td>
                                    <td>{{ ($user->phone_number && $user->lada) ? $user->lada . $user->phone_number : 'Sin telefono' }}</td>
                                    <td>{{ ($user->url_linkedin) ? $user->url_linkedin : 'Sin perfil de linkedin' }}</td>
                                    <td> <center><img src="{{ asset('assets/profiles/' . $user->profile_avatar) }}" width="30%" alt=""></center></td>
                                    <td>
                                        <a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" >Editar</a>
                                        <a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" href="{{ route('users.show', $user) }}">Ver</a>
                                        <a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" href="{{ route('password-change.edit', $user) }}">Cambiar contraseña</a>
                                        <a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" href="{{ route('profile.card', $user) }}">Perfil</a>
                                        <form action="{{ route('users.destroy', $user) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" type="submit">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <h3>No se encontraron usuarios registrados</h3>
                            @endforelse
                        </table>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
