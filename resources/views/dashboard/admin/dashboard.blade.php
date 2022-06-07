<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <style>
                        .icono-cabecera{
                            position: relative;
                            width: 35%;
                            border-radius: 50%;
                        }
                    </style>
                    <div class="icono-cabecera">
                        <img src="{{ asset('assets/profiles/' . Auth::user()->profile_avatar) }}" alt="Profile avatar {{ Auth::user()->name . ' ' . Auth::user()->lastname_d . ' ' . Auth::user()->lastname_m }}" width="35%" >
                    </div>
                    <h3>
                        @switch(Auth::user()->degree_study->slug)
                            @case('ingeniero')
                                Ing.   
                            @break
                            @case('licenciado')
                                Lic.   
                            @break
                            @case('contador-publico')
                                C.P. 
                            @break
                        @endswitch
                        {{ Auth::user()->name }}
                    </h3>
                    <h3>{{ Auth::user()->lastname_d . ' ' . Auth::user()->lastname_m }}</h3> 
                    <div class="icon__puesto">
                        <img src="{{ asset('assets/icons-departments/'.Auth::user()->department->icon) }}" alt="Icono {{ Auth::user()->department->name }}" width="15%"> 
                    </div>
                    <h3 class="cargo">{{ Auth::user()->position }}</h3>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
