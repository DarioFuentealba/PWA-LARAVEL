<nav class="bg-[#0d1b2a] p-4 relative">
    <input type="checkbox" id="menu-toggle" class="hidden peer" />

    <!-- Contenedor principal -->
    <div class="flex justify-between items-center md:justify-start md:space-x-6">
        <!-- Logo -->
        <a href="/" class="flex-shrink-0">
            <x-logo.logo src="images/logo/logo5.png" alt="Logo de la página" class="w-20 h-20" />
        </a>

        <!-- Botones visibles en escritorio -->
        <div class="hidden md:flex md:flex-row md:space-x-4 ml-auto">
            @php
                ob_start();
            @endphp

            <x-botones.boton-header texto="Inicio" onclick="window.location.href='{{ url('/') }}'" />

            @guest
                <x-botones.boton-header texto="Registrarse" onclick="window.location.href='{{ url('/register') }}'" />
                <x-botones.boton-header texto="Login" onclick="window.location.href='{{ url('/login') }}'" />
            @else
                <x-dropdownMenu.dropdownMenu texto="Perfil">
                    <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-[#c2b280] hover:bg-[#1a2638] hover:[text-shadow:0_0_4px_#c2b280,0_0_8px_#c2b280]">Ver Perfil</a>
                    <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-[#c2b280] hover:bg-[#1a2638] hover:[text-shadow:0_0_4px_#c2b280,0_0_8px_#c2b280]">Editar/Eliminar Perfil</a>
                </x-dropdownMenu.dropdownMenu>

                <x-botones.boton-header 
                    texto="Logout" 
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                </x-botones.boton-header>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>

                <!-- Favoritos -->
                <x-botones.boton-header texto="Favoritos" onclick="window.location.href='{{ url('/favorites') }}'"></x-botones.boton-header>
                
                <x-botones.boton-header texto="Mis Categorías" onclick="window.location.href='{{ url('/category/userCategories') }}'" />
            @endguest

            <x-botones.boton-header texto="Categorías" onclick="window.location.href='{{ url('/category') }}'" />

            @php
                $menuContent = ob_get_clean();
                echo $menuContent;
            @endphp
        </div>

        <!-- Ícono hamburguesa -->
        <label for="menu-toggle" class="text-white md:hidden cursor-pointer">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </label>
    </div>

    <!-- Fondo transparente (20% izquierda) -->
    <label for="menu-toggle"
           class="fixed top-0 left-0 h-full w-1/5  bg-opacity-50 z-40 hidden peer-checked:block md:hidden cursor-pointer">
    </label>

    <!-- Menú móvil (80% derecha) -->
    <div class="fixed top-0 right-0 h-screen w-4/5 bg-[#0d1b2a] transform translate-x-full peer-checked:translate-x-0 transition-transform
    duration-300 z-50 flex-col space-y-4 p-6 pt-24 md:hidden">
        <!-- Botón cerrar -->
        <label for="menu-toggle" class="text-white text-right text-2xl cursor-pointer mb-4">×</label>

        {!! $menuContent !!}
    </div>
</nav>

