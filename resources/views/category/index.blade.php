@extends('layout')

@section('content')
    <x-titulo.titulo>Posts generales
        <x-personajeDecorativo src="images/personajesDecorativos/dionisio.png" alt="dionisio" class="w-16 h-16 inline-block mr-2 align-middle" />
    </x-titulo.titulo>

    <h1 class="text-2xl font-bold mb-4 ml-56">Lista de Posts</h1>

    <ul class="space-y-2 mt-4">
        @foreach($posts as $post)
            <div> 
            <a href="{{ url('/post/show/' . $post->id) }}">
                <x-post.post :post="$post" />
            </a>
        </div>
        @endforeach
    </ul>
@endsection
