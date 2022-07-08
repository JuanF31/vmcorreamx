@extends('dashboard.layout')

@section('title')
    <title>MundoVMC · Recursos Departamento {{ $department->name }}</title>
@endsection

@section('header')
    <p class="text-xl">Recursos asignados al departamento de {{ $department->name }}</p>
@endsection

@section('content')
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <a href="{{ route('resources.create', $department) }}" type="button" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Nuevo recurso para {{ $department->name }}</a>

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3">
                    Tipo
                </th>
                <th scope="col" class="px-6 py-3">
                    Recurso
                </th>
                <th scope="col" class="px-6 py-3">
                    Publicado
                </th>
                <th scope="col" class="px-6 py-3">
                    Fecha
                </th>
                <th scope="col" class="px-6 py-3">
                    Acciones
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($resources as $resource)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                        {{ $resource->name_resource }}
                    </td>
                    <td class="px-6 py-4">
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
                    </td>                     
                    <td class="px-6 py-4 text-xl font-extrabold">
                        <a href="{{ asset('resources/' . strtolower($department->name) . '/' . $resource->resource) }}" title="{{$resource->name_resource}}" target="_blank">
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
                                    <i class="fa-regular fa-file-powerpoint"></i>
                                @break
                                @default
                                    <i class="fa-solid fa-circle-question"></i>
                                @break
                            @endswitch
                        </a>
                    </td>
                    <td class="px-6 py-4">
                        {{ ($resource->published == 'yes') ? 'Si' : 'No'  }}
                    </td>
                    <td class="px-6 py-4">
                        {{ date("d-m-Y", strtotime($resource->created_at)) }}
                    </td>
                    <td class="px-6 py-4 text-xl font-extrabold">
                        <a href="{{ route('resources.download', $resource) }}"><i class="fa-solid fa-download"></i></a>
                        <a href="{{ route('resources.edit', $resource) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href=""></a>
                        <form action="{{ route('resources.destroy', $resource) }}" method="POST">
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
                        No hay Recursos para el area de {{ $department->name }}
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="py-4">
        {{$resources->links()}}
    </div>
</div>
@endsection

