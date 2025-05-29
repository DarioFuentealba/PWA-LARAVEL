@props([
    'src',
    'alt' => '',
    'link' => '#',
])

<a href="{{ $link }}" target="_blank" rel="noopener noreferrer">
    <div class="bg-[#c2b280] border border-[#c2b280]/20 rounded-full p-1 w-10 h-10 flex items-center justify-center hover:scale-110 transition duration-300 hover:drop-shadow-[0_0_4px_#c2b280]">
        <img src="{{ $src }}" alt="{{ $alt }}" class="w-6 h-6 object-contain" />
    </div>
</a>
