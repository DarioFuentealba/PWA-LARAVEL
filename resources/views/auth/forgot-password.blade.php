@extends('layout')

@section('content')

    <x-titulo.titulo>Recuperar contraseña 
        <x-personajeDecorativo src="images/personajesDecorativos/arpa.png" alt="arpa" class="w-16 h-16 inline-block mr-2 align-middle" />
    </x-titulo.titulo>

    <x-guest-layout>
        <div class="mb-4 text-sm text-[#0d1b2a]">
            {{ __('¿Olvidaste tu contraseña? No hay problema. Solo háznos saber tu dirección de correo electrónico y te enviaremos un enlace de restablecimiento de contraseña que te permitirá elegir una nueva.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label class="text-[#0d1b2a]" for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button>
                    {{ __('Enlace para restablecer la contraseña del correo electrónico') }}
                </x-primary-button>
            </div>
        </form>
    </x-guest-layout>

@endsection