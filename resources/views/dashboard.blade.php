@extends('layout')

@section('content')

<div class="relative min-h-[500px]">

    {{-- Imagen del borde decorativo elegida por el usuario 
    <img src="/images/varias/{{ Auth::user()->borde ?? 'default.png' }}" 
        alt="Borde decorativo"
        class="absolute top-0 left-0 w-full h-[160%] object-contain z-50 pointer-events-none">
--}}
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
            <div class="bg-green-500 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-2xl">
                    <p>Esta es la pagina principal de nuestro blog    </p>  <br>
                    <p>Desde aqui podras ver tus blog y editarlos</p><br>
                    <p>También conocer y leer los blog de los demas integrantes de MitoloBlog</p><br>

                </div>
            </div>
        </div>
    </div>

</div>

@endsection
