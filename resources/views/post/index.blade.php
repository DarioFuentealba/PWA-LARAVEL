@extends('layout')

@section('content')
    <div class="min-h-[500px] ml-10">
        <x-titulo.titulo>Posts de {{ $categories->name }}</x-titulo.titulo>

        <h1 class="text-2xl font-bold mb-4 ml-56">Lista de Posts</h1>

        <div class="space-y-2 mt-4">
            @foreach ($posts as $post)
                @if ($post->habilitated)
                    <div>
                        <a href="{{ url('/post/show/' . $post->id) }}">
                            <x-post.post :post="$post" />
                        </a>
                    </div>
                @endif
            @endforeach
            <div class="mt-6">
                {{ $posts->links() }}
            </div>
        </div>
    @endsection
