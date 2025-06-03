<footer class="bg-[#0d1b2a] text-[#c2b280] py-2 mt-5">
    <div class="max-w-screen-xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left" > 

            <!-- Columna  izquierda -->
            <div class="flex flex-col justify-center md:items-start items-center text-center md:text-left space-y-1">
                <p class="cursor-default hover:[text-shadow:0_0_4px_#c2b280,0_0_8px_#c2b280]">Desde 2022</p>
                <p class="cursor-default hover:[text-shadow:0_0_4px_#c2b280,0_0_8px_#c2b280]">Neuquen, Argentina</p>
                <p class="cursor-default text-[#c2b280] font-semibold hover:[text-shadow:0_0_4px_#c2b280,0_0_8px_#c2b280]">Blog de unicornios</p>
            </div>

            <!-- Columna centro -->
            <div class="flex flex-col items-center mt-3">
                <div class='flex flex-col items-center w-20'> 
                    <a href="/">
                        <x-logo src="images/logo/logo5.png" alt="Logo de la página" tooltip="Inicio" />
                    </a>
                </div>

                <hr class="w-24 border-t border-[#c2b280]/30 my-4" />

                <div class="flex gap-4 mt-1 ">
                    <div class="flex gap-4 mt-1">
                        <x-icono.icono 
                            src="https://images.icon-icons.com/2428/PNG/512/facebook_black_logo_icon_147136.png"
                            alt="Facebook"
                            link="https://facebook.com"
                        />

                        <x-icono.icono 
                            src="https://images.icon-icons.com/2973/PNG/512/twitter_logo_icon_186904.png"
                            alt="Twitter"
                            link="https://twitter.com"
                        />

                        <x-icono.icono 
                            src="https://images.icon-icons.com/2428/PNG/512/instagram_black_logo_icon_147122.png"
                            alt="Instagram"
                            link="https://instagram.com"
                        />
                    </div>
                </div>
            </div>
        

            <!-- Columna derecha -->
            <div class="flex flex-col items-center md:items-end justify-center space-y-2">
                <p class=" cursor-default hover:[text-shadow:0_0_4px_#c2b280,0_0_8px_#c2b280]">Sobre Nosotros</p>
                <p class="cursor-default hover:[text-shadow:0_0_4px_#c2b280,0_0_8px_#c2b280]">Aviso legal</p>
                <p class="cursor-default hover:[text-shadow:0_0_4px_#c2b280,0_0_8px_#c2b280]">Ayuda</p>
            </div>
        </div>
    </div>

        <div class="mt-5 text-center text-xs text-[#c2b280] hover:[text-shadow:0_0_4px_#c2b280,0_0_8px_#c2b280]">
            <p>&copy; 2025 Blog de unicornios. Todos los derechos reservados</p>
        </div>
    </div>
</footer>
