<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Sitio Web</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
    <nav class="bg-blue-600 text-white p-4 flex justify-between">
        <div class="font-bold text-xl">Mi Web</div>
        <div class="space-x-4">
            <a href="/" class="hover:underline">Inicio</a>

            @guest
                <a href="/register" class="hover:underline">Registrarse</a>
                <a href="/login" class="hover:underline">Login</a>
            @else
                <!-- Perfil -->
                <!-- Dropdown Perfil -->
                <div class="relative inline-block text-left">
                    <div>
                        <button type="button" onclick="toggleDropdown()" class="inline-flex justify-center w-full rounded-md px-4 py-2 bg-blue-500 text-white hover:bg-blue-700 focus:outline-none focus:ring">
                            Perfil
                            <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </div>

                    <div id="dropdownMenu" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden z-50">
                        <div class="py-1 text-gray-800" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                            <a href="{{ route('profile.show') }}" class="block px-4 py-2 hover:bg-gray-100" role="menuitem">Ver Perfil</a>
                            <a href="{{ route('profile.edit') }}" class="block px-4 py-2 hover:bg-gray-100" role="menuitem">Editar/Eliminar Perfil</a>
                        </div>
                    </div>
                </div>

                <script>
                    function toggleDropdown() {
                        const menu = document.getElementById('dropdownMenu');
                        menu.classList.toggle('hidden');
                    }

                    //Cierra el menú si se hace clic fuera
                    window.addEventListener('click', function(e) {
                        const button = document.querySelector('button[onclick="toggleDropdown()"]');
                        const menu = document.getElementById('dropdownMenu');
                        if (!button.contains(e.target) && !menu.contains(e.target)) {
                            menu.classList.add('hidden');
                        }
                    });
                </script>

                <!-- Boton para cerrar sesion -->
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="hover:underline">Logout</button>
                </form>

                <!-- Categorias del usuario -->
                <a href="{{ route('user.categories') }}" class="hover:underline">Mis Categorías</a>
            @endguest

            <!-- Botón para ver las categorías de todos -->
            <a href="/category" class="hover:underline">Categorías</a>


        </div>
    </nav>

    <div class="p-6">
        @yield('content')
    </div>
</body>
</html>



