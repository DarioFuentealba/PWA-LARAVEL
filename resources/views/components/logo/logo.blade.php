@props(['src', 'alt' => '', 'class' => ''])

<img class="{{ $class }} items-center p-1 self-center box-content rounded-full object-cover hover:drop-shadow-[0_0_4px_#c2b280] transition duration-300" 
    src="{{ asset($src) }}"
    alt="{{ $alt }}" />
