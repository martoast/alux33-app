{{-- ============================== PLANES DE PAGO ============================== --}}
@php
    // Porcentajes proporcionados por el equipo comercial — sujetos a validación.
    $planes = [
        ['n' => 'Contado 90/10', 'split' => [['90%', 'Pago inicial'], ['10%', 'A la entrega']], 'd' => 'Consulta el precio y los beneficios vigentes asociados a esta modalidad.'],
        ['n' => 'Plan 10/90', 'split' => [['10%', 'Pago inicial'], ['90%', 'A la entrega']], 'd' => 'Alternativa con un pago inicial menor y una parte principal del pago programada para la entrega, sujeta a condiciones.'],
        ['n' => 'Plan Flex+', 'split' => [['35%', 'Pago inicial'], ['35%', '15 meses'], ['30%', 'A la entrega']], 'd' => 'Distribución de pagos entre inicio, periodo de construcción y entrega.'],
        ['n' => 'Plan Flex', 'split' => [['25%', 'Pago inicial'], ['25%', '15 meses'], ['50%', 'A la entrega']], 'd' => 'Alternativa que distribuye una parte del monto durante el periodo indicado.'],
        ['n' => 'Plan 30/70', 'split' => [['30%', 'Pago inicial'], ['70%', 'A la entrega']], 'd' => 'Modalidad con una parte inicial y el saldo programado para la entrega, sujeta a contrato.'],
        ['n' => 'Plan 25/75', 'split' => [['25%', 'Pago inicial'], ['75%', 'A la entrega']], 'd' => 'Modalidad con un pago inicial y un saldo mayor programado para la entrega.'],
    ];
@endphp

