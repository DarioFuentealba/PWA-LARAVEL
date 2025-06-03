@props(['src', 'alt' => '', 'class' => '', 'tooltip' => null])

<img 
    class="{{ $class }} items-center p-1 self-center box-content rounded-full object-cover hover:drop-shadow-[0_0_4px_#c2b280] transition duration-300" 
    src="{{ asset($src) }}" 
    alt="{{ $alt }}" 
    @if($tooltip) title="{{ $tooltip }}" @endif
/>
