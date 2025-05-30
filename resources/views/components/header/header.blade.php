    <nav class="bg-[#0d1b2a] p-4 flex justify-between">
        <a href="/">
            <x-logo.logo src="images/logo/logo5.png" alt="Logo de la página" class="w-20 h-20"/>
        </a>
        <div class="flex space-x-4">
            <x-botones.boton-header texto="Inicio" onclick="window.location.href='{{ url('/') }}'" ></x-botones.boton-header>

            @guest
                <x-botones.boton-header texto="Registrarse" onclick="window.location.href='{{ url('/register') }}'"></x-botones.boton-header>
                <x-botones.boton-header texto="Login" onclick="window.location.href='{{ url('/login') }}'"></x-botones.boton-header>

            @else
                <!-- Perfil -->
                <!-- Dropdown Perfil -->
                <x-dropdownMenu.dropdownMenu texto="Perfil">
                    <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-[#c2b280] hover:bg-[#1a2638] hover:[text-shadow:0_0_4px_#c2b280,0_0_8px_#c2b280]" role="menuitem">Ver Perfil</a>
                    <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-[#c2b280] hover:bg-[#1a2638] hover:[text-shadow:0_0_4px_#c2b280,0_0_8px_#c2b280]" role="menuitem">Editar/Eliminar Perfil</a>
                </x-dropdownMenu.dropdownMenu>

                <!-- Boton para cerrar sesion -->
<x-botones.boton-header 
    texto="Logout" 
    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
</x-botones.boton-header>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
    @csrf
</form>

                <!-- Categorias del usuario -->
                <x-botones.boton-header texto="Mis Categorías" onclick="window.location.href='{{ url('/category/userCategories') }}'"></x-botones.boton-header>
            @endguest

            <!-- Boton para ver las categorias de todos -->
            <x-botones.boton-header texto="Categorías" onclick="window.location.href='{{ url('/category') }}'"></x-botones.boton-header>

        </div>
    </nav>
