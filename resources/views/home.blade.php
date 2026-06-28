@extends('layouts.app')

@section('title', 'Rooster Pizzeria and Grill — Auténtica Pizza a la Leña')

@section('content')

    {{-- HERO --}}
    <section id="inicio" class="relative hero-fire text-white">
        <div class="relative max-w-4xl mx-auto px-6 py-32 md:py-44 text-center">
           
          
        </div>
    </section>

    {{-- MENU --}}
    <section id="menu" class="bg-slate-50 py-24">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto">
                <h2 class="font-display font-bold text-3xl md:text-4xl text-ink">Nuestro Menú</h2>
                <p class="mt-4 text-slate-500">
                    Todas nuestras pizzas están hechas con masa fresca preparada diariamente
                    y horneadas en nuestro horno de leña tradicional
                </p>
            </div>

            <div class="mt-14 grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($pizzas as $pizza)
                    <article class="bg-white rounded-xl overflow-hidden shadow-sm border border-slate-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                        {{-- TODO: sustituir por fotografía real de la pizza --}}
                        <img src="{{ $pizza['image'] }}" alt="Pizza {{ $pizza['name'] }}" loading="lazy"
                             class="w-full h-56 object-cover">
                        <div class="p-6">
                            <div class="flex items-baseline justify-between gap-3">
                                <h3 class="font-display font-bold text-lg text-ink">{{ $pizza['name'] }}</h3>
                                <span class="font-display font-bold text-brand-600">&euro;{{ $pizza['price'] }}</span>
                            </div>
                            <p class="mt-2 text-sm text-slate-500 leading-relaxed">{{ $pizza['desc'] }}</p>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- NOSOTROS / HISTORIA --}}
    <section id="nosotros" class="bg-white py-24">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-start">

            <div>
                <h2 class="font-display font-bold text-3xl md:text-4xl text-ink">Nuestra Historia</h2>

                <div class="mt-6 space-y-5 text-slate-600 leading-relaxed">
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
                            <span class="flex-none w-12 h-12 rounded-xl bg-brand-50 text-brand-600 flex items-center justify-center">
                                <x-dynamic-component :component="'icon.' . $feature['icon']" class="w-6 h-6" />
                            </span>
                            <div>
                                <h3 class="font-display font-bold text-ink">{{ $feature['title'] }}</h3>
                                <p class="text-sm text-slate-500">{{ $feature['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="relative pb-10 lg:pb-16">
                {{-- TODO: sustituir por fotos reales del local y la masa artesanal --}}
                <img src="/images/Identidad ROOSTER5.jpg" alt="Interior del restaurante"
                     loading="lazy" class="w-full h-80 md:h-96 object-cover rounded-2xl shadow-md">
            </div>
        </div>
    </section>

    {{-- CONTACTO / VISITANOS --}}
    <section id="contacto" class="bg-slate-50 py-24">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">
            <h2 class="font-display font-bold text-3xl md:text-4xl text-ink">Visítanos</h2>
            <p class="mt-4 text-slate-500">Estamos aquí para servirte</p>

            <div class="mt-14 grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($contactInfo as $info)
                    <div class="bg-white rounded-xl p-8 text-center shadow-sm border border-slate-100">
                        <span class="inline-flex w-14 h-14 rounded-full bg-brand-50 text-brand-600 items-center justify-center mb-4">
                            <x-dynamic-component :component="'icon.' . $info['icon']" class="w-6 h-6" />
                        </span>
                        <h3 class="font-display font-bold text-ink">{{ $info['title'] }}</h3>
                        <p class="mt-2 text-sm text-slate-500 leading-relaxed">
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
