@extends('layout')

@section('content')
    <x-titulo.titulo>Categorías de {{ Auth::user()->name }}</x-titulo.titulo>

    <h1 class="text-2xl font-bold mb-4">Mis Categorías</h1>

    <a href="{{ url('/category/create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-800">
        Crear nuevo post
    </a>

    @forelse($posts as $post)
        <div class="bg-white p-4 shadow mb-2 rounded">
            <h2 class="text-xl">{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
        </div>
    @empty
        <br><br><p>No tenés categorías.</p>
    @endforelse
@endsection
