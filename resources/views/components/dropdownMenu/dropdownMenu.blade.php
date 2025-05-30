<div class="relative inline-block text-left">
    <div>
        <button type="button" onclick="toggleDropdown()" class="inline-flex justify-center w-full rounded-md px-4 py-2 bg-[#0d1b2a] text-white hover:bg-[#0d1b2a] focus:outline-none focus:ring">
            Perfil
            <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>
    </div>

    <div id="dropdownMenu" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-[#0d1b2a] ring-1 ring-black ring-opacity-5 hidden z-50">
        <div class="py-1 text-gray-800" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
            <a href="{{ route('profile.show') }}" class="block px-4 py-2 hover:bg-[#0d1b2a]" role="menuitem">Ver Perfil</a>
            <a href="{{ route('profile.edit') }}" class="block px-4 py-2 hover:bg-[#0d1b2a]" role="menuitem">Editar/Eliminar Perfil</a>
        </div>
    </div>
</div>

@push('scripts')
<script>
    function toggleDropdown() {
        const menu = document.getElementById('dropdownMenu');
        menu.classList.toggle('hidden');
    }

    window.addEventListener('click', function(e) {
        const button = document.querySelector('button[onclick="toggleDropdown()"]');
        const menu = document.getElementById('dropdownMenu');
        if (!button.contains(e.target) && !menu.contains(e.target)) {
            menu.classList.add('hidden');
        }
    });
</script>
@endpush
