@extends('layout')

@section('content')

    <x-titulo.titulo>Editar / eliminar perfil 
        <x-personajeDecorativo src="images/personajesDecorativos/rey-y-cerbero.png" alt="rey-y-cerbero" class="w-16 h-16 inline-block mr-2 align-middle" />
    </x-titulo.titulo>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-[#0d1b2a] leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-[#c2b280] shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-[#c2b280] shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Borde decorativo -->
            <div class="mt-4">
                <label class="block text-[#0d1b2a] font-bold mb-2">Elegí un borde decorativo:</label>
                <div class="flex flex-wrap gap-4">
                    @foreach(['borde1.png', 'borde2.png', 'borde3.png', 'borde4.png', 'borde5.png', 'borde6.png'] as $borde)
                        <x-borde_decorativo
                            src="{{ asset('images/bordeDecorativo/' . $borde) }}"
                            :checked="auth()->user()->borde === $borde"
                        />
                    @endforeach
                </div>
            </div>

            <!-- Avatar -->

            <div class="p-4 sm:p-8 bg-[#6e1414] shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>

@endsection