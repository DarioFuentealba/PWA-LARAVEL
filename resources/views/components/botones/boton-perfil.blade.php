@props([
    'alt' => 'Avatar',
    'name' => 'borde',
    'texto',
    'class' => '',
    'onclick' => null,
    'imagen' => null,
    'tooltip' => '',
    'user' => null
])

<div
    @if($onclick) onclick="{{ $onclick }}" @endif
    @if($tooltip) title="{{ $tooltip }}" @endif
    class="flex items-center justify-center gap-4 px-4 py-2 text-black text-opacity-60 rounded-full hover:text-opacity-100 transition cursor-pointer {{ $class }}"
>
    <div class="flex flex-col items-center text-[#c2b280] font-mono font-bold transition duration-300 text-sm leading-tight text-center [text-shadow:0_0_2px_#c2b280] hover:[text-shadow:0_0_4px_#c2b280,0_0_8px_#c2b280]">
        <p>Bienvenido</p>
        <p>{{ $user?->name }}</p>
    </div>

    <img 
        src="{{ asset('images/bordeDecorativo/' . ($user?->borde ?? 'default.png')) }}" 
        alt="{{ $alt }}" 
        class="w-10 h-10 rounded-full object-cover border border-[#f4f1ee] bg-[#c2b280]"
    />
</div>
