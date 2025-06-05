@props(['texto', 'class' => '', 'onclick' => null])

<div 
    @if($onclick) onclick="{{ $onclick }}" @endif
    class="font-sans:'Instrument Sans px-8 py-4 items-center p-2 bg-transparent self-center box-content rounded-2xl cursor-pointer {{ $class }}"
>
    <h1 class="text-[#c2b280] font-mono mx-auto font-bold transition duration-300 text-[1.8rem] [text-shadow:0_0_2px_#c2b280] hover:[text-shadow:0_0_4px_#c2b280,0_0_8px_#c2b280] font-sans:'Instrument Sans">
        {{ $texto }}
    </h1>
</div>
