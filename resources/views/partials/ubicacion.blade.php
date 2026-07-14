{{-- ============================== UBICACIÓN ============================== --}}
<section id="ubicacion" class="bg-sand-100 py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-10">
        <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-16">
            <div class="reveal-group">
                <p class="eyebrow text-wood-500">Puerto Morelos</p>
                <h2 class="display mt-5 text-4xl font-light text-ink sm:text-5xl">Entre el Caribe y los principales destinos de la <span class="accent-italic">Riviera Maya</span></h2>
                <p class="mt-6 text-lg leading-relaxed text-ink-soft">
                    Alux 33 se encuentra en Puerto Morelos, una ubicación conectada con distintos destinos, servicios y experiencias de la región.
                </p>

                {{-- Puntos de referencia (sin tiempos — pendientes de verificación comercial) --}}
                <ul class="mt-9 grid grid-cols-1 gap-3 sm:grid-cols-2">
                    @foreach ([
                        'Cancún',
                        'Playa del Carmen',
                        'Ruta de los Cenotes',
                        'Estación del Tren Maya',
                        'Delphinus',
                        'Marina El Cid',
                        'Faro Inclinado',
                        'Dreams Jade y Dreams Sapphire',
                        'The Fives Hotels & Residences',
                        'El Rey Polo Country Club',
                    ] as $punto)
                        <li class="flex items-start gap-3 text-sm text-ink-soft">
                            <svg class="mt-0.5 h-4 w-4 shrink-0 text-wood-500" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5A2.5 2.5 0 1 1 12 6.5a2.5 2.5 0 0 1 0 5z"/></svg>
                            <span>{{ $punto }}</span>
                        </li>
                    @endforeach
                </ul>
                <p class="mt-5 text-xs leading-relaxed text-ink-soft/70">Tiempos y distancias estimados sujetos a ubicación exacta, ruta, tránsito y condiciones de traslado. Consulta los detalles con un asesor.</p>

                <a href="https://maps.google.com/?q=Puerto+Morelos,+Quintana+Roo" target="_blank" rel="noopener" id="cta-mapa"
                    class="eyebrow mt-8 inline-flex items-center justify-center rounded-full bg-wood-500 px-8 py-4 text-[0.7rem] text-sand-50 transition-colors hover:bg-wood-400">Ver ubicación</a>
            </div>

            <div class="reveal overflow-hidden rounded-3xl shadow-xl shadow-ink/10 ring-1 ring-ink/10">
                <iframe
                    title="Mapa de Puerto Morelos, Quintana Roo"
                    src="https://maps.google.com/maps?q=Puerto%20Morelos%2C%20Quintana%20Roo&t=&z=12&ie=UTF8&iwloc=&output=embed"
                    class="aspect-[4/3] w-full" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
