@extends('layout')

@section('content')
    <x-titulo.titulo>Editar post</x-titulo.titulo>

    <h1 class="text-2xl font-bold mb-4">Editar Post</h1>

    <form method="POST" action="{{ url('/category/update/' . $post->id) }}" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block font-semibold">Título</label>
            <input type="text" name="title" value="{{ $post->title }}" class="w-full border px-2 py-1">
        </div>

        <div>
            <label class="block font-semibold">Poster</label>
            <input type="text" name="poster" value="{{ $post->poster }}" class="w-full border px-2 py-1">
        </div>

        <div>
            <label class="block font-semibold">Habilitado</label>
            <select name="habilitated" class="w-full border px-2 py-1">
                <option value="1" {{ $post->habilitated ? 'selected' : '' }}>Sí</option>
                <option value="0" {{ !$post->habilitated ? 'selected' : '' }}>No</option>
            </select>
        </div>

        <div>
            <label class="block font-semibold">Contenido</label>
            <textarea name="content" class="w-full border px-2 py-1">{{ $post->content }}</textarea>
        </div>

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-800">
            Guardar cambios
        </button>
    </form>
@endsection
