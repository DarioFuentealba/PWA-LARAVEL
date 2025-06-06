@extends('layout')

@section('content')
<div class="max-w font-sans:'Instrument Sans">
    <x-titulo.titulo>Crear Nuevo Post
        <x-personajeDecorativo src="images/personajesDecorativos/reina.png" alt="Herrero" class="w-16 h-16 inline-block mr-2 align-middle" />
    </x-titulo.titulo>

    <x-guest-layout>
        <div class="max-w-6xl justify-center relative">
            <form method="POST" action="{{ url('/post/store') }}" class="space-y-4">
                @csrf
                <div>
                    <label class="text-[#0d1b2a] block font-semibold">Autor {{ $user->name }}</label>
                    <input type="text" name="user_id" class="hidden px-2 py-1 border-[#0d1b2a] focus:border-[#0d1b2a] focus:ring-[#0d1b2a] rounded-md shadow-sm mt-1 block w-full" value="{{ $user->id }}">
                </div>

                <div>
                    <label class="text-[#0d1b2a] block font-semibold">Título</label>
                    <input type="text" name="title" class="px-2 py-1 border-[#0d1b2a] focus:border-[#0d1b2a] focus:ring-[#0d1b2a] rounded-md shadow-sm mt-1 block w-full">
                </div>

                <div>
                    <label class="text-[#0d1b2a] block font-semibold">Poster</label>
                    <input type="text" name="poster" class="px-2 py-1 border-[#0d1b2a] focus:border-[#0d1b2a] focus:ring-[#0d1b2a] rounded-md shadow-sm mt-1 block w-full">
                </div>

                <div>
                    <label class="text-[#0d1b2a] block font-semibold">Habilitado</label>
                    <select name="habilitated" class="px-2 py-1 border-[#0d1b2a] focus:border-[#0d1b2a] focus:ring-[#0d1b2a] rounded-md shadow-sm mt-1 block w-full">
                        <option value="1">Sí</option>
                        <option value="0">No</option>
                    </select>
                </div>

                <div>
                    <label class="text-[#0d1b2a] block font-semibold">Categoria</label>
                    <select name="category_id" class="px-2 py-1 border-[#0d1b2a] focus:border-[#0d1b2a] focus:ring-[#0d1b2a] rounded-md shadow-sm mt-1 block w-full">
                        @foreach ($category as $cat)
                        <option value="{{ $cat['id'] }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="text-[#0d1b2a] block font-semibold">Contenido</label>
                    <textarea name="content" class="px-2 py-1 border-[#0d1b2a] focus:border-[#0d1b2a] focus:ring-[#0d1b2a] rounded-md shadow-sm mt-1 block w-full"></textarea>
                </div>

                <button type="submit" class="bg-[#0d1b2a] text-[#f4f1ee] px-4 py-2 rounded hover:bg-[#f4f1ee] hover:text-[#0d1b2a]">
                    Crear
                </button>
            </form>
        </div>
    </x-guest-layout>
</div>
@endsection