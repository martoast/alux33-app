{{-- ============================== INFORMACIÓN Y RESPALDO DEL PROYECTO ============================== --}}
<section id="info-proyecto" class="bg-sand-50 py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-10">
        <div class="reveal-group max-w-2xl">
            <p class="eyebrow text-wood-500">Información del proyecto</p>
            <h2 class="display mt-5 text-4xl font-light text-ink sm:text-5xl">Conoce el respaldo y la documentación <span class="accent-italic">disponible</span></h2>
            <p class="mt-5 text-lg leading-relaxed text-ink-soft">Antes de tomar una decisión, solicita información sobre el desarrollo, la estructura comercial, la documentación disponible, los avances y las condiciones de compra.</p>
        </div>

        <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ([
                ['t' => 'Documentación disponible', 'd' => 'Solicita los documentos que el equipo comercial pueda compartir para revisión.', 'icon' => 'M7 3h7l5 5v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zM14 3v5h5M9 13h6M9 17h6'],
                ['t' => 'Avance del proyecto', 'd' => 'Conoce el progreso actualizado mediante fotografías, reportes o recorridos.', 'icon' => 'M3 21h18M5 21V10l7-6 7 6v11M9 21v-5h6v5'],
                ['t' => 'Estructura de compra', 'd' => 'Consulta contratos, procesos y condiciones con el equipo correspondiente.', 'icon' => 'M9 12h6M9 16h6M9 8h1M5 3h14a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1z'],
                ['t' => 'Desarrollador y master broker', 'd' => 'Alux 33 es desarrollado por Estratemex y comercializado con el acompañamiento de Grupo Dihouse.', 'icon' => 'M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2M9 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75'],
            ] as $card)
                <div class="reveal rounded-3xl bg-white p-8 shadow-lg shadow-ink/5 ring-1 ring-ink/5">
                    <span class="flex h-12 w-12 items-center justify-center rounded-full bg-caribe-500/10 text-caribe-700">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="{{ $card['icon'] }}"/></svg>
                    </span>
                    <h3 class="display mt-5 text-xl font-light text-ink">{{ $card['t'] }}</h3>
                    <p class="mt-3 text-sm leading-relaxed text-ink-soft">{{ $card['d'] }}</p>
                </div>
            @endforeach
        </div>

        <div class="reveal mt-10 text-center">
            <a href="#contacto" id="cta-documentacion"
                class="eyebrow inline-flex items-center justify-center rounded-full bg-wood-500 px-8 py-4 text-[0.7rem] text-sand-50 transition-colors hover:bg-wood-400">Solicitar información del proyecto</a>
        </div>
    </div>
</section>
