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
                    {{$advertisement->title}}
                </td>
                <td class="px-6 py-4 text-truncate">
                    {{$advertisement->content}}
                </td>                     
                <td class="px-6 py-4">
                    {{ $advertisement->department->name }}
                </td>
                <td class="px-6 py-4"> 
                    {{date('d/m/Y', strtotime($advertisement->created_at))}}
                </td>
                <td class="px-6 py-4"> 
                    {{date('h:i A', strtotime($advertisement->created_at))}}
                </td>

                <td class="px-6 py-4 text-xl font-extrabold">
                    <a class="btn text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" href="{{route('advertisements.edit', $advertisement)}}"><i class="fa-solid fa-pen-to-square"></i></a> 
                    <form action="{{route('advertisements.destroy', $advertisement)}}"  method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
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
