<div class="mb-6">
    <label for="title" class="block mb-2 text-sm font-medium text-dark-900 dark:text-dark-300">Título</label>
    <input type="title" id="title" class="border border-gray-300 text-dark-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-blue-600 dark:placeholder-black-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
</div>
<div class="mb-6">
    <label for="department_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark-400">Departamento</label>
    <select name="department_id" id="department_id" class="border border-gray-300 text-dark-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-blue-600 dark:placeholder-black-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        <option disabled selected>-- Seleccione --</option>
        @foreach ($departments as $name => $id)
            <option {{ old("department_id", $advertisement->department_id) == $id ? "selected" : "" }} value="{{ $id }}">{{ $name }}</option>
        @endforeach
    </select>
</div>


<div class="mb-6">
    <label class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300" for="file_input">Imagen</label>
    <input class="border border-gray-300 text-dark-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-blue-600 dark:placeholder-black-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500" aria-describedby="file_input_help" id="file_input" type="file">
    <p class="mt-1 text-sm text-black-500 dark:text-black-300" id="file_input_help">PNG, JPG, JPEG ó GIF (MAX. 800x400px).</p>
</div>


<div class="mb-6">
    <label for="content" class="block mb-2 text-sm font-medium text-dark-900 dark:text-dark-300">Contenido</label>
    <textarea class="border border-gray-300 text-dark-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-blue-600 dark:placeholder-black-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500" required name="content" id="content"></textarea>
</div>
<button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Guardar</button>