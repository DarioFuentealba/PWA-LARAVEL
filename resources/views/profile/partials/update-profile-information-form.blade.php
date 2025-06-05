<section>
    <header>
        <h2 class="text-lg font-medium text-[#0d1b2a]">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm [#0d1b2a]">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-[#0d1b2a]">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-[#0d1b2a] hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#0d1b2a]">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <!-- Avatar -->
        <div>
            <div class="col-span-6 sm:col-span-4 p-4 sm:p-8 bg-[#c2b280] shadow sm:rounded-lg">
                <label for="borde" class="text-lg font-medium text-[#0d1b2a] block">
                    Elegí tu avatar:
                </label>
                <div class="flex gap-4">
                    @foreach(['borde1.png', 'borde2.png', 'borde3.png', 'borde4.png', 'borde5.png', 'borde6.png'] as $borde)
                    <label class="cursor-pointer relative group">
                        <input type="radio" name="borde" value="{{ $borde }}"
                            class="absolute opacity-0 peer"
                            {{ old('borde', Auth::user()->borde ?? '') === $borde ? 'checked' : '' }}>
                        <img src="{{ asset('images/bordeDecorativo/' . $borde) }}"
                        class="w-24 border-4 rounded-full transition peer-checked:border-[#0d1b2a] group-hover:border-[#0d1b2a]">
                    </label>
                    @endforeach
                </div>
            </div>
        </div>

{{--
        <div>
            <div class="col-span-6 sm:col-span-4 p-4 sm:p-8 bg-[#c2b280] shadow sm:rounded-lg">
                <label for="avatar" class="text-lg font-medium text-[#0d1b2a] block">
                    Elegí tu avatar:
                </label>

                <div class="flex gap-4">
                    @foreach(['avatar1.png', 'avatar2.png', 'avatar3.png', 'avatar4.png', 'avatar5.png', 'avatar6.png', 'avatar7.png', 'avatar8.png', 'avatar9.png', 'avatar10.png', 'avatar11.png'] as $avatar)
                        <label class="cursor-pointer relative group">
                            <input type="radio" name="avatar" value="{{ $avatar }}" class="absolute opacity-0 peer"
                            {{ old('avatar', Auth::user()->avatar ?? '') === $avatar ? 'checked' : '' }}>
                            <img src="{{ asset('images/avatar/' . $avatar) }}" class="border-2 rounded transition peer-checked:border-[#0d1b2a] border-transparent hover:border-[#0d1b2a]">
                        </label>
                    @endforeach
                </div>
            </div>
        </div>--}}

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-[#0d1b2a]"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
