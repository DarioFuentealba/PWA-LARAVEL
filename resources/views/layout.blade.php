<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Sitio Web</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen flex flex-col bg-cover bg-center  text-[#5C5C5C]" style="background-image: url('{{ asset('images/fondos/fondoMarmol.jpg') }}')">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <div class="relative flex-grow min-h-screen">
        <x-header.header></x-header.header>
        <x-columnaAntorchas.columnaAntorchas src="images/varias/antorcha.png" ></x-columnaAntorchas.columnaAntorchas>
        <main class="relative z-10 p-6 pl-24 pr-24">
                <div class="absolute top-0 bottom-0 left-0 w-40 pointer-events-none"
                    style="background-image: url('{{ asset('images/varias/columna2.png') }}');
                            background-repeat: no-repeat;
                            background-position: left center;
                            background-size: contain;
                            z-index: 0;">
                </div>
            <div class="absolute top-0 bottom-0 right-0 w-40 pointer-events-none"
                style="background-image: url('{{ asset('images/varias/columna1.png') }}');
                        background-repeat: no-repeat;
                        background-position: right center;
                        background-size: contain;
                        z-index: 0;">
            </div>
        @yield('content')
        </main>

    </div>

    <x-botones.boton-ir-arriba></x-botones.boton-ir-arriba>
    <x-footer.footer></x-footer.footer>

    @stack('scripts') {{-- Así se insertan correctamente los scripts que defini con @push --}}

</body>
</html>



