{{-- ============================== CONSULTA RÁPIDA ============================== --}}
<section id="consulta" class="relative bg-sand-50">
    <div class="mx-auto max-w-5xl px-6 lg:px-10">
        {{-- Tarjeta elevada que se superpone al hero en desktop --}}
        <div class="reveal relative z-20 -mt-20 rounded-3xl bg-white p-8 shadow-2xl shadow-ink/15 ring-1 ring-ink/5 lg:-mt-24 lg:p-10">
            <div class="mb-7 text-center">
                <h2 class="display text-2xl font-light text-ink sm:text-3xl">Encuentra tu unidad en <span class="accent-italic">Alux 33</span></h2>
                <p class="mx-auto mt-2 max-w-xl text-sm leading-relaxed text-ink-soft">Consulta modelos disponibles, precios, planes de pago y opciones para conocer el proyecto en Puerto Morelos.</p>
            </div>
            <form name="consulta" method="POST" data-netlify="true" netlify-honeypot="bot-field" action="/gracias.html"
                class="grid gap-3 sm:grid-cols-2 lg:grid-cols-5">
                <input type="hidden" name="form-name" value="consulta">
                <p class="hidden" aria-hidden="true"><label>Campo interno: <input name="bot-field" tabindex="-1" autocomplete="off"></label></p>
                <input type="text" name="nombre" placeholder="Nombre" required autocomplete="name"
                    class="w-full rounded-xl border-ink/10 bg-sand-50 px-4 py-3.5 text-sm focus:border-wood-400 focus:ring-wood-400">
                <input type="tel" name="telefono" placeholder="Teléfono o WhatsApp" required autocomplete="tel" inputmode="tel"
                    class="w-full rounded-xl border-ink/10 bg-sand-50 px-4 py-3.5 text-sm focus:border-wood-400 focus:ring-wood-400">
                <input type="email" name="email" placeholder="Correo electrónico" required autocomplete="email"
                    class="w-full rounded-xl border-ink/10 bg-sand-50 px-4 py-3.5 text-sm focus:border-wood-400 focus:ring-wood-400">
                <select name="interes" required
                    class="w-full rounded-xl border-ink/10 bg-sand-50 px-4 py-3.5 text-sm text-ink focus:border-wood-400 focus:ring-wood-400">
                    <option value="" disabled selected>¿Qué te interesa?</option>
                    <option>Quiero vivir en Alux 33</option>
                    <option>Quiero invertir</option>
                    <option>Quiero conocer los modelos</option>
                    <option>Quiero recibir planes de pago</option>
                    <option>Soy broker o aliado comercial</option>
                </select>
                <button type="submit" id="cta-consulta"
                    class="eyebrow w-full rounded-full bg-wood-500 px-6 py-3.5 text-[0.65rem] text-sand-50 transition-colors hover:bg-wood-400">Recibir información</button>
            </form>
        </div>
    </div>
</section>