<section id="planes" class="bg-caribe-950 py-24 text-sand-50 lg:py-32" x-data="{ comparar: false }">
    <div class="mx-auto max-w-7xl px-6 lg:px-10">
        <div class="reveal-group max-w-2xl">
            <p class="eyebrow text-wood-300">Planes de pago</p>
            <h2 class="display mt-5 text-4xl font-light sm:text-5xl">Opciones para diferentes perfiles de <span class="accent-italic">compra</span></h2>
            <p class="mt-5 text-lg leading-relaxed text-sand-100/80">Consulta las alternativas vigentes y elige con un asesor la opción que mejor se adapte a tu proceso de compra.</p>
        </div>

        <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($planes as $p)
                <div class="reveal flex flex-col rounded-3xl border border-sand-50/15 bg-sand-50/[0.04] p-8 backdrop-blur-sm">
                    <p class="eyebrow text-[0.6rem] text-wood-300">{{ $p['n'] }}</p>
                    <div class="mt-5 flex items-end gap-4">
                        @foreach ($p['split'] as $s)
                            <div>
                                <p class="display text-3xl font-light tabular-nums">{{ $s[0] }}</p>
                                <p class="eyebrow mt-1 text-[0.5rem] text-sand-200/60">{{ $s[1] }}</p>
                            </div>
                            @if (!$loop->last)<span class="pb-4 text-wood-300">·</span>@endif
                        @endforeach
                    </div>
                    <p class="mt-5 text-sm leading-relaxed text-sand-100/75">{{ $p['d'] }}</p>
                </div>
            @endforeach
        </div>

        <p class="reveal mt-8 text-center text-xs text-sand-200/45">Planes, porcentajes, plazos, beneficios, precios y condiciones sujetos a disponibilidad, aprobación y actualización. Consulta la información vigente con un asesor.</p>
        <div class="reveal mt-8 flex flex-col items-center justify-center gap-3 sm:flex-row">
            <button type="button" @click="comparar = true" id="cta-comparar"
                class="eyebrow inline-flex items-center justify-center rounded-full bg-wood-500 px-8 py-4 text-[0.7rem] text-sand-50 transition-colors hover:bg-wood-400">Comparar planes</button>
            <a href="#contacto" onclick="var s = document.getElementById('interes'); if (s) s.value = 'Quiero recibir planes de pago';"
                class="eyebrow inline-flex items-center justify-center rounded-full border border-sand-50/40 px-8 py-4 text-[0.7rem] text-sand-50 transition-colors hover:bg-sand-50/10">Recibir planes de pago</a>
        </div>
    </div>

    {{-- Modal comparativo --}}
    <div x-show="comparar" x-cloak
        class="fixed inset-0 z-[95] flex items-end justify-center sm:items-center"
        @keydown.escape.window="comparar = false" role="dialog" aria-modal="true">
        <div x-show="comparar" x-transition.opacity class="absolute inset-0 bg-caribe-950/80 backdrop-blur-sm" @click="comparar = false"></div>
        <div x-show="comparar"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-8 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
            class="relative m-0 flex max-h-[92svh] w-full max-w-3xl flex-col overflow-hidden rounded-t-3xl bg-sand-50 text-ink shadow-2xl sm:m-6 sm:rounded-3xl">
            <div class="flex items-start justify-between gap-6 border-b border-ink/10 p-6 sm:p-8">
                <div>
                    <p class="eyebrow text-[0.6rem] text-wood-500">Planes de pago</p>
                    <h3 class="display mt-2 text-3xl font-light">Comparativa de planes</h3>
                </div>
                <button type="button" @click="comparar = false" aria-label="Cerrar"
                    class="shrink-0 rounded-full border border-ink/15 p-2.5 text-ink transition-colors hover:bg-ink hover:text-sand-50">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M6 6l12 12M18 6L6 18"/></svg>
                </button>
            </div>
            <div class="grow overflow-y-auto p-6 sm:p-8">
                <div class="overflow-x-auto">
                    <table class="w-full min-w-[480px] text-left text-sm">
                        <thead>
                            <tr class="border-b border-ink/15">
                                <th class="eyebrow py-3 pr-4 text-[0.6rem] text-ink-soft">Plan</th>
                                <th class="eyebrow py-3 pr-4 text-[0.6rem] text-ink-soft">Pago inicial</th>
                                <th class="eyebrow py-3 pr-4 text-[0.6rem] text-ink-soft">Durante construcción</th>
                                <th class="eyebrow py-3 text-[0.6rem] text-ink-soft">A la entrega</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-ink/10">
                            <tr><td class="py-3 pr-4 font-medium">Contado 90/10</td><td class="py-3 pr-4 tabular-nums">90%</td><td class="py-3 pr-4">—</td><td class="py-3 tabular-nums">10%</td></tr>
                            <tr><td class="py-3 pr-4 font-medium">Plan 10/90</td><td class="py-3 pr-4 tabular-nums">10%</td><td class="py-3 pr-4">—</td><td class="py-3 tabular-nums">90%</td></tr>
                            <tr><td class="py-3 pr-4 font-medium">Plan Flex+</td><td class="py-3 pr-4 tabular-nums">35%</td><td class="py-3 pr-4 tabular-nums">35% · 15 meses</td><td class="py-3 tabular-nums">30%</td></tr>
                            <tr><td class="py-3 pr-4 font-medium">Plan Flex</td><td class="py-3 pr-4 tabular-nums">25%</td><td class="py-3 pr-4 tabular-nums">25% · 15 meses</td><td class="py-3 tabular-nums">50%</td></tr>
                            <tr><td class="py-3 pr-4 font-medium">Plan 30/70</td><td class="py-3 pr-4 tabular-nums">30%</td><td class="py-3 pr-4">—</td><td class="py-3 tabular-nums">70%</td></tr>
                            <tr><td class="py-3 pr-4 font-medium">Plan 25/75</td><td class="py-3 pr-4 tabular-nums">25%</td><td class="py-3 pr-4">—</td><td class="py-3 tabular-nums">75%</td></tr>
                        </tbody>
                    </table>
                </div>
                <p class="mt-5 text-xs leading-relaxed text-ink-soft/70">Planes, porcentajes, plazos, beneficios, precios y condiciones sujetos a disponibilidad, aprobación y actualización. Consulta la información vigente con un asesor.</p>
                <a href="#contacto" @click="comparar = false" onclick="var s = document.getElementById('interes'); if (s) s.value = 'Quiero recibir planes de pago';"
                    class="eyebrow mt-6 inline-flex items-center justify-center rounded-full bg-wood-500 px-8 py-4 text-[0.7rem] text-sand-50 transition-colors hover:bg-wood-400">Hablar con un asesor</a>
            </div>
        </div>
    </div>
</section>
