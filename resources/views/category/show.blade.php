@extends('layout')

@section('content')
    <h1 class="text-3xl font-bold mb-2">{{ $post->title }}</h1>
    <p class="text-gray-700 mb-4">{{ $post->content }}</p>

    <a href="{{ url('/category/edit/' . $post->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Editar
    </a>
@endsection
