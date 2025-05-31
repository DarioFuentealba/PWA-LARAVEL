@props(['src', 'alt' => '', 'class' => ''])

<img class="{{ $class }} items-center p-1 self-center box-content" 
    src="{{ asset($src) }}"
    alt="{{ $alt }}" />
