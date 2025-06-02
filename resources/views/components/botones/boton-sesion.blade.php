@props(['onclick' => null, 'imagenUrl'=>null])

<div
    @if($onclick) onclick="{{ $onclick }}" @endif
    class="px-2 py-2 text-sm bg-[#c2b280] text-black text-opacity-60 rounded-full hover:text-opacity-100 transition cursor-pointer"

>
 @if($imagenUrl)
        <img src="{{ $imagenUrl }}" alt="{{ $texto ?? 'Icono' }}" class="w-5 h-5">
    @endif
</div>
