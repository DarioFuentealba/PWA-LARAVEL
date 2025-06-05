<nav class="bg-[#0d1b2a] p-4 relative">
    <input type="checkbox" id="menu-toggle" class="hidden peer" />
    <div class="flex justify-between items-center md:justify-start md:space-x-6">
        <a href="/" class="flex-shrink-0">
            <x-logo.logo src="images/logo/logo5.png" alt="Logo de la página" class="w-20 h-20" tooltip="Inicio" />
        </a>
        <div class="hidden md:flex md:flex-row md:space-x-4 w-full items-center">
            @php
                ob_start();
            @endphp

            <div class="flex items-center flex-col md:flex-row md:space-x-4 md:ml-auto space-y-2 md:space-y-0">

                @guest
                    <!-- Registrarse -->
                    <x-botones.boton-sesion  onclick="window.location.href='{{ url('/register') }}'" imagenUrl="https://images.icon-icons.com/3478/PNG/512/register_login_signup_icon_219991.png" tooltip="Registrarse" />
                    <!-- Login -->
                    <x-botones.boton-sesion onclick="window.location.href='{{ url('/login') }}'" imagenUrl="https://images.icon-icons.com/2406/PNG/512/user_account_icon_145918.png"  tooltip="Login" />

                @else
                    <!-- Inicio -->
                    <x-botones.boton-header texto="Inicio" onclick="window.location.href='{{ url('/') }}'" />
                    <!-- Posts Generales -->
                    <x-botones.boton-header texto="Posts Generales" onclick="window.location.href='{{ url('/category') }}'" />
                    <!-- Favoritos -->
                    <x-botones.boton-header texto="Favoritos" onclick="window.location.href='{{ url('/favorites') }}'"></x-botones.boton-header>
                    
                    <!-- Mis posts -->
                    <x-botones.boton-header texto="Mis Posts" onclick="window.location.href='{{ url('/post/userPosts') }}'" />
                    <!-- Perfil -->
                    <x-botones.boton-header texto="Perfil" onclick="window.location.href='{{ route('profile.show') }}'" />
                    <!-- Cerrar sesion -->
                    <x-botones.boton-sesion 
                        imagenUrl="https://images.icon-icons.com/2518/PNG/512/logout_icon_151219.png" tooltip="Logout" 
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    </x-botones.boton-sesion>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                @endguest
            </div>

            @php
                $menuContent = ob_get_clean();
                echo $menuContent;
            @endphp
        </div>

        <label for="menu-toggle" class="text-white md:hidden cursor-pointer">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </label>
    </div>
    <label for="menu-toggle"
        class="fixed top-0 left-0 h-full w-full bg-black bg-opacity-50 z-40 hidden peer-checked:block md:peer-checked:hidden md:hidden cursor-pointer">
    </label>
    <div class="fixed top-0 right-0 h-screen w-4/5 bg-[#0d1b2a] transform translate-x-full peer-checked:translate-x-0 transition-transform
    duration-300 z-50 flex-col space-y-4 p-6 pt-24 md:hidden">
        <label for="menu-toggle" class="text-white text-right text-2xl cursor-pointer mb-4">×</label>

        {!! $menuContent !!}
    </div>
</nav>

