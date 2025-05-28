@props(['src', 'alt' => ''])

<img class="items-center p-1 self-center box-content rounded-full object-cover"
    src="{{ asset($src) }}"
    alt="{{ $alt }}" />
