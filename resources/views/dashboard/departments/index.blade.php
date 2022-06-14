@extends('dashboard.layout')

@section('title')
    <title>MundoVMC · Departamentos</title>
@endsection

@section('header')
    <p class="text-xl">Departamentos</p>
@endsection

@section('content')
<a href="{{ route('departments.create') }}" type="button" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Nuevo Departamento</a>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3">
                    Icono
                </th>
                <th scope="col" class="px-6 py-3">
                    Banner
                </th>
                <th scope="col" class="px-6 py-3">
                    Acciones
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($departments as $department)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                        {{ $department->name }}
                    </td>
                    <td class="px-6 py-4">
                        <img class="w-10 h-10 rounded-full" src="{{ asset('assets/icons-departments/' . $department->icon ) }}" alt="Rounded avatar">
                    </td>  
                    <td class="px-6 py-4">
                        {!! ($department->banner) ? "<img src='" . asset('assets/banners/' . $department->banner) . "' alt='Banner departamento " . $department->name . "' width='50%'>" : "<p>Sin banner</p>" !!}
                    </td>
                    <td class="px-6 py-4">
                        <style>
                            ul{
                                list-style-type: none;
                                margin: 0;
                                padding: 0;
                            }
                            ul li{
                                display: inline !important;
                            }
                        </style>
                        <ul>
                            <li>
                                <form action="{{ route('departments.destroy', $department) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-xs px-5 py-2.5 text-center mr-2 mb-2">Eliminar</button>
                                </form>
                            </li>
                            <li><a href="{{ route('departments.edit', $department) }}" class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-xs px-5 py-2.5 text-center mr-2 mb-5">Editar</a></li>
                            <br>
                            <br>
                            <li><a href="{{ route('resources.index', $department) }}" class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-xs px-5 py-2.5 text-center mr-2 mb-2">Recursos</a></li>                            
                        </ul>

                    </td> 
                </tr>
            @empty
                <tr>
                    <td class="px-6 py-4">
                        No hay datos
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
