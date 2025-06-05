@props(['src'])

<div>
    <div 
        class="bg-right bg-contain z-50 absolute top-52 bottom-0 right-0 w-40 pointer-events-none bg-repeat-y"
        style="background-image: url('{{ asset($src) }}');"
    >
    </div>
</div>
