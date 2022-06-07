<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Recursos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('resources.create') }}">Crear Recurso</a>
                    <br>
                        @if (session('status'))
                            {{ session('status') }}
                        @endif
                    <table>
                        <tr>
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th>Recurso</th>
                            <th>Departamento</th>
                        </tr>
                        @forelse ($resources as $resource)
                            <tr>
                                <td>{{ $resource->name_resource }}</td>
                                @switch($resource->type)
                                    @case('pdf')
                                        <td>PDF</td>
                                    @break
                                    @case('image')
                                        <td>Imagen</td>
                                    @break
                                    @case('font')
                                        <td>Fuente</td>
                                    @break                                       
                                @endswitch
                                <td>{{ $resource->resource }}</td>
                                <td>{{ $resource->department->name }}</td>
                            </tr>
                        @empty
                            
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
