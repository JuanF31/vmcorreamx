@csrf
<!-- Nombre -->
<div>
    <x-label for="title" :value="__('Titulo')" />
    <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title', $directory->title)" required autofocus />
</div>

<div>
    <x-label for="uri_directory" :value="__('Directorio (iframe)')"/>
    <x-input id="uri_directory" class="block mt-1 w-full" type="text" name="uri_directory" :value="old('uri_directory', $directory->uri_directory)" required autofocus />
</div>

<div>
    <x-label for="uri_directory_cover" :value="__('Portada directorio (iframe)')"/>
    <x-input id="uri_directory_cover" class="block mt-1 w-full" type="text" name="uri_directory_cover" :value="old('uri_directory_cover', $directory->uri_directory_cover)" required autofocus />
</div>

<div class="flex items-center justify-end mt-4">
    <x-button class="ml-4">
        {{ __('Enviar') }}
    </x-button>
</div>