@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <div class="font-medium">
                <i class="fa-solid fa-triangle-exclamation"></i>
                {{ __('Oops! Algo salio mal.') }}
            </div>
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
@endif
