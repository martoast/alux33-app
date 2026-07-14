{{-- ============================== EXPERIENCIAS ============================== --}}
@php
    // El club de playa tiene renders propios (experiencia externa — así se etiqueta).
    $bcGallery = collect(['alux-bc-atardecer', 'alux-bc-alberca', 'alux-bc-playa', 'alux-bc-barra', 'alux-bc-restaurante', 'alux-bc-entrada'])
        ->map(fn ($i) => ['src' => asset('images/' . $i . '.jpg'), 't' => 'Club de playa — experiencia externa (render ilustrativo)'])->values();
@endphp

<section id="experiencias" class="bg-sand-100 py-24 lg:py-32"
    x-data="gallery(@js($bcGallery))"
    @keydown.escape.window="open = false"
    @keydown.arrow-right.window="open && next()"
    @keydown.arrow-left.window="open && prev()">
    <div class="mx-auto max-w-7xl px-6 lg:px-10">
        <div class="reveal-group max-w-2xl">
            <p class="eyebrow text-wood-500">Experiencias</p>
            <h2 class="display mt-5 text-4xl font-light text-ink sm:text-5xl">Más allá del <span class="accent-italic">departamento</span></h2>
            <p class="mt-4 text-lg leading-relaxed text-ink-soft">Una propuesta conectada con el mar, la selva y el estilo de vida de la Riviera Maya.</p>
        </div>

        <div class="mt-14 grid gap-6 lg:grid-cols-2">
            {{-- Club de playa — con galería --}}
            <button type="button" @click="show(0)"
                class="reveal group relative overflow-hidden rounded-3xl bg-caribe-950 text-left shadow-lg shadow-ink/5 lg:row-span-3">
                <img src="{{ asset('images/alux-bc-atardecer.jpg') }}" alt="Club de playa — experiencia externa (render ilustrativo)" loading="lazy"
                    class="aspect-[4/3] h-full w-full object-cover transition-transform duration-[1.2s] ease-out group-hover:scale-105 lg:aspect-auto">
                <div class="absolute inset-0 bg-gradient-to-t from-caribe-950/85 via-caribe-950/15 to-transparent"></div>
                <span class="absolute right-4 top-4 rounded-full bg-caribe-950/60 px-3 py-1 text-[0.55rem] font-medium uppercase tracking-wider text-sand-50 backdrop-blur-sm">Experiencia externa</span>
                <div class="absolute inset-x-0 bottom-0 p-8">
                    <p class="eyebrow mb-1 text-[0.55rem] text-sand-50/90 drop-shadow-[0_1px_8px_rgba(7,29,33,0.9)]">Mar</p>
                    <h3 class="display text-3xl text-sand-50 drop-shadow-[0_1px_10px_rgba(7,29,33,0.8)]">Clubes de playa</h3>
                    <p class="mt-2 max-w-md text-sm leading-relaxed text-sand-100/85 drop-shadow-[0_1px_8px_rgba(7,29,33,0.8)]">Consulta los clubes participantes, condiciones de acceso, vigencia, disponibilidad y beneficios incluidos.</p>
                    <span class="mt-3 inline-flex items-center gap-1.5 text-[0.7rem] font-medium text-sand-100/90">
                        Ver galería
                        <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                    </span>
                </div>
            </button>

            {{-- Polo / Golf / Selva --}}
            @foreach ([
                ['t' => 'Club de polo', 'sub' => 'Estilo de vida', 'd' => 'Solicita información sobre el club participante, alcance de la membresía, vigencia y condiciones aplicables.', 'icon' => 'M5 20l4-16M15 4l4 16M8 12h9'],
                ['t' => 'Club de golf', 'sub' => 'Estilo de vida', 'd' => 'Consulta el club participante, porcentaje o beneficio vigente y condiciones de contratación.', 'icon' => 'M12 18v-14l7 3-7 3M12 18c-3.3 0-6 1-6 2s2.7 2 6 2 6-1 6-2-2.7-2-6-2z'],
                ['t' => 'Selva y bienestar', 'sub' => 'Naturaleza', 'd' => 'Actividades de bienestar, ecoturismo y experiencias en contacto con la naturaleza de la región.', 'icon' => 'M12 22v-7m0 0c4 0 7-3 7-8-4 0-6 1.5-7 4-1-2.5-3-4-7-4 0 5 3 8 7 8z'],
            ] as $exp)
                <div class="reveal flex items-start gap-5 rounded-3xl bg-white p-8 shadow-lg shadow-ink/5 ring-1 ring-ink/5">
                    <span class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full bg-caribe-500/10 text-caribe-700">
                        <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="{{ $exp['icon'] }}"/></svg>
                    </span>
                    <div>
                        <p class="eyebrow text-[0.55rem] text-wood-500">{{ $exp['sub'] }}</p>
                        <h3 class="display mt-1 text-2xl font-light text-ink">{{ $exp['t'] }}</h3>
                        <p class="mt-2 text-sm leading-relaxed text-ink-soft">{{ $exp['d'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <p class="reveal mt-8 text-center text-xs text-ink-soft/70">Experiencias, membresías, accesos y beneficios sujetos a disponibilidad, vigencia, proveedores participantes y condiciones aplicables.</p>
        <div class="reveal mt-8 text-center">
            <a href="#contacto" id="cta-experiencias"
                class="eyebrow inline-flex items-center justify-center rounded-full bg-wood-500 px-8 py-4 text-[0.7rem] text-sand-50 transition-colors hover:bg-wood-400">Conocer experiencias</a>
        </div>
    </div>

    @include('partials.lightbox')
</section>
