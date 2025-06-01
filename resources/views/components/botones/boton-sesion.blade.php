@props(['texto', 'onclick' => null])

<div
    @if($onclick) onclick="{{ $onclick }}" @endif
    class="px-5 py-2 text-sm bg-[#c2b280] text-black text-opacity-60 rounded hover:text-opacity-100 transition cursor-pointer"

>
    {{ $texto }}
</div>
