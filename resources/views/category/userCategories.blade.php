@extends('layout')

@section('content')
    <x-titulo.titulo>Categorías de {{ Auth::user()->name }} 
        <x-personajeDecorativo src="images/personajesDecorativos/granjera.png" alt="granjera" class="w-16 h-16 inline-block mr-2 align-middle" />
    </x-titulo.titulo>

    <h1 class="text-2xl font-bold mb-4">Mis Categorías</h1>

    <a href="{{ url('/post/create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-800">
        Crear nuevo post
    </a>

    @forelse($posts as $post)
    <div>
        <x-tarjeta.tarjeta>
            <x-slot name="title">{{ $post->title }}</x-slot>
            <x-slot name="image">{{ $post->poster }}</x-slot>
            <x-slot name="content">{{ $post->content }}</x-slot>
        </x-tarjeta.tarjeta>
    </div>

    @empty
        <br><br><p>No tenés categorías.</p>
    @endforelse
@endsection
