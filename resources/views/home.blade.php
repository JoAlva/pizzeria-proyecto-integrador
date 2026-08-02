@extends('layouts.app')

@section('title', 'Rooster Pizzeria and Grill — Auténtica Pizza a la Leña')

@section('content')

    {{-- HERO --}}
    <section id="inicio" class="relative hero-fire text-white">
        <div class="relative max-w-4xl mx-auto px-6 py-32 md:py-44 text-center flex items-center justify-center">
            <img src="/images/RoosterLogo1.png" alt="Rooster Pizza &amp; Grill"
                 class="w-full max-w-md md:max-w-lg">
        </div>
    </section>

    {{-- MENU --}}
    <section id="menu" class="bg-[#0d0d0d] py-24">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto">
                <h2 class="font-display font-bold text-3xl md:text-4xl text-white">Nuestro Menú</h2>
                <p class="mt-4 text-slate-300">
                    Todas nuestras pizzas están hechas con masa fresca preparada diariamente
                    y horneadas en nuestro horno de leña tradicional
                </p>
            </div>

            {{-- PIZZAS --}}
            <div class="mt-14 grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($pizzas as $pizza)
                    <x-menu-card :name="$pizza['name']" :desc="$pizza['desc']" :image="$pizza['image']">
                        <span class="font-display font-bold text-brand-600 block">&#8353;{{ $pizza['price_large'] }}</span>
                        <span class="text-xs text-slate-400">Grande</span>
                        @if ($pizza['price_personal'])
                            <span class="font-display font-bold text-brand-600 block mt-2">&#8353;{{ $pizza['price_personal'] }}</span>
                            <span class="text-xs text-slate-400">Personal</span>
                        @endif
                    </x-menu-card>
                @endforeach
            </div>

            {{-- CARNES --}}
            <div class="mt-24">
                <div class="text-center max-w-2xl mx-auto">
                    <h3 class="font-display font-bold text-2xl text-white">Carnes</h3>
                    <p class="mt-2 text-sm text-slate-300">Acompañadas de 2 guarniciones a elección</p>
                </div>
                <div class="mt-10 grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                    @foreach ($meats as $meat)
                        <x-menu-card :name="$meat['name']" :desc="$meat['desc']" :image="$meat['image']">
                            <span class="font-display font-bold text-brand-600">&#8353;{{ $meat['price'] }}</span>
                        </x-menu-card>
                    @endforeach
                </div>
                <p class="mt-6 text-sm text-slate-300 text-center">
                    Guarniciones: {{ implode(' · ', $sides) }}
                </p>
            </div>

            {{-- PASTAS --}}
            <div class="mt-24">
                <div class="text-center max-w-2xl mx-auto">
                    <h3 class="font-display font-bold text-2xl text-white">Pastas</h3>
                </div>
                <div class="mt-10 grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                    @foreach ($pastas as $pasta)
                        <x-menu-card :name="$pasta['name']" :desc="$pasta['desc']" :image="$pasta['image']">
                            <span class="font-display font-bold text-brand-600">&#8353;{{ $pasta['price'] }}</span>
                        </x-menu-card>
                    @endforeach
                </div>

                <div class="mt-10 bg-[#161616] rounded-xl border border-white/10 shadow-sm p-8">
                    <h4 class="font-display font-bold text-white">Arma tu Pasta</h4>
                    <div class="mt-4 grid sm:grid-cols-3 gap-6">
                        @foreach ($pastaBuilder as $category => $options)
                            <div>
                                <span class="block text-sm font-bold text-white border-b-2 border-white pb-2 mb-2">{{ $category }}</span>
                                <ul class="text-sm text-slate-300 space-y-1">
                                    @foreach ($options as $option)
                                        <li>{{ $option }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endforeach
                    </div>
                    <p class="mt-4 text-xs text-slate-400">* Precio varía según selección</p>
                </div>
            </div>

            {{-- BEBIDAS --}}
            <div class="mt-24">
                <div class="text-center max-w-2xl mx-auto">
                    <h3 class="font-display font-bold text-2xl text-white">Bebidas</h3>
                </div>
                <div class="mt-10 max-w-2xl mx-auto bg-[#161616] rounded-xl border border-white/10 shadow-sm divide-y divide-white/10">
                    @foreach ($drinks as $drink)
                        <div class="flex items-center justify-between px-6 py-4">
                            <span class="text-white font-medium">{{ $drink['name'] }}</span>
                            <span class="font-display font-bold text-brand-600">&#8353;{{ $drink['price'] }}</span>
                        </div>
                    @endforeach
                </div>
 </div>
        </div>
    </section>

    {{-- NOSOTROS / HISTORIA --}}
    <section id="nosotros" class="bg-[#0d0d0d] py-24">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-start">

            <div>
                <h2 class="font-display font-bold text-3xl md:text-4xl text-white">Nuestra Historia</h2>

                <div class="mt-6 space-y-5 text-slate-300 leading-relaxed">
                    <p>
                        Fabian: Desde pequeño los animales viven presentes en mi familia y siempre han sido
                        nuestros mejores amigos. Puntualmente mi mascota era un Gallo que me seguía a todas
                        partes, de aquí nace el nombre Rooster (gallo en inglés) ya que una serie de momentos y
                        eventos me dieron señales de que un amigo de infancia (mi gallo) podría ser el símbolo
                        principal del nombre de mi negocio, en honor a momentos increíbles que viví de niño,
                        combinado con la experiencia maravillosa que quiero que vivan mis clientes aquí, en
                        Rooster Pizza &amp; Grill.
                    </p>
                    <p>
                        Rooster Pizza &amp; Grill es una experiencia gastronómica única, donde combinamos la
                        emoción de saborear una pizza en familia con la tradición de comer deliciosa carne y
                        todo hecho al mejor calor de la leña y el fuego.
                    </p>
                </div>

                <div class="mt-10 space-y-6">
                    @foreach ($features as $feature)
                        <div class="flex items-start gap-4">
                            <span class="flex-none w-12 h-12 rounded-xl bg-brand-600/15 text-brand-500 flex items-center justify-center">
                                <x-dynamic-component :component="'icon.' . $feature['icon']" class="w-6 h-6" />
                            </span>
                            <div>
                                <h3 class="font-display font-bold text-white">{{ $feature['title'] }}</h3>
                                <p class="text-sm text-slate-300">{{ $feature['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="relative pb-10 lg:pb-16">
                {{-- TODO: sustituir por fotos reales del local y la masa artesanal --}}
                <img src="/images/DSC00014.jpg" alt="Interior del restaurante"
                     loading="lazy" class="w-full h-80 md:h-96 object-cover rounded-2xl shadow-md">
            </div>
        </div>
    </section>

    {{-- CONTACTO / VISITANOS --}}
    <section id="contacto" class="bg-[#0d0d0d] py-24">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">
            <h2 class="font-display font-bold text-3xl md:text-4xl text-white">Visítanos</h2>
            <p class="mt-4 text-slate-300">Estamos aquí para servirte</p>

            <div class="mt-14 grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($contactInfo as $info)
                    <div class="bg-[#161616] rounded-xl p-8 text-center shadow-sm border border-white/10">
                        <span class="inline-flex w-14 h-14 rounded-full bg-brand-600/15 text-brand-500 items-center justify-center mb-4">
                            <x-dynamic-component :component="'icon.' . $info['icon']" class="w-6 h-6" />
                        </span>
                        <h3 class="font-display font-bold text-white">{{ $info['title'] }}</h3>
                        <p class="mt-2 text-sm text-slate-300 leading-relaxed">
                            @foreach ($info['lines'] as $line)
                                {{ $line }}@unless ($loop->last) <br> @endunless
                            @endforeach
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
