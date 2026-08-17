<header class="sticky top-0 z-50 bg-black/95 backdrop-blur border-b border-black">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 h-20 flex items-center justify-between gap-6">

        <a href="{{ route('home') }}#inicio" class="flex items-center shrink-0">
            <span class="font-display font-extrabold text-base md:text-xl tracking-tight text-white leading-none">
                <span class="text-red-600">R</span>O<span class="relative inline-block"><img src="/images/RoosterCrest.png" alt="" class="absolute -top-3 left-0 -translate-x-[35%] h-4 md:h-5 w-auto max-w-none object-contain pointer-events-none">O</span>STER PIZZERIA AND GRILL
            </span>
        </a>

        <nav class="hidden lg:flex items-center gap-8 font-medium text-white">
            <a href="#inicio" class="hover:text-brand-500 transition-colors">Inicio</a>
            <a href="#menu" class="hover:text-brand-500 transition-colors">Menú</a>
            <a href="#nosotros" class="hover:text-brand-500 transition-colors">Nosotros</a>
            <a href="#contacto" class="hover:text-brand-500 transition-colors">Contacto</a>
        </nav>

        <a href="https://wa.me/50688421596"
           class="hidden md:inline-flex items-center gap-2 bg-brand-600 hover:bg-brand-700 text-white text-sm font-semibold px-5 py-2.5 rounded-full transition-colors shrink-0">
            <x-icon.phone class="w-4 h-4" />
            Llamar Ahora
        </a>

        <button id="nav-toggle" type="button" aria-label="Abrir menú" aria-expanded="false" aria-controls="mobile-nav"
                class="lg:hidden p-2 -mr-2 text-white">
            <x-icon.menu class="w-7 h-7" />
        </button>
    </div>

    <div id="mobile-nav" class="hidden lg:hidden border-t border-black bg-black px-6 py-5 space-y-4">
        <a href="#inicio" class="block font-medium text-white">Inicio</a>
        <a href="#menu" class="block font-medium text-white">Menú</a>
        <a href="#nosotros" class="block font-medium text-white">Nosotros</a>
        <a href="#contacto" class="block font-medium text-white">Contacto</a>
        <a href="tel:+50688421596"
           class="flex items-center justify-center gap-2 bg-brand-600 text-white font-semibold px-5 py-3 rounded-full">
            <x-icon.phone class="w-4 h-4" />
            Llamar Ahora
        </a>
    </div>
</header>

<script>
    document.getElementById('nav-toggle')?.addEventListener('click', function () {
        const panel = document.getElementById('mobile-nav');
        const expanded = this.getAttribute('aria-expanded') === 'true';
        panel.classList.toggle('hidden');
        this.setAttribute('aria-expanded', String(!expanded));
    });

    document.querySelectorAll('#mobile-nav a').forEach((link) => {
        link.addEventListener('click', () => document.getElementById('mobile-nav').classList.add('hidden'));
    });
</script>
