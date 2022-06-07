<x-app-layout>
    <x-slot name="header">
        <img src="{{ asset('assets/profiles/' . $user->profile_avatar) }}" width="5%" alt="">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tarjeta digital') . ' - ' . $user->name . ' ' . $user->lastname_d . ' ' . $user->lastname_m}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (session('status'))
                        {{ session('status') }}
                    @endif
                    @if (isset($user->profile->digital_card))
                        <img src="{{ asset('assets/digital-cards/' . $user->profile->digital_card)}}" alt="">
                    @else
                        <h1>No hay tarjeta digital asignada a {{ $user->name }}</h1>
                    @endif
                    <x-guest-layout>
                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                
                        <form method="POST" action="{{ route('profile.card.update', $user) }}" enctype="multipart/form-data">
                            <!-- Password -->
                            @csrf
                            <div class="mt-4">
                                <x-label for="digital_card" :value="__('Tarjeta digital')" />
                                <x-input id="digital_card" class="block mt-1 w-full" type="file" name="digital_card" required />
                            </div>  
                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ml-4">
                                    {{ __('Guardar') }}
                                </x-button>
                            </div>
                        </form>
                    </x-guest-layout>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>




