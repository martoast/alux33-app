{{-- ============================== MODELOS DISPONIBLES ============================== --}}
@php
    // Modelos editables. 'plano' = índice en $lightbox (Vista Arriba = distribución).
    // TODO: confirmar "vista a la playa" y "primer nivel" para todas las unidades antes de absolutizar.
    $modelos = [
        [
            'nombre' => 'Modelo Fuego',
            'estado' => 'Consultar', // Disponible · Apartado · Vendido · Consultar
            'img' => 'alux-fuego-playa.jpg',
            'plano' => 0,
            'cta' => 'Consultar Modelo Fuego',
            'specs' => ['1 habitación', '1 baño', 'Desde 48.48 m² hasta 53.54 m²', 'Vista a la playa*', 'Primer nivel*'],
        ],
        [
            'nombre' => 'Modelo Agua',
            'estado' => 'Consultar',
            'img' => 'alux-agua-playa.jpg',
            'plano' => 2,
            'cta' => 'Consultar Modelo Agua',
            'specs' => ['1 habitación', '1 baño', 'Desde 48.48 m² hasta 53.54 m²', 'Vista a la playa*', 'Primer nivel*'],
        ],
        [
            'nombre' => '2 Habitaciones',
            'estado' => 'Consultar',
            'img' => 'alux-2hab-sala.jpg',
            'plano' => 4,
            'cta' => 'Ver distribución',
            'specs' => ['2 habitaciones', '2 baños', '107.08 m²', 'Vista a la playa*'],
        ],
        [
            'nombre' => '3 Habitaciones',
            'estado' => 'Consultar',
            'img' => 'alux-3hab-sala.jpg',
            'plano' => 7,
            'cta' => 'Ver distribución',
            'specs' => ['3 habitaciones', '2 baños', '107.08 m²', 'Vista a la playa*'],
        ],
    ];

    // Lightbox: planos (Vista Arriba) + interiores por modelo.
    // TODO: agregar planos oficiales de 2 y 3 habitaciones cuando existan (hoy abren sus interiores).
    $lightbox = [
        ['src' => asset('images/alux-plano-fuego.jpg'),   't' => 'Modelo Fuego — distribución (render ilustrativo)'],
        ['src' => asset('images/alux-fuego-interna.jpg'), 't' => 'Modelo Fuego — interior (render ilustrativo)'],
        ['src' => asset('images/alux-plano-agua.jpg'),    't' => 'Modelo Agua — distribución (render ilustrativo)'],
        ['src' => asset('images/alux-agua-interna.jpg'),  't' => 'Modelo Agua — interior (render ilustrativo)'],
        ['src' => asset('images/alux-2hab-sala.jpg'),     't' => '2 habitaciones — sala (render ilustrativo)'],
        ['src' => asset('images/alux-2hab-cocina.jpg'),   't' => '2 habitaciones — cocina (render ilustrativo)'],
        ['src' => asset('images/alux-2hab-recamara.jpg'), 't' => '2 habitaciones — recámara (render ilustrativo)'],
        ['src' => asset('images/alux-3hab-sala.jpg'),     't' => '3 habitaciones — sala (render ilustrativo)'],
        ['src' => asset('images/alux-3hab-recamara.jpg'), 't' => '3 habitaciones — recámara (render ilustrativo)'],
        ['src' => asset('images/alux-3hab-estancia.jpg'), 't' => '3 habitaciones — estancia (render ilustrativo)'],
    ];
@endphp

<section id="modelos" class="bg-sand-50 py-24 lg:py-32"
    x-data="gallery(@js(collect($lightbox)))"
    @keydown.escape.window="open = false"
    @keydown.arrow-right.window="open && next()"
    @keydown.arrow-left.window="open && prev()">
    <div class="mx-auto max-w-7xl px-6 lg:px-10">
        <div class="reveal-group max-w-2xl">
            <p class="eyebrow text-wood-500">Modelos</p>
            <h2 class="display mt-5 text-4xl font-light text-ink sm:text-5xl">Espacios para vivir, descansar o <span class="accent-italic">invertir</span></h2>
            <p class="mt-4 text-lg leading-relaxed text-ink-soft">Conoce las configuraciones disponibles y solicita información actualizada sobre superficies, niveles, vistas y precios.</p>
        </div>

        <div class="mt-14 grid gap-8 md:grid-cols-2">
            @foreach ($modelos as $m)
                <article class="reveal group flex flex-col overflow-hidden rounded-3xl bg-white shadow-lg shadow-ink/5 ring-1 ring-ink/5">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/' . $m['img']) }}" alt="{{ $m['nombre'] }} — render ilustrativo" loading="lazy"
                            class="aspect-[16/10] w-full object-cover transition-transform duration-[1.2s] ease-out group-hover:scale-105">
                        <span class="absolute left-5 top-5 rounded-full bg-caribe-950/70 px-4 py-1.5 text-xs font-medium text-sand-50 backdrop-blur-sm">{{ $m['estado'] }}</span>
                        <span class="absolute right-4 top-5 rounded-full bg-caribe-950/60 px-3 py-1 text-[0.55rem] font-medium uppercase tracking-wider text-sand-50 backdrop-blur-sm">Render</span>
                    </div>
                    <div class="flex grow flex-col p-8">
                        <h3 class="display text-3xl font-light text-ink">{{ $m['nombre'] }}</h3>
                        <ul class="mt-5 grid grid-cols-2 gap-x-6 gap-y-2.5">
                            @foreach ($m['specs'] as $spec)
                                <li class="flex items-start gap-2 text-sm text-ink-soft">
                                    <svg class="mt-1 h-3.5 w-3.5 shrink-0 text-wood-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.7 5.3a1 1 0 0 1 0 1.4l-7.5 7.5a1 1 0 0 1-1.4 0L3.3 9.7a1 1 0 1 1 1.4-1.4l3.3 3.3 6.8-6.8a1 1 0 0 1 1.4 0z" clip-rule="evenodd"/></svg>
                                    <span>{{ $spec }}</span>
                                </li>
                            @endforeach
                        </ul>
                        <div class="mt-auto flex flex-col gap-3 pt-7 sm:flex-row">
                            <button type="button" @click="show({{ $m['plano'] }})" id="plano-{{ $loop->index }}"
                                class="eyebrow flex-1 rounded-full bg-ink px-6 py-3 text-center text-[0.65rem] text-sand-50 transition-colors hover:bg-wood-500">{{ $m['cta'] }}</button>
                            <a href="#contacto"
                                class="eyebrow flex flex-1 items-center justify-center rounded-full border border-ink/20 px-6 py-3 text-[0.65rem] text-ink transition-colors hover:border-ink hover:bg-ink hover:text-sand-50">Consultar disponibilidad</a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>

        <p class="reveal mt-8 text-center text-xs text-ink-soft/70">*Vista y nivel indicados según información proporcionada, sujetos a confirmación por unidad. Superficies, distribuciones y acabados sujetos a cambio sin previo aviso.</p>
    </div>

    @include('partials.lightbox')
</section>
