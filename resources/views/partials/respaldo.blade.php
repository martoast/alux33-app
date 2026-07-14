{{-- ============================== RESPALDO ============================== --}}
{{-- TODO: sustituir los wordmarks por los logos oficiales (Alux 33, Estratemex,
     Grupo Dihouse) cuando el cliente entregue los archivos. --}}
<section class="bg-sand-50 pb-8 pt-24 lg:pt-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-10">
        <div class="reveal-group mx-auto max-w-2xl text-center">
            <p class="eyebrow text-wood-500">Respaldo</p>
            <h2 class="display mt-5 text-4xl font-light text-ink sm:text-5xl">Desarrollado con visión comercial y <span class="accent-italic">residencial</span></h2>
            <p class="mt-5 text-lg leading-relaxed text-ink-soft">Alux 33 es un proyecto desarrollado por Estratemex y comercializado con el acompañamiento de Grupo Dihouse como master broker.</p>
        </div>

        <div class="reveal mx-auto mt-12 grid max-w-3xl grid-cols-1 gap-4 sm:grid-cols-3">
            @foreach ([
                ['n' => 'Alux 33', 'l' => 'Proyecto'],
                ['n' => 'Estratemex', 'l' => 'Desarrollador'],
                ['n' => 'Grupo Dihouse', 'l' => 'Master broker'],
            ] as $marca)
                <div class="flex min-h-[7rem] flex-col items-center justify-center gap-2 rounded-2xl bg-white px-6 py-7 text-center ring-1 ring-ink/5">
                    <span class="display text-lg font-light uppercase tracking-[0.14em] text-ink">{{ $marca['n'] }}</span>
                    <span class="eyebrow text-[0.5rem] text-ink-soft/70">{{ $marca['l'] }}</span>
                </div>
            @endforeach
        </div>
        <p class="reveal mx-auto mt-8 max-w-2xl text-center text-sm text-ink-soft">
            Contacto comercial: <a href="tel:+523312309766" class="font-medium text-ink transition-colors hover:text-wood-500">(+52) 33 1230 9766</a> · <a href="https://www.instagram.com/grupodihouse" target="_blank" rel="noopener" class="font-medium text-ink transition-colors hover:text-wood-500">@grupodihouse</a>
        </p>
    </div>
</section>
