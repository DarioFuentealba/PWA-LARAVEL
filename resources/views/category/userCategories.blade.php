@extends('layout')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Mis Categorías</h1>

    @forelse($posts as $post)
        <div class="bg-white p-4 shadow mb-2 rounded">
            <h2 class="text-xl">{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
        </div>
    @empty
        <p>No tenés categorías.</p>
    @endforelse
@endsection
