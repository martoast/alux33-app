{{-- ============================== HERO ============================== --}}
<section id="inicio" class="grain relative flex min-h-svh items-end justify-center overflow-hidden bg-caribe-950">
    <div class="absolute inset-0">
        <picture>
            <source media="(min-width: 1024px)" srcset="{{ asset('images/alux-alberca.jpg') }}">
            <img
                src="{{ asset('images/alux-hero-movil.jpg') }}"
                alt="Alberca de Alux 33 con vista al mar Caribe — render ilustrativo"
                class="kenburns h-full w-full object-cover object-center"
                fetchpriority="high"
            >
        </picture>
        <div class="absolute inset-0 bg-caribe-950/20"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-caribe-950/85 via-caribe-950/25 to-caribe-950/25"></div>
    </div>

    {{-- Copy — minimal: la imagen es la protagonista --}}
    <div class="reveal-group is-revealed relative z-10 mx-auto w-full max-w-5xl px-6 pb-32 text-center sm:pb-28">
        <p class="eyebrow text-[0.7rem] text-sand-50 drop-shadow-[0_2px_12px_rgba(7,29,33,0.9)]">
            Desarrollo residencial en Puerto Morelos
        </p>
        <h1 class="display mt-4 text-6xl font-light uppercase tracking-[0.14em] leading-[1.02] text-sand-50 drop-shadow-[0_2px_28px_rgba(7,29,33,0.7)] sm:text-7xl lg:text-8xl">
            Alux 33
        </h1>
        <p class="mx-auto mt-4 max-w-xl font-sans text-base font-light uppercase leading-snug tracking-[0.18em] text-sand-100/95 drop-shadow-[0_2px_16px_rgba(7,29,33,0.8)] sm:text-lg">
            Del mar <span class="text-wood-300">a la</span> selva
        </p>
    </div>
</section>
