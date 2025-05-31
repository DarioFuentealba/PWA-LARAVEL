@extends('layout')

@section('content')
<x-titulo.titulo>Crear post</x-titulo.titulo>

<h1 class="text-2xl font-bold mb-4">Crear Nuevo Post</h1>

<form method="POST" action="{{ url('/category/store') }}" class="space-y-4">
    @csrf

    <div>
        <label class="block font-semibold">Título</label>
        <input type="text" name="title" class="w-full border px-2 py-1">
    </div>

    <div>
        <label class="block font-semibold">Poster</label>
        <input type="text" name="poster" class="w-full border px-2 py-1">
    </div>

    <div>
        <label class="block font-semibold">Habilitado</label>
        <select name="habilitated" class="w-full border px-2 py-1">
            <option value="1">Sí</option>
            <option value="0">No</option>
        </select>
    </div>

    <div>
        <label class="block font-semibold">Contenido</label>
        <textarea name="content" class="w-full border px-2 py-1"></textarea>
    </div>

    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-800">
        Crear
    </button>
</form>
@endsection