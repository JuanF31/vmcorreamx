@csrf
<!-- Nombre -->
<div>
    <x-label for="name" :value="__('Nombre')" />
    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $user->name)" required autofocus />
</div>

{{-- Apellido Paterno --}}
<div class="mt-4">
    <x-label for="lastname_d" :value="__('Apellido Paterno')" />
    <x-input id="lastname_d" class="block mt-1 w-full" type="text" name="lastname_d" :value="old('lastname_d', $user->lastname_d)" required autofocus />
</div>

{{-- Apellido Materno --}}
<div class="mt-4">
    <x-label for="lastname_m" :value="__('Apellido Materno')" />
    <x-input id="lastname_m" class="block mt-1 w-full" type="text" name="lastname_m" :value="old('lastname_m', $user->lastname_m)" required autofocus />
</div>

{{-- Nombre de usuario --}}
<div class="mt-4">
    <x-label for="username" :value="__('Nombre de usuario')" />  
    <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username', $user->username)" required autofocus />
</div>

{{-- Nombre de usuario --}}
<div class="mt-4">
    <x-label for="position" :value="__('Puesto')" />  
    <x-input id="position" class="block mt-1 w-full" type="text" name="position" :value="old('position', $user->position)" required autofocus />
</div>

<!-- Email Address -->
<div class="mt-4">
    <x-label for="email" :value="__('Email')" />
    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $user->email)" required />
</div>

<!-- Lada + Teléfono -->
<div class="mt-4">
    <select name="lada" id="lada">
        <option disabled selected>--Seleccion--</option>
        <option {{ (old('lada', $user->lada) == "mx" || old('lada', $user->lada) == "+52") ? "selected" : "" }} value="mx">MX (+52)</option>
        <option {{ (old('lada', $user->lada) == "usa"|| old('lada', $user->lada) == "+1") ? "selected" : "" }} value="usa">USA (+1)</option>
    </select>

    <x-label for="phone_number" :value="__('Teléfono')" />
    <x-input id="phone_number" class="block mt-1 w-full" type="tel" name="phone_number" :value="old('phone_number', $user->phone_number)" required />
</div>

<!-- Linkedin -->
<div class="mt-4">
    <x-label for="url_linkedin" :value="__('LinkedIn')" />
    <x-input id="url_linkedin" class="block mt-1 w-full" type="text" name="url_linkedin" :value="old('url_linkedin', $user->url_linkedin)" required />
</div>

<!-- Departamento -->
<div class="mt-4">
    <x-label for="department_id" :value="__('Departamento')" />
    <select name="department_id" id="department_id">
        <option disabled selected>--Seleccion--</option>
        @foreach ($departments as $name => $id)
            <option {{ old("department_id", $user->department_id) == $id ? "selected" : "" }} value="{{ $id }}">{{ $name }}</option>
        @endforeach
    </select>
</div>

<!-- Grado de estudios -->
<div class="mt-4">
    <x-label for="degree_study_id" :value="__('Grado de estudios')" />
    <select name="degree_study_id" id="degree_study_id">
        <option disabled selected>--Seleccion--</option>
        @foreach ($degree_studies as $name => $id)
            <option {{ old("degree_study_id", $user->degree_study_id) == $id ? "selected" : "" }} value="{{ $id }}">{{ $name }}</option>
        @endforeach
    </select>
</div>
<!-- Genero -->
<div class="mt-4">
    <x-label for="gender" :value="__('Genero')" />
    <select name="gender" id="gender">
        <option disabled selected>--Seleccion--</option>
        <option {{ old('gender', $user->gender) == "M" ? "selected" : "" }} value="M">Masculino</option>
        <option {{ old('gender', $user->gender) == "F" ? "selected" : "" }} value="F">Femenino</option>
    </select>
</div>

@if (!isset($task))
    <!-- Password -->
    <div class="mt-4">
        <x-label for="password" :value="__('Contraseña')" />
        <x-input id="password" class="block mt-1 w-full" type="password" name="password" autocomplete="new-password" />
    </div>                                
@endif

@if (isset($task) && $task == "edit")
    <label for="profile_avatar">Imagen</label>
    <input type="file" class="form-control" name="profile_avatar" id="profile_avatar">
@endif

<div class="flex items-center justify-end mt-4">
    <x-button class="ml-4">
        {{ __('Enviar') }}
    </x-button>
</div>