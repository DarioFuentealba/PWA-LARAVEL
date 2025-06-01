@extends('layout')

@section('content')

    <x-titulo.titulo>Editar / eliminar perfil 
        <x-personajeDecorativo src="images/personajesDecorativos/rey-y-cerbero.png" alt="rey-y-cerbero" class="w-16 h-16 inline-block mr-2 align-middle" />
    </x-titulo.titulo>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Borde decorativo -->
            <div class="col-span-6 sm:col-span-4 p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <label for="borde_decorativo" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Elegí tu borde decorativo:
                </label>

                <div class="flex gap-4">
                    @foreach(['borde1.png', 'borde2.png', 'borde3.png', 'borde4.png', 'borde5.png', 'borde6.png'] as $borde)
                        <label class="cursor-pointer">
                            <input type="radio" name="borde_decorativo" value="{{ $borde }}" class="sr-only"
                                {{ old('borde_decorativo', auth()->user()->borde_decorativo) === $borde ? 'checked' : '' }}>
                            <img src="/images/bordeDecorativo/{{ $borde }}"
                                class="w-24 border-2 rounded hover:border-[#0d1b2a] transition {{ auth()->user()->borde_decorativo === $borde ? 'border-[#0d1b2a]' : 'border-transparent' }}">
                        </label>
                    @endforeach
                </div>
            </div>

            <!-- Avatar -->
            <div class="col-span-6 sm:col-span-4 p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <label for="avatar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Elegí tu avatar:
                </label>

                <div class="flex gap-4">
                    @foreach(['avatar1.png', 'avatar2.png', 'avatar3.png', 'avatar4.png', 'avatar5.png', 'avatar6.png', 'avatar7.png', 'avatar8.png', 'avatar9.png', 'avatar10.png', 'avatar11.png'] as $avatar)
                        <label class="cursor-pointer">
                            <input type="radio" name="borde_decorativo" value="{{ $avatar }}" class="sr-only"
                                {{ old('avatar', auth()->user()->avatar) === $avatar ? 'checked' : '' }}>
                            <img src="/images/avatar/{{ $avatar }}"
                                class="w-24 border-2 rounded hover:border-[#0d1b2a] transition {{ auth()->user()->avatar === $avatar ? 'border-[#0d1b2a]' : 'border-transparent' }}">
                        </label>
                    @endforeach
                </div>
            </div>


            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>

@endsection