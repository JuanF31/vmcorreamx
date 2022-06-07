<x-app-layout>
    <x-slot name="header">
        <img src="{{ asset('assets/profiles/' . $user->profile_avatar) }}" width="5%" alt="">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cambiar contraseña') . ' - ' . $user->name . ' ' . $user->lastname_d . ' ' . $user->lastname_m}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-guest-layout>
                        <!-- Validation Errors -->
                        @if (session('status'))
                            {{ session('status') }}
                        @endif
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form method="POST" action="{{ route('password-change.update', $user) }}">
                            @csrf
                            @method('PUT')
                            <!-- Password -->
                            <div class="mt-4">
                                <x-label for="password" :value="__('Nueva contraseña')" />
                                <x-input id="password" class="block mt-1 w-full" type="password" name="password" autocomplete="new-password" />
                            </div>  
                            <!-- Password -->
                            <div class="mt-4">
                                <x-label for="confirm_password" :value="__('Confirme su identidad')" />
                                <x-input id="confirm_password" class="block mt-1 w-full" type="password" name="confirm_password" autocomplete="new-password" />
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ml-4">
                                    {{ __('Cambiar') }}
                                </x-button>
                            </div>  
                        </form>
                    </x-guest-layout>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>




