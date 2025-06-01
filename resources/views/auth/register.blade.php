@extends('layout')

@section('content')

    <x-titulo.titulo>Registrarse 
        <x-personajeDecorativo src="images/personajesDecorativos/herrero.png" alt="Herrero" class="w-16 h-16 inline-block mr-2 align-middle" />
    </x-titulo.titulo>

    <x-guest-layout>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <!-- Borde decorativo -->
            <div class="mt-4">
                <label class="block text-gray-700 font-bold mb-2">Elegí un borde decorativo:</label>

                <div class="flex gap-4">
                    @foreach(['borde1.png', 'borde2.png', 'borde3.png', 'borde4.png', 'borde5.png', 'borde6.png'] as $borde)
                    <label class="cursor-pointer">
                        <input type="radio" name="borde_decorativo" value="{{ $borde }}" class="sr-only"
                            {{ old('borde_decorativo') == $borde ? 'checked' : '' }}>
                        <img src="/images/bordeDecorativo/{{ $borde }}" class="w-24 border-2 rounded hover:border-[#0d1b2a]">
                    </label>
                    @endforeach
                </div>
            </div>

            <!-- Avatar -->
            <div class="mt-4">
                <label class="block text-gray-700 font-bold mb-2">Elegí un avatar:</label>

                <div class="flex gap-4">
                    @foreach(['avatar1.png', 'avatar2.png', 'avatar3.png', 'avatar4.png', 'avatar5.png', 'avatar6.png', 'avatar7.png', 'avatar8.png', 'avatar9.png', 'avatar10.png', 'avatar11.png'] as $avatar)
                    <label class="cursor-pointer">
                        <input type="radio" name="avatar" value="{{ $avatar }}" class="sr-only"
                            {{ old('avatar') == $avatar ? 'checked' : '' }}>
                        <img src="/images/avatar/{{ $avatar }}" class="w-24 border-2 rounded hover:border-[#0d1b2a]">
                    </label>
                    @endforeach
                </div>
            </div>


            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#0d1b2a]" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ms-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-guest-layout>

@endsection
