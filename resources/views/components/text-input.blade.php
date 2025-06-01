@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 focus:border-[#0d1b2a] focus:ring-[#0d1b2a] rounded-md shadow-sm']) }}>
