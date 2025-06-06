@extends('layout')

@section('content')
    <x-titulo.titulo>Mostrar post 
        <x-personajeDecorativo src="images/personajesDecorativos/guerrero.png" alt="guerrero" class="w-16 h-16 inline-block mr-2 align-middle" />
    </x-titulo.titulo>

    <h1 class="text-3xl font-bold mb-2">{{ $post->title }}</h1>
    <p class="text-gray-700 mb-4">{{ $post->content }}</p>

    <a href="{{ url('/post/edit/' . $post->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Editar
    </a>

    <form method="POST" action="{{ url('/post/delete/' . $post->id) }}" class="inline-block ml-2">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-600 hover:bg-red-800 text-white px-4 py-2 rounded">
            Eliminar
        </button>
    </form>
@endsection
