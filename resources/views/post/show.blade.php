@extends('layout')

@section('content')
<div class="min-h-[500px]">
    <div class="  max-w-4xl mx-auto p-6 bg-white rounded shadow-lg mt-10">
        <div class="flex flex-col md:flex-row gap-6">
            <div class="w-64">
                <img src="{{ Str::startsWith($post->poster, ['http://', 'https://']) ? $post->poster : asset('images/tarjetas/' . ($post->poster ?: 'default.png')) }}"  class="w-full h-auto rounded-lg border" alt="imagen Post" >
            </div>
            <div class="flex-1 flex flex-col justify-between">
                <div class="mb-4 cursor-default">
                    <x-titulo.titulo>{{ $post->title }}</x-titulo.titulo>
                </div>
                <div class="mb-6 flex-1">
                    <p class="cursor-default "> Escrito por {{ $post->user->name }} </p>
                    <br>
                    <p class="text-gray-700 mb-4 cursor-default">{{ $post->content }}</p>
                </div>
                <div class="flex justify-end items-center gap-4 mb-4">
                    @auth
                    <form action="{{ route('post.vote') }}" method="POST">
                        @csrf
                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                        <input type="hidden" name="vote" value="1">
                        <button type="submit"
                    class="p-2 rounded-full border {{ ($userVote ?? null) === 1 ? 'bg-green-200' : 'bg-green-50' }} hover:bg-green-100 transition">
                            <img class="w-8 h-8" src="https://images.icon-icons.com/1580/PNG/512/2849826-finger-hand-interaction-interface-like-multimedia_107970.png"/>
                        </button>
                        <span class="text-green-600 font-semibold ml-1">{{ $likes ?? 0 }}</span>
                    </form>

                    <form action="{{ route('post.vote') }}" method="POST">
                        @csrf
                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                        <input type="hidden" name="vote" value="-1">
                        <button type="submit" class="p-2 rounded-full border {{ ($userVote ?? null) === -1 ? 'bg-red-200' : 'bg-red-50' }} hover:bg-red-100 transition">
                            <img class="w-8 h-8" src="https://images.icon-icons.com/1580/PNG/96/2849816-finger-hand-interface-like-multimedia_107969.png"/>
                        </button>
                        <span class="text-red-600 font-semibold ml-1">{{ $dislikes ?? 0 }}</span>
                    </form>
                    @else
                    <span class="text-gray-500">Iniciá sesión para votar</span>
                    @endauth
                </div>
                <!-- Si el usuario esta logueado y este es su post se muestra la edicion-->
                <div class="flex justify-center mt-6 gap-4">
                    @if(Auth::check() && Auth::id() === $post->user_id)
                    <a href="{{ url('/post/edit/' . $post->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Editar
                    </a>

                    <form method="POST" action="{{ url('/post/destroy/' . $post->id) }}" class="inline-block ml-2">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-600 hover:bg-red-800 text-white px-4 py-2 rounded">
                            Eliminar
                        </button>
                    </form>
                    @endif
                </div>
            </div>
        </div>  
    </div>
   
</div>

@endsection
