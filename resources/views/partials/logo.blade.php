{{-- Alux 33 wordmark + divider + location (pending the official logo files —
     TODO: sustituir el wordmark por /logos/alux33-blanco.svg y la versión oscura
     cuando el cliente entregue los archivos oficiales).
     variant 'white' → fixed light version (footer, preloader)
     variant 'auto'  → compact nav version that inherits currentColor. --}}
@php
    $variant = $variant ?? 'white';
    $auto = $variant === 'auto';
@endphp
<span class="flex items-center gap-3 lg:gap-4 {{ $auto ? 'text-current' : 'text-sand-50' }}" role="img" aria-label="Alux 33 — Puerto Morelos, del mar a la selva">
    <span class="display whitespace-nowrap text-xl font-light uppercase tracking-[0.22em] lg:text-2xl">Alux <span class="text-wood-400">33</span></span>
    <span class="h-8 w-px shrink-0 lg:h-9 {{ $auto ? 'bg-current opacity-25' : 'bg-sand-50/25' }}"></span>
    @if ($auto)
        <span class="eyebrow whitespace-nowrap text-[0.55rem] tracking-[0.28em]">Puerto Morelos</span>
    @else
        <span class="flex flex-col leading-none">
            <span class="eyebrow whitespace-nowrap text-[0.55rem] tracking-[0.28em]">Puerto Morelos</span>
            <span class="eyebrow mt-1 whitespace-nowrap text-[0.45rem] tracking-[0.3em] text-wood-400">Del mar a la selva</span>
        </span>
    @endif
</span>
