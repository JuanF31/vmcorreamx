@csrf
<!-- Nombre -->
<div>
    <x-label for="name" :value="__('Nombre')" />
    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $department->name)" required autofocus />
</div>

<div>
    <x-label for="icon" :value="__('Icono')"/>
    <x-input id="icon" class="block mt-1 w-full" type="file" name="icon" :value="old('icon')" autofocus  />
</div>
                
<div class="flex items-center justify-end mt-4">
    <x-button class="ml-4">
        {{ __('Enviar') }}
    </x-button>
</div>