@extends('layouts.app')

@section('content')

    <x-home-hero/>
    <x-easy-steps/>
    <x-fastcars-products/>
    <x-why-get-funded/>
    <x-watch-video/>
    <x-easy-cash-advantage/>
    <x-blog-posts/>
    <x-fast-cars-portal/>
    <x-testimonials/>
    <x-newsletter/>
    <x-latest-blogs/>

    {{-- @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif --}}
@endsection