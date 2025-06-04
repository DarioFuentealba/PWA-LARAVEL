<div class="relative min-h-[500px]">

  <div class="relative z-10 flex items-end justify-center min-h-[500px] py-12 top-40">
    <div class="max-w-sm w-full bg-white rounded shadow-lg">
      <img class="w-full" src="{{ $image ?? 'romana.png' }}" alt="{{ $textoImagen ?? 'Imagen' }}">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">{{ $title ?? 'Titulo'}}</div>
        <p class="text-gray-700 text-base">{{ $content ?? 'Contenido'}}</p>
      </div>
      <div class="px-6 pt-4 pb-2">
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
      </div>
    </div>
  </div>

</div>