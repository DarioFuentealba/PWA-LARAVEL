<button
    onclick="window.history.back()"
    id="irAtras"
    class=" ml-10 fixed bottom-6 left-6 z-50 bg-white border border-radius-[15%] text-black w-48 h-16 rounded-lg shadow-lg flex items-center gap-2 px-4 py-2 hover:drop-shadow-[0_0_8px_#6e1414]"
    title="Ir atrás"
>
    <!-- Imagen del botón -->
    <img 
        src="{{ asset('images/varias/espada1.png') }}" 
        alt="Ir atrás" 
        class="w-20 h-10 object-contain hover:drop-shadow-[0_0_8px_#6e1414]"
    />

    <!-- Texto al lado de la imagen -->
    <span class="text-sm font-semibold hover:drop-shadow-[0_0_8px_#6e1414]">
        Ir atrás
    </span>
</button>
