@extends('layout')

@section('content')

    <x-titulo.titulo>Mi perfil 
        <x-personajeDecorativo src="images/personajesDecorativos/poseidon.png" alt="poseidon" class="w-16 h-16 inline-block mr-2 align-middle" />
    </x-titulo.titulo>

    <div class="py-12 cursor-default">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-whiteshadow rounded-lg">
                <div class="flex flex-col lg:flex-row items-center justify-center lg:space-x-6 space-y-6 lg:space-y-0 text-white">
                    <img src="{{ asset('storage/avatars/' . $user->avatar) }}" 
                        alt="Avatar" 
                        class="w-32 h-32 rounded-full object-cover border border-gray-300"/>
                    <div class="space-y-2 text-left">
                        <p><strong>Nombre:</strong> {{ $user->name }}</p>
                        <p><strong>Apellido:</strong> {{ $user->apellido }}</p>
                        <p><strong>Email:</strong> {{ $user->email }}</p>
                    </div>
                </div>
                <div class="mt-6 flex justify-center items-center gap-4">
                    <a href="{{ route('profile.edit') }}" 
                    class="inline-block px-4 py-2 bg-[#c2b280] text-black text-opacity-60 rounded-lg hover:text-opacity-100 transition">
                        Modificar perfil
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
