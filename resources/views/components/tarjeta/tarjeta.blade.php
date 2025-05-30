<div class="relative min-h-[500px]">

  <!-- Imagen superpuesta absoluta arriba -->
  <img src="/images/varias/borde.png" alt="Borde decorativo"
        class="absolute top-0 left-0 w-full h-[130%] object-contain z-50 pointer-events-none">

  <!-- Contenedor de la tarjeta (queda debajo) -->
  <div class="relative z-10 flex items-end justify-center min-h-[500px] py-12 top-32">
    <div class="max-w-sm w-full bg-white rounded shadow-lg">
      <img class="w-full" src="images/tarjetas/{{ $image }}" alt="{{ $textoImagen ?? 'Imagen' }}">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">{{ $title }}</div>
        <p class="text-gray-700 text-base">{{ $content }}</p>
      </div>
      <div class="px-6 pt-4 pb-2">
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
      </div>
    </div>
  </div>

</div>


{{--<div>
  <!-- Imagen con posición y z-index alto -->
  <img src="/images/varias/borde.png" alt="Borde decorativo" 
        class="w-full relative z-50">
  
  <div class="relative z-10 bg-[url('/images/varias/borde.png')] bg-no-repeat bg-center bg-contain min-h-[500px] flex items-end justify-center py-12">
    <!-- Tarjeta -->
    <div class="max-w-sm w-full bg-white rounded shadow-lg">
      <img class="w-full" src="images/tarjetas/{{ $image }}" alt="{{ $textoImagen ?? 'Imagen' }}">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">{{ $title }}</div>
        <p class="text-gray-700 text-base">{{ $content }}</p>
      </div>
      <div class="px-6 pt-4 pb-2">
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
      </div>
    </div>
  </div>
</div>--}}




{{--<div class="max-w-sm rounded overflow-hidden shadow-lg">
  <img class="w-full" src='images/tarjetas/{{ $image }}' alt="{{ $textoImagen ?? 'Imagen' }}">
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2">{{ $title }}</div>
    <p class="text-gray-700 text-base">
        {{ $content }}    </p>
  </div>
  <div class="px-6 pt-4 pb-2">
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
  </div>
</div>--}}