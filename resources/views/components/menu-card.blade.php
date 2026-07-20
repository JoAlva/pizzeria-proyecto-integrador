@props(['name', 'desc', 'image'])

<article class="bg-white rounded-xl overflow-hidden shadow-sm border border-slate-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
    <img src="{{ $image }}" alt="{{ $name }}" loading="lazy" class="w-full h-56 object-cover">
    <div class="p-6">
        <div class="flex items-start justify-between gap-3">
            <h3 class="font-display font-bold text-lg text-ink">{{ $name }}</h3>
            <div class="text-right shrink-0">
                {{ $slot }}
            </div>
        </div>
        <p class="mt-2 text-sm text-slate-500 leading-relaxed">{{ $desc }}</p>
    </div>
</article>
