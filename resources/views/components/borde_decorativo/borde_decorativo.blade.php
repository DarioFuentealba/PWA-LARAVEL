@props(['src', 'alt' => 'Borde decorativo', 'size' => '120', 'height' => '80', 'name' => 'borde'])

<label class="cursor-pointer inline-block">
    <input type="radio" name="{{ $name }}" value="{{ basename($src) }}" class="sr-only" {{ $attributes->get('checked') ? 'checked' : '' }}>
    <img src="{{ $src }}" alt="{{ $alt }}" class="border-2 hover:border-[#0d1b2a]"
        style="width: {{ $size }}px; height: {{ $height }}px; object-fit: contain;">
</label>