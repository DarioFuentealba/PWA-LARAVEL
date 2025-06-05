<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-[#f4f1ee]">
            {{ __('Eliminar cuenta') }}
        </h2>

        <p class="mt-1 text-sm text-[#f4f1ee]">
            {{ __('Una vez que se elimine su cuenta, todos sus recursos y datos se eliminarán de forma permanente. Antes de eliminar su cuenta, descargue cualquier dato o información que desee conservar..') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Eliminar cuenta') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6 bg-[#6e1414]">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-[#f4f1ee]">
                {{ __('¿Estás seguro de que quieres eliminar tu cuenta?') }}
            </h2>

            <p class="mt-1 text-sm text-[#f4f1ee]">
                {{ __('Una vez que tu cuenta sea eliminada, todos sus recursos y datos serán eliminados permanentemente. Por favor, introduce tu contraseña para confirmar que deseas eliminar tu cuenta de forma permanente.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only border-[#0d1b2a]" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancelar') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Eliminar cuenta') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
