@extends('layouts.master')

@section('title') 
    <title>Mundo VMC · Departamento de {{$department->name}}</title>
@endsection

@section('content')
    @include('fragment.sidebar')

    <!-- Home section -->
    <div class="seccion__body">
        @include('fragment._header')

        <div class="container profile-page pt-5">
        
            <style>
                .blue {
    color: var(--azul__primario);
}
.m-t-5{
    margin-top: 5px;   
}
.card {
    background: #fff;
    margin-bottom: 30px;
    transition: .5s;
    border: 0;
    border-radius: .1875rem;
    display: inline-block;
    position: relative;
    width: 100%;
    box-shadow: none;
}
.card .body {
    font-size: 14px;
    color: #424242;
    padding: 20px;
    font-weight: 400;
}
.profile-page .profile-header {
    position: relative
}

.profile-page .profile-header .profile-image img {
    border-radius: 50%;
    width: 140px;
    border: 3px solid #fff;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23)
}

.profile-page .profile-header .social-icon a {
    margin: 0 5px
}

.profile-page .profile-sub-header {
    min-height: 60px;
    width: 100%
}

.profile-page .profile-sub-header ul.box-list {
    display: inline-table;
    table-layout: fixed;
    width: 100%;
    background: #eee
}

.profile-page .profile-sub-header ul.box-list li {
    border-right: 1px solid #e0e0e0;
    display: table-cell;
    list-style: none
}

.profile-page .profile-sub-header ul.box-list li:last-child {
    border-right: none
}

.profile-page .profile-sub-header ul.box-list li a {
    display: block;
    padding: 15px 0;
    color: #424242
}
            </style>

            <div class="row">
                @forelse ($department->user as $user)
                    @if ($user->rol != 'admin')
                        <div class="col-lg-6 col-md-12 p-2">
                            <div class="card profile-header shadow">
                                <div class="body">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-12 p-2">
                                            <div class="profile-image float-md-right"> <img src="{{ asset('assets/profiles/' . $user->profile_avatar) }}" alt="">  </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-12">
                                            <h4 class="display-6 m-t-0 m-b-0"><strong class="blue">{{ $user->name }}</strong> {{ $user->lastname_d . ' ' . $user->lastname_m }}</h4>
                                            <span class="job_post fs-4">{{ $user->position }}</span>
                                            <p class="fs-4">
                                                <a class="blue" href="mailto:{{ $user->email }}">{{  $user->email }}</a>
                                            </p>
                                            <p class="fs-2">
                                                <a class="blue" href="{{ route('user.show', $user) }}"><i class="fa-solid fa-id-card"></i></a>
                                                @if ($user->lada && $user->phone_number)
                                                    <a class="blue" href="https://wa.me/{{ $user->lada . $user->phone_number }}?text=Buen día {{ $user->name . ' ' . $user->lastname_d }}" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>               
                                                @endif
                                                @if ($user->url_linkedin)
                                                    <a class="blue" href="{{ $user->url_linkedin }}" target="_blank" ><i class="fa-brands fa-linkedin"></i></a>
                                                @endif
                                            </p>
                                        </div>                
                                    </div>
                                </div>                    
                            </div>
                        </div>
                    @endif
                @empty
                    <h2>No hay asociados en el departamento de {{$department->name}}</h2>
                @endforelse
            </div>
        </div>
        
        @include('fragment.modal_menu')
        {{-- @include('fragment._footer-mundovmc') --}}
    </div>
    <!-- End body -->

    @section('script')
        <script src="{{ asset('js/buscador.js') }}"></script>
    @endsection
@endsection






