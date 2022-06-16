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
