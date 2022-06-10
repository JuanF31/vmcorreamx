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
                    <a href="{{ route('users.create') }}">Crear</a>
                    <br>
                        {{-- @if (session('status'))
                            {{ session('status') }}
                        @endif --}}
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
                                        <a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" href="{{ route('users.edit', $user) }}">Editar</a>
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
                        {{$users->links()}}
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
