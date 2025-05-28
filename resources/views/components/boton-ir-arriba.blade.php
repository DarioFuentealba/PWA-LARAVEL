<button
    onclick="scrollToTop()"
    id="scrollToTopBtn"
    class="fixed bottom-6 right-6 z-50 hidden bg-white border border-black text-black w-24 h-24 rounded-full shadow-lg flex flex-col items-center justify-between p-2"
    title="Ir arriba"
>
    <!-- Imagen del boton -->
    <img src="{{ asset('images/botonIrArriba/tridenteChico.png') }}" alt="Ir arriba" class="w-12 h-12 object-contain mt-1" />

    <!-- Texto dentro del circulo -->
    <span class="text-[10px] mb-1">Ir arriba</span>
</button>

<script>
    //Mostrar u ocultar el boton al hacer scroll
    window.onscroll = function(){
        const btn = document.getElementById("scrollToTopBtn");
        if(document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
            btn.classList.remove("hidden");
        }else{
            btn.classList.add("hidden");
        }
    };

    //Scroll suave hacia arriba
    function scrollToTop(){
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
</script>

