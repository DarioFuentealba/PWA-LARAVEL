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
    

    <img 
        src="{{ asset('images/bordeDecorativo/' . ($user?->borde ?? 'default.png')) }}" 
        alt="{{ $alt }}" 
        class="w-10 h-10 rounded-full object-cover border border-[#f4f1ee] bg-[#c2b280]"
    />
</div>
