{{-- ============================== CONOCE ALUX 33 ============================== --}}
<section id="proyecto" class="bg-sand-50 py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-10">
        <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-16">
            <div class="reveal-group">
                <p class="eyebrow text-wood-500">Conoce Alux 33</p>
                <h2 class="display mt-5 text-4xl font-light text-ink sm:text-5xl">Una propuesta residencial en <span class="accent-italic">Puerto Morelos</span></h2>
                <p class="mt-6 text-lg leading-relaxed text-ink-soft">
                    Alux 33 reúne departamentos, amenidades y experiencias dentro de una propuesta diseñada para quienes buscan disfrutar o invertir en la Riviera Maya.
                </p>
                <p class="mt-4 text-base leading-relaxed text-ink-soft">
                    Bajo el concepto “Del mar a la selva”, el proyecto busca conectar la tranquilidad del Caribe con el entorno natural, el bienestar y la vida en comunidad. Una comunidad para quienes comparten una visión de vida e inversión en la Riviera Maya.
                </p>

                <dl class="mt-10 grid grid-cols-2 gap-x-6 gap-y-5 sm:grid-cols-3">
                    @foreach ([
                        ['n' => '1·2·3', 'l' => 'Habitaciones'],
                        ['n' => 'Puerto Morelos', 'l' => 'Riviera Maya'],
                        ['n' => 'Del mar a la selva', 'l' => 'El concepto'],
                    ] as $stat)
                        <div>
                            <dt class="display text-2xl font-light text-ink sm:text-3xl">{{ $stat['n'] }}</dt>
                            <dd class="eyebrow mt-1 text-[0.55rem] text-ink-soft">{{ $stat['l'] }}</dd>
                        </div>
                    @endforeach
                </dl>

                <ul class="mt-8 flex flex-wrap gap-2.5">
                    @foreach (['Amenidades residenciales', 'Experiencias sujetas a condiciones', 'Alternativas de pago', 'Vida en comunidad'] as $tag)
                        <li class="rounded-full bg-caribe-500/10 px-4 py-2 text-xs font-medium text-caribe-700">{{ $tag }}</li>
                    @endforeach
                </ul>
            </div>

            <div class="reveal overflow-hidden rounded-3xl shadow-xl shadow-ink/10">
                <img src="{{ asset('images/alux-fachada.jpg') }}" alt="Fachada de Alux 33 integrada a la selva — render ilustrativo" loading="lazy"
                    class="aspect-[4/3] w-full object-cover">
            </div>
        </div>
    </div>
</section>
