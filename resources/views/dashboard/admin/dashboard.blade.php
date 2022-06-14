@extends('dashboard.layout')

@section('title')
    <title>MundoVMC · Dashboard</title>
@endsection

@section('header')
    <p class="text-xl">Dashboard</p>
@endsection

@section('content')
<div class="flex flex-wrap items-center justify-center">
    <div class="container max-w-lg bg-white rounded dark:bg-gray-800 shadow-lg transform duration-200 easy-in-out m-12">
        <div class="h-2/4 overflow-hidden">
            <img class="w-full rounded-t"
            src="{{ asset('assets/banners/' . Auth::user()->department->banner) }}"
            alt="Photo by aldi sigun on Unsplash" />
        </div>
        <div class="flex justify-start px-5 -mt-12 mb-5">
            <span clspanss="block relative h-32 w-32">
            <img alt="Photo by aldi sigun on Unsplash"
                src="{{ asset('assets/profiles/' . Auth::user()->profile_avatar ) }}"
                class="mx-auto object-cover rounded-full h-24 w-24 bg-white p-1" />
            </span>
        </div>
        <div class="">
            <div class="px-7 mb-8">
            <h2 class="text-3xl font-bold text-green-800 dark:text-gray-300">
                @switch(Auth::user()->degree_study->slug)
                    @case('ingeniero')
                        Ing.   
                    @break
                    @case('licenciado')
                        Lic.   
                    @break
                    @case('contador-publico')
                        C.P. 
                    @break
                @endswitch
                {{ Auth::user()->name . ' ' . Auth::user()->lastname_d . ' ' . Auth::user()->lastname_m }}
            </h2>
            <p class="text-gray-400 mt-2 dark:text-gray-400">{{ Auth::user()->position }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
