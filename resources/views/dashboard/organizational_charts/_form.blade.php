@csrf
<!-- Nombre -->
<div>
    <x-label for="title" :value="__('Titulo')" />
    <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title', $organizational->title)" required autofocus />
</div>

<div>
    <x-label for="uri_flipbook" :value="__('Organigrama (iframe)')"/>
    <x-input id="uri_flipbook" class="block mt-1 w-full" type="text" name="uri_flipbook" :value="old('uri_flipbook', $organizational->uri_flipbook)" required autofocus />
</div>

<div>
    <x-label for="uri_flipbook_cover" :value="__('Portada organigrama (iframe)')"/>
    <x-input id="uri_flipbook_cover" class="block mt-1 w-full" type="text" name="uri_flipbook_cover" :value="old('uri_flipbook_cover', $organizational->uri_flipbook_cover)" required autofocus />
</div>

<div class="flex items-center justify-end mt-4">
    <x-button class="ml-4">
        {{ __('Enviar') }}
    </x-button>
</div>