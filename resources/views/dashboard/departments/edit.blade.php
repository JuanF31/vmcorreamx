<x-app-layout>
    <x-slot name="header">
        <img src="{{ asset('assets/icons-departments/' . $department->icon) }}" width="5%" alt="">
        <img src="{{ asset('assets/banners/' . $department->banner) }}" width="10%" alt="">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar departamento') . ' - ' . $department->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-guest-layout>
                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                
                        <form method="POST" action="{{ route('departments.update', $department->id) }}" enctype="multipart/form-data" >
                            @method('PUT')
                            @include('dashboard.departments._form', ["task" => "edit"])
                        </form>
                    </x-guest-layout>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>





