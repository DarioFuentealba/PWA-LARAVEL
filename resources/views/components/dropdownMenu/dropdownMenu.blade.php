@props(['texto' => 'Perfil'])

<div class="relative inline-block text-left">
    <!-- Botón personalizado -->
    <div onclick="toggleDropdown()" class="px-8 py-4 items-center p-2 bg-transparent self-center box-content rounded-2xl cursor-pointer">
        <h1 class="text-[#c2b280] font-mono mx-auto font-bold transition duration-300 text-[1.8rem] [text-shadow:0_0_2px_#c2b280] hover:[text-shadow:0_0_4px_#c2b280,0_0_8px_#c2b280] flex items-center justify-center gap-2">
            {{ $texto }}
            <svg id="dropdownIcon" class="h-5 w-5 text-[#c2b280] transition-transform duration-300 [text-shadow:0_0_2px_#c2b280] hover:[text-shadow:0_0_4px_#c2b280,0_0_8px_#c2b280]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </h1>
    </div>

    <!-- Menú desplegable -->
    <div id="dropdownMenu" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-[#0d1b2a] ring-1 ring-black ring-opacity-5 hidden z-50">
        <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
            {{ $slot }}
        </div>
    </div>
</div>

@once
@push('scripts')
<script>
    function toggleDropdown() {
        const menu = document.getElementById('dropdownMenu');
        const icon = document.getElementById('dropdownIcon');
        const isHidden = menu.classList.contains('hidden');

        // Mostrar u ocultar menú
        menu.classList.toggle('hidden');

        // Rotar flecha según estado del menú
        if (isHidden) {
            icon.classList.add('rotate-180');
        } else {
            icon.classList.remove('rotate-180');
        }
    }

    // Cerrar menú al hacer clic fuera
    window.addEventListener('click', function(e) {
        const trigger = document.querySelector('[onclick="toggleDropdown()"]');
        const menu = document.getElementById('dropdownMenu');
        const icon = document.getElementById('dropdownIcon');

        if (!trigger.contains(e.target) && !menu.contains(e.target)) {
            menu.classList.add('hidden');
            icon.classList.remove('rotate-180');
        }
    });
</script>
@endpush
@endonce
