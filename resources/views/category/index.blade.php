@extends('layout')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Lista de Posts</h1>

    <a href="{{ url('/category/create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-800">
        Crear nuevo post
    </a>

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
