<div class="relative w-64 mt-2">
  <!-- Contenedor de la tarjeta (queda debajo) -->
  <div class="flex items-end justify-center ">
    <div class="bg-white rounded-lg shadow-md overflow-hidden h-[400px] flex flex-col">
      <div class="h-[70%]">
      <img class="w-full h-full object-cover min-w-[220px] max-w-[220px] min-h-[280px] max-h-[280px]" src="images/tarjetas/{{ $image ?? 'romana.png' }}" alt="{{ $textoImagen ?? 'Imagen' }}">
      </div>
      <div class="h-[30%] px-4 py-2 flex flex-col justify-between">
        <div class="font-bold text-sm mb-1">{{ $title ?? 'Titulo'}}</div>
        <p class="text-gray-700 text-base">{{ $content ?? 'Contenido'}}</p>
        <div >
       <a 
   class="cursor-pointer inline-block bg-[#c2b280] hover:bg-[#a99454] justify-center text-white font-bold py-2 px-4 rounded text-center">
   Ver posts
</a>
      </div>
      </div>
    </div>
  </div>
</div>
