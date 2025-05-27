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

            {{$slot}}

        </div>
    </nav>

    <div class="p-6">
        @yield('content')
    </div>
</body>
</html>
