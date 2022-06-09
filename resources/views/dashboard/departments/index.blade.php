<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('departments.create') }}">Crear</a>
                    <br>
                        @if (session('status'))
                            {{ session('status') }}
                        @endif
                    <table class="table-bordered caption-top" style="background: #212121">
                        <tr>
                            <th>Nombre</th>
                            <th>Icono</th>
                            <th>Banner</th>
                            <th>Acciones</th>
                        </tr>
                    
                        @forelse ($departments as $department)
                            <tr>
                                <td style="color: #fff">{{ $department->name }}</td>
                                <td> <center><img src="{{ asset('assets/icons-departments/' . $department->icon ) }}" width="10%" alt=""></center></td>
                                <td>
                                    <center>
                                        @if ($department->banner)
                                            <img src="{{ asset('assets/banners/' . $department->banner) }}" alt="Banner departamento {{$department->name}}" width="40%">
                                        @endif
                                        &nbsp;
                                    </center>
                                </td>
                                <td>
                                    <a style="color: #fff" class="mt-2 btn btn-primary" href="{{ route('departments.edit', $department) }}">Editar</a>
                                    <form action="{{ route('departments.destroy', $department) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button style="color: #fff" type="submit">Eliminar</button>
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
</x-app-layout>
