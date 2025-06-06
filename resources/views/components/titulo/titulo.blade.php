{{--<h1 class="text-[#5C5C5C] text-3xl font-bold mt-4 text-center font-sans:'Instrument Sans">{{ $slot }}</h1>--}}
<h1 {{ $attributes->merge(['class' => 'text-[#5C5C5C] text-3xl font-bold mt-4 text-center font-sans: Instrument Sans']) }}> {{ $slot }} </h1>
