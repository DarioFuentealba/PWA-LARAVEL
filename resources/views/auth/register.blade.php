@extends('layout')

@section('content')

    <x-titulo.titulo>Registrarse 
        <x-personajeDecorativo src="images/personajesDecorativos/herrero.png" alt="Herrero" class="w-16 h-16 inline-block mr-2 align-middle" />
    </x-titulo.titulo>

    <x-guest-layout>
        <form method="POST" action="{{ route('register') }}" class="mt-6 space-y-6">
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
            <div class="flex gap-4">
                @foreach(['borde1.png', 'borde2.png', 'borde3.png', 'borde4.png', 'borde5.png', 'borde6.png'] as $borde)
                    <label class="cursor-pointer relative group">
                        <input type="radio" name="borde" value="{{ $borde }}"
                            class="absolute opacity-0 peer"
                            {{ old('borde') == $borde ? 'checked' : '' }}>
                        <img src="{{ asset('images/bordeDecorativo/' . $borde) }}"
                            class="w-24 border-4 rounded transition peer-checked:border-[#0d1b2a] group-hover:border-[#0d1b2a]">
                    </label>
                @endforeach
            </div>

            <!-- Avatar -->
            <div class="flex gap-4">
                @foreach(['avatar1.png', 'avatar2.png', 'avatar3.png', 'avatar4.png', 'avatar5.png', 'avatar6.png', 'avatar7.png', 'avatar8.png', 'avatar9.png', 'avatar10.png', 'avatar11.png'] as $avatar)
                    <label class="cursor-pointer relative group">
                        <input type="radio" name="avatar" value="{{ $avatar }}"
                            class="absolute opacity-0 peer"
                            {{ old('avatar') == $avatar ? 'checked' : '' }}>
                        <img src="{{ asset('images/avatar/' . $avatar) }}"
                            class="w-24 border-4 rounded transition peer-checked:border-[#0d1b2a] group-hover:border-[#0d1b2a]">
                    </label>
                @endforeach
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

{{--@extends('layout')

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
                <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6 gap-4">
                    @foreach(['borde1.png', 'borde2.png', 'borde3.png', 'borde4.png', 'borde5.png', 'borde6.png'] as $borde)
                        <x-borde 
                            src="/images/bordeDecorativo/{{ $borde }}" 
                            :size="120" 
                            :height="80" 
                            :checked="old('borde') == $borde" />
                    @endforeach
                </div>
            </div>

            <!-- Avatar -->
            <div class="mt-4">
                <label class="block text-gray-700 font-bold mb-2">Elegí un avatar:</label>
                <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6 gap-4">
                    @foreach(['avatar1.png', 'avatar2.png', 'avatar3.png', 'avatar4.png', 'avatar5.png', 'avatar6.png', 'avatar7.png', 'avatar8.png', 'avatar9.png', 'avatar10.png', 'avatar11.png'] as $avatar)
                        <x-avatar 
                            src="/images/avatar/{{ $avatar }}" 
                            :size="96" 
                            :checked="old('avatar') == $avatar" />
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

@endsection--}}

