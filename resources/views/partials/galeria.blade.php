{{-- ============================== GALERÍA ============================== --}}
@php
    $galeria = [
        ['img' => 'alux-alberca.jpg',       't' => 'Alberca — render ilustrativo', 'span' => 'lg:col-span-2 lg:row-span-2'],
        ['img' => 'alux-fachada.jpg',       't' => 'Fachada — render ilustrativo', 'span' => ''],
        ['img' => 'alux-roof.jpg',          't' => 'Rooftop — render ilustrativo', 'span' => ''],
        ['img' => 'alux-yoga.jpg',          't' => 'Yoga Hall — render ilustrativo', 'span' => ''],
        ['img' => 'alux-poker.jpg',         't' => 'Poker Room — render ilustrativo', 'span' => ''],
        ['img' => 'alux-2hab-cocina.jpg',   't' => 'Interior 2 habitaciones — render ilustrativo', 'span' => 'lg:col-span-2'],
        ['img' => 'alux-3hab-recamara.jpg', 't' => 'Recámara 3 habitaciones — render ilustrativo', 'span' => ''],
        ['img' => 'alux-bc-playa.jpg',      't' => 'Club de playa — experiencia externa', 'span' => ''],
    ];
    $lb = collect($galeria)->map(fn ($e) => ['src' => asset('images/' . $e['img']), 't' => $e['t']])->values();
@endphp

<section id="galeria" class="bg-sand-100 py-24 lg:py-32"
    x-data="gallery(@js($lb))"
    @keydown.escape.window="open = false"
    @keydown.arrow-right.window="open && next()"
    @keydown.arrow-left.window="open && prev()">
    <div class="mx-auto max-w-7xl px-6 lg:px-10">
        <div class="reveal-group max-w-2xl">
            <p class="eyebrow text-wood-500">Galería</p>
            <h2 class="display mt-5 text-4xl font-light text-ink sm:text-5xl">Vive la experiencia <span class="accent-italic">Alux 33</span></h2>
        </div>

        <div class="reveal mt-12 grid auto-rows-[220px] grid-cols-2 gap-4 lg:grid-cols-4">
            @foreach ($galeria as $g)
                <button type="button" @click="show({{ $loop->index }})"
                    class="group relative overflow-hidden rounded-2xl bg-caribe-950 {{ $g['span'] }}">
                    <img src="{{ asset('images/' . $g['img']) }}" alt="{{ $g['t'] }}" loading="lazy"
                        class="h-full w-full object-cover transition-transform duration-[1.2s] ease-out group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-caribe-950/60 via-transparent to-transparent opacity-0 transition-opacity group-hover:opacity-100"></div>
                    <span class="eyebrow absolute bottom-4 left-4 pr-4 text-left text-[0.55rem] text-sand-50 opacity-0 transition-opacity group-hover:opacity-100">{{ $g['t'] }}</span>
                </button>
            @endforeach
        </div>
    </div>

    @include('partials.lightbox')
</section>
