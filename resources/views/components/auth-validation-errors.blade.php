@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <div class="font-medium text-danger">
                {{ __('Oops! Algo salio mal.') }}
            </div>
            <ul class="mt-3 text-sm text-red fs-4 text">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
@endif
