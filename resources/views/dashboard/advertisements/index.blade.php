@extends('dashboard.layout')

@section('title')
    <title>MundoVMC · Avisos</title>
@endsection

@section('header')
    <p class="text-xl">Avisos</p>
@endsection

@section('content')
<a href="{{ route('advertisements.create') }}" type="button" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Nuevo aviso</a>

<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                Titulo
            </th>
            <th scope="col" class="px-6 py-3">
                Contenido
            </th>
            <th scope="col" class="px-6 py-3">
                Departamento
            </th>
            <th scope="col" class="px-6 py-3">
                Fecha
            </th>
            <th scope="col" class="px-6 py-3">
                Hora
            </th>
            <th scope="col" class="px-6 py-3">
                Acciones
            </th>
        </tr>
    </thead>
    <tbody>
        @forelse ($advertisements as $advertisement)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">

                </td>
                <td class="px-6 py-4">

                </td>                     
                <td class="px-6 py-4 text-xl font-extrabold">

                </td>

                <td class="px-6 py-4 text-xl font-extrabold">
                    <a href=""><i class="fa-solid fa-download"></i></a>
                    <a href=""><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href=""></a>
                    <form  method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-xs px-5 py-2.5 text-center mr-2 mb-2">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                </td>
            <tr>
        @empty
            <tr class="dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4 text-center" colspan="6">
                    No hay avisos disponibles
                </td>
            </tr>
        @endforelse
    </tbody>
</table>    
@endsection
