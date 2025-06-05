@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <li class="bg-[#f4f1ee] w-fit rounded-md">{{ $message }}</li>
        @endforeach
    </ul>
@endif
