<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Sitio Web</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen flex flex-col bg-cover bg-center  text-[#5C5C5C]" style="background-image: url('{{ asset('images/fondos/fondoMarmol.jpg') }}')">

    <x-header.header></x-header.header>

    <div class="p-6 flex-grow">
        @yield('content')
    </div>

    <x-botones.boton-ir-arriba></x-botones.boton-ir-arriba>
    <x-footer.footer></x-footer.footer>

    @stack('scripts') {{-- Así se insertan correctamente los scripts que defini con @push --}}

</body>
</html>



