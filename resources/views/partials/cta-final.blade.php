{{-- ============================== CTA FINAL ============================== --}}
<section class="grain relative flex min-h-[80svh] items-center overflow-hidden bg-caribe-950">
    <div class="absolute inset-0">
        <img src="{{ asset('images/alux-roof.jpg') }}" alt="Rooftop de Alux 33 al atardecer — render ilustrativo" loading="lazy"
            class="h-full w-full object-cover object-center">
        <div class="absolute inset-0 bg-gradient-to-t from-caribe-950/90 via-caribe-950/45 to-caribe-950/55"></div>
    </div>
    <div class="relative mx-auto max-w-3xl px-6 text-center lg:px-10">
        <div class="reveal-group">
            <h2 class="display text-4xl font-light text-sand-50 drop-shadow-[0_2px_24px_rgba(7,29,33,0.6)] sm:text-5xl lg:text-6xl">
                Sé parte de la experiencia <span class="accent-italic">Alux 33</span>
            </h2>
            <p class="mx-auto mt-6 max-w-2xl text-lg leading-relaxed text-sand-100/90 drop-shadow-[0_2px_18px_rgba(7,29,33,0.6)]">
                Consulta modelos, disponibilidad, planes de pago y condiciones vigentes para vivir, invertir o presentar el proyecto a tus clientes.
            </p>
            <div class="mt-9 flex flex-col justify-center gap-3 sm:flex-row sm:items-center">
                <a href="#contacto" class="eyebrow inline-flex items-center justify-center rounded-full bg-wood-500 px-8 py-4 text-[0.7rem] text-sand-50 transition-colors hover:bg-wood-400">Solicitar disponibilidad</a>
                <a href="https://wa.me/523312309766?text={{ rawurlencode('Hola, me interesa Alux 33 en Puerto Morelos. ¿Me pueden compartir información?') }}" target="_blank" rel="noopener" id="cta-asesor"
                    class="eyebrow inline-flex items-center justify-center rounded-full border border-sand-50/40 px-8 py-4 text-[0.7rem] text-sand-50 transition-colors hover:bg-sand-50/10">Hablar con un asesor</a>
            </div>
        </div>
    </div>
</section>
