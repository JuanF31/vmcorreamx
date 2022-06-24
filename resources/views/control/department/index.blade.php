@extends('layouts.master')

@section('title') 
    <title>Mundo VMC · Departamento de {{$department->name}}</title>
@endsection

@section('content')
    <!-- header -->
    <header class="header__container">
        @include('fragment._menu-compuesto-responsive')
        
        <div class="flex__box" data-aos="fade-up">
            {!! ($department->banner) ? "<img src='" . asset('assets/banners/' . $department->banner) . "' alt='Banner" . $department->name . "'>" : '' !!}
        </div>
    </header>
    <!-- End header -->
    <div class="container pt-5 pb-5" data-aos="fade-up">
        <div class="row pt-2">
          @forelse ($department->user as $user)
            @if ($user->rol != 'admin')
              <div class="card-section col-sm-12 col-md-6 col-xl-6 p-3">
                <div class="card card-profile">
                    <div class="card-content">
                      <div class="image">
                          <img src="{{asset('assets/profiles/' . $user->profile_avatar)}}" alt="">
                      </div>
          
                      <div class="media-icons">
                        <a href="{{ route('user.show', $user) }}"><i class='fa-solid fa-address-card'></i></a>

                        {!! ($user->url_linkedin) ? "<a href='" . $user->url_linkedin . "' target='_blank'><i class='fa-brands fa-linkedin'></i></a>" : '' !!}

                        {!! ($user->lada && $user->phone_number) ? "<a href='https://wa.me/" . $user->lada . $user->phone_number . "?text=Buen día " . $user->name . ' ' . $user->lastname_d ."' target='_blank'><i class='fa-brands fa-whatsapp'></i></a>" : ''!!} 

                      </div>
          
                      <div class="name-profession">
                        <h4 class="name-profile"><span class="text-blue">{{$user->name . ' '}}</span>{{$user->lastname_d . ' ' . $user->lastname_m}}</h4>
                        <p class="profession">{{ $user->position }}</p>
                        <p class="email-profile"><a class="text-blue" href="mailto:{{$user->email}}">{{ $user->email }}</a></p>
                      </div>
          
                    </div>
                </div>
              </div>
            @endif
          @empty
            <h2>No hay asociados en el departamento de {{ $department->name }}</h2>
          @endforelse
        </div>
    </div>


@endsection
@section('script')
<script src="{{ asset('js/buscador.js') }}"></script>
@endsection






