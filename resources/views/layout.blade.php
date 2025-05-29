<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Sitio Web</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-[f4f1ee] text-[#5C5C5C]">

    <x-header.header></x-header.header>

    <div class="p-6">
        @yield('content')
    </div>

    <x-botones.boton-ir-arriba></x-botones.boton-ir-arriba>
    <x-footer.footer></x-footer.footer>
</body>
</html>



