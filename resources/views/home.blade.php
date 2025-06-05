@extends('layout')

@section('content')
    <x-titulo.titulo>Bienvenido a mi blog de mitología 
        <x-personajeDecorativo src="images/personajesDecorativos/zeus.png" alt="zeus" class="w-16 h-16 inline-block mr-2 align-middle" />
    </x-titulo.titulo>
    <div class="mb-20 flex flex-wrap justify-center">
    @foreach ($categories as $category)
    
    <div class="relative w-64 ">

    <x-tarjeta.tarjeta>
        <x-slot name="title">Mitología {{ $category['name'] }}</x-slot>
        <x-slot name="image">{{ $category['image'] }}</x-slot>
        <x-slot name="content">{{ $category['content'] }}</x-slot>
    </x-tarjeta.tarjeta>
</div>
    @endforeach
    </div>  
@endsection