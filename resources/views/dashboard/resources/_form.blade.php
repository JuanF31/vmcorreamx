@csrf
<!-- Nombre -->
<div>
    <x-label for="name_resource" :value="__('Tituo')" />
    <x-input id="name_resource" class="block mt-1 w-full" type="text" name="name_resource" :value="old('name_resource', $resource->name_resource)" required autofocus />
</div>

<!-- Nombre -->
<div>
    <label for="resource">Recurso</label>
    <input type="file" id="resource" class="block mt-1 w-full" name="resource" autofocus/>
</div>

<!-- Nombre -->
<div>
    <x-label for="published" :value="__('Publicado')" />
    <select name="published" id="published">
        <option disabled selected>--Seleccione--</option>
        <option {{ old('published', $resource->published) == "yes" ? "selected" : "" }} value="yes">Si</option>
        <option {{ old('published', $resource->published) == "not" ? "selected" : "" }} value="not">No</option>
    </select>
</div>


<div class="flex items-center justify-end mt-4">
    <x-button class="ml-4">
        {{ __('Enviar') }}
    </x-button>
</div>