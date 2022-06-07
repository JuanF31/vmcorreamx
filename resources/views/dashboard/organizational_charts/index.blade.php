<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Organigrama') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('organizational.create') }}">Crear</a>
                    <br>
                        @if (session('status'))
                            {{ session('status') }}
                        @endif
                    <table class="table-auto">
                        <tr>
                            <th>Titulo</th>
                            <th>Organigrama</th>
                            <th>Estado</th>
                        </tr>
                    
                        @forelse ($organizational_charts as $organizational_chart)
                            <tr>
                                <td>{{ $organizational_chart->title }}</td>
                                <td>
                                    {!! $organizational_chart->uri_flipbook_cover !!}
                                </td>
                                <td>
                                    <form method="POST" action="{{ route('organizational.change-status', $organizational_chart) }}">
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
                                        <button type="submit" class="{{ ($organizational_chart->status == 'true' ? 'btnStatus-act' : 'btnStatus-ina') }}">
                                            {{ $organizational_chart->status == 'true' ? "Activo" : "Inactivo" }}
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <a class="mt-2 btn btn-primary" href="{{ route('organizational.edit', $organizational_chart) }}">Editar</a>
                                    <form action="{{ route('organizational.destroy', $organizational_chart) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button  type="submit">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <h3>No se encontraron orgnaigramas registrados</h3>
                        @endforelse
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


