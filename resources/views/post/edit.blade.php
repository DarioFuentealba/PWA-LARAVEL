@extends('layout')

@section('content')
<x-guest-layout>
    <x-titulo.titulo>Editar post</x-titulo.titulo>

    <h1 class="text-2xl font-bold mb-4">Editar Post</h1>

    <form method="POST" action="{{ url('/post/update/' . $post->id) }}" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="text-[#0d1b2a] block font-semibold">Título</label>
            <input type="text" name="title" value="{{ $post->title }}" class="px-2 py-1 border-[#0d1b2a] focus:border-[#0d1b2a] focus:ring-[#0d1b2a] rounded-md shadow-sm mt-1 block w-full">
        </div>

        <div>
            <label class="text-[#0d1b2a] block font-semibold">Poster</label>
            <input type="text" name="poster" value="{{ $post->poster }}" class="px-2 py-1 border-[#0d1b2a] focus:border-[#0d1b2a] focus:ring-[#0d1b2a] rounded-md shadow-sm mt-1 block w-full">
        </div>

        <div>
            <label class="text-[#0d1b2a] block font-semibold">Habilitado</label>
            <select name="habilitated" class="px-2 py-1 border-[#0d1b2a] focus:border-[#0d1b2a] focus:ring-[#0d1b2a] rounded-md shadow-sm mt-1 block w-full">
                <option value="1" {{ $post->habilitated ? 'selected' : '' }}>Sí</option>
                <option value="0" {{ !$post->habilitated ? 'selected' : '' }}>No</option>
            </select>
        </div>

        <div>
            <label class="text-[#0d1b2a] block font-semibold">Contenido</label>
            <textarea name="content" class="px-2 py-1 border-[#0d1b2a] focus:border-[#0d1b2a] focus:ring-[#0d1b2a] rounded-md shadow-sm mt-1 block w-full">{{ $post->content }}</textarea>
        </div>

        <button type="submit" class="bg-[#0d1b2a] text-[#f4f1ee] px-4 py-2 rounded hover:bg-[#f4f1ee] hover:text-[#0d1b2a]">
            Guardar cambios
        </button>
    </form>
</x-guest-layout>
@endsection
