<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Directorio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('directories.create') }}">Crear</a>
                    <br>
                        @if (session('status'))
                            {{ session('status') }}
                        @endif
                    <table class="table-auto">
                        <tr>
                            <th>Titulo</th>
                            <th>Directorio</th>
                            <th>Estado</th>
                        </tr>
                    
                        @forelse ($directories as $directory)
                            <tr>
                                <td>{{ $directory->title }}</td>
                                <td>
                                    {!! $directory->uri_directory_cover !!}
                                </td>
                                <td>
                                    <form method="POST" action="{{ route('directories.change-status', $directory) }}">
                                        <style>
                                            .btnStatus-ina{
                                                background-color: red;
                                                color: #ffffff;
                                            }
                                            .btnStatus-act{
                                                background-color: green;
                                                color: #ffffff;
                                            }
                                        </style>
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="{{ ($directory->status == 'true' ? 'btnStatus-act' : 'btnStatus-ina') }}">
                                            {{ $directory->status == 'true' ? "Activo" : "Inactivo" }}
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <a class="mt-2 btn btn-primary" href="{{ route('directories.edit', $directory) }}">Editar</a>
                                    <form action="{{ route('directories.destroy', $directory) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button  type="submit">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <h3>No se encontro ningun directorio registrado</h3>
                        @endforelse
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


