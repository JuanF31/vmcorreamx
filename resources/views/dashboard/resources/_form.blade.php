@csrf
<!-- Nombre -->
<div>
    <x-label for="name" :value="__('Nombre')" />
    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $resource->name)" required autofocus />
</div>


{{-- <div>
    <x-label for="banner" :value="__('Banner')"/>
    <x-input id="banner" class="block mt-1 w-full" type="file" name="banner" :value="old('banner')" autofocus  />
</div> --}}

@forelse ($departments as $department)
    <input type="checkbox" id="{{ $department->slug }}" name="id_department[]" value="{{ $department->id }}"> 
    <label for="{{ $department->slug }}">{{ $department->name }}</label>
@empty
    <p>No hay departamentos</p>
@endforelse

<div class="flex items-center justify-end mt-4">
    <x-button class="ml-4">
        {{ __('Enviar') }}
    </x-button>
</div>