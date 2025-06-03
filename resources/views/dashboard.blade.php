@extends('layout')

@section('content')

<div class="relative min-h-[500px]">

    {{-- Imagen del borde decorativo elegida por el usuario --}}
    <img src="/images/varias/{{ Auth::user()->borde_decorativo ?? 'default.png' }}" 
        alt="Borde decorativo"
        class="absolute top-0 left-0 w-full h-[160%] object-contain z-50 pointer-events-none">

    <x-titulo.titulo>
        Bienvenido {{ Auth::user()->name }} 
        <x-personajeDecorativo src="images/personajesDecorativos/afrodita.png" alt="afrodita" class="w-16 h-16 inline-block mr-2 align-middle" />
    </x-titulo.titulo>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="relative z-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
