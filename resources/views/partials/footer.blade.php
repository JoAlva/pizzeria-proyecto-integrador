<footer class="bg-ink text-slate-300">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-16 grid md:grid-cols-3 gap-12">

        <div>
            <a href="#inicio" class="flex items-center">
                <span class="font-display font-extrabold text-white text-base md:text-lg leading-none">
                    <span class="text-red-600">R</span>O<span class="relative inline-block"><img src="/images/RoosterCrest.png" alt="" class="absolute -top-3 left-0 -translate-x-[35%] h-4 md:h-5 w-auto max-w-none object-contain pointer-events-none">O</span>STER PIZZERIA AND GRILL
                </span>
            </a>
            <p class="mt-4 text-sm text-slate-400 max-w-xs">
                Pizza asada a la leña, sabor en cada bocado que das
            </p>
        </div>

        <div>
            <h4 class="text-white font-display font-bold mb-4">Enlaces Rápidos</h4>
            <ul class="space-y-2.5 text-sm">
                <li><a href="#inicio" class="hover:text-white transition-colors">Inicio</a></li>
                <li><a href="#menu" class="hover:text-white transition-colors">Menú</a></li>
                <li><a href="#nosotros" class="hover:text-white transition-colors">Nosotros</a></li>
                <li><a href="#contacto" class="hover:text-white transition-colors">Contacto</a></li>
            </ul>
        </div>

        <div>
            <h4 class="text-white font-display font-bold mb-4">Síguenos</h4>
            <div class="flex gap-1">
                <a href="https://www.instagram.com/roosterpizza_cr?igsh=MTJ5ZnR4eGl6Nm11cQ==" aria-label="Instagram"
                   class="w-10 h-10 rounded-full bg-white/10 hover:bg-brand-600 flex items-center justify-center transition-colors">
                    <x-icon.instagram class="w-4 h-4" />
                </a>
            </div>
        </div>
    </div>

    <div class="border-t border-white/10 py-6 text-center text-sm text-slate-500">
        &copy; {{ date('Y') }} ROOSTER PIZZERIA AND GRILL. Todos los derechos reservados.
    </div>
</footer>
