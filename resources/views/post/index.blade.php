@extends('layout')

@section('content')
    <x-titulo.titulo>Categorías generales</x-titulo.titulo>

    <h1 class="text-2xl font-bold mb-4">Lista de Posts</h1>

    <ul class="space-y-2 mt-4">
        @foreach($posts as $post)
            <li>
                <a href="{{ url('/category/show/' . $post->id) }}" class="text-blue-600 hover:underline">
                    {{ $post->title }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
