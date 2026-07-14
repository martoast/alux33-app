<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Lock scroll during the first-load preloader (safety-unlocks after 14s) --}}
    <script>
        document.documentElement.classList.add('is-loading');
        setTimeout(function () { document.documentElement.classList.remove('is-loading'); }, 14000);
    </script>

    @php
        $siteUrl = rtrim(config('app.url'), '/');
        $metaTitle = $title ?? 'Alux 33 Puerto Morelos | Departamentos en la Riviera Maya';
        $metaDesc = $description ?? 'Conoce Alux 33, un proyecto residencial en Puerto Morelos con modelos de una, dos y tres habitaciones, amenidades y alternativas de pago.';
        $ogImage = $siteUrl . '/images/og-alux.jpg';
    @endphp
    <title>{{ $metaTitle }}</title>
    <meta name="description" content="{{ $metaDesc }}">
    <meta name="keywords" content="Alux 33, Puerto Morelos, departamentos Riviera Maya, departamentos Puerto Morelos, invertir Riviera Maya, Estratemex, Grupo Dihouse, del mar a la selva">
    <meta name="author" content="Grupo Dihouse">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <meta name="theme-color" content="#071d21">
    <link rel="canonical" href="{{ $siteUrl }}/">

    {{-- Icons --}}
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" type="image/png" href="/icon-512.png" sizes="512x512">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    {{-- Open Graph — URLs must be absolute --}}
    <meta property="og:site_name" content="Alux 33 · Puerto Morelos">
    <meta property="og:title" content="Alux 33 · Del mar a la selva — Puerto Morelos">
    <meta property="og:description" content="Departamentos de 1, 2 y 3 habitaciones en Puerto Morelos, con amenidades, experiencias y alternativas de pago en la Riviera Maya.">
    <meta property="og:image" content="{{ $ogImage }}">
    <meta property="og:image:secure_url" content="{{ $ogImage }}">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Alberca de Alux 33 con vista al mar Caribe — render ilustrativo">
    <meta property="og:url" content="{{ $siteUrl }}/">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_MX">

    {{-- Twitter / X card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Alux 33 · Del mar a la selva — Puerto Morelos">
    <meta name="twitter:description" content="Departamentos de 1, 2 y 3 habitaciones en Puerto Morelos, Riviera Maya. Desarrolla Estratemex · Master broker Grupo Dihouse.">
    <meta name="twitter:image" content="{{ $ogImage }}">
    <meta name="twitter:image:alt" content="Alux 33 — Puerto Morelos">

    {{-- Structured data --}}
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'ApartmentComplex',
        'name' => 'Alux 33',
        'description' => $metaDesc,
        'url' => $siteUrl . '/',
        'image' => $ogImage,
        'slogan' => 'Del mar a la selva',
        'address' => [
            '@type' => 'PostalAddress',
            'addressLocality' => 'Puerto Morelos',
            'addressRegion' => 'Quintana Roo',
            'addressCountry' => 'MX',
        ],
        'developer' => ['@type' => 'Organization', 'name' => 'Estratemex'],
        'broker' => ['@type' => 'RealEstateAgent', 'name' => 'Grupo Dihouse', 'telephone' => '+52 33 1230 9766'],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body
    x-data="{ navSolid: false, navOpen: false }"
    @scroll.window.passive="navSolid = window.scrollY > 40"
    :class="navOpen ? 'overflow-hidden xl:overflow-auto' : ''"
>

    {{-- ============================== PRELOADER (sin porcentaje, per brief) ============================== --}}
    <div id="preloader" class="fixed inset-0 z-[100] flex items-center justify-center bg-caribe-950">
        <div class="preloader-mark flex flex-col items-center text-sand-50">
            @include('partials.logo')
        </div>
    </div>

    @php
        $navLinks = [
            ['label' => 'Proyecto',   'href' => '#proyecto'],
            ['label' => 'Ubicación',  'href' => '#ubicacion'],
            ['label' => 'Modelos',    'href' => '#modelos'],
            ['label' => 'Amenidades', 'href' => '#amenidades'],
            ['label' => 'Planes',     'href' => '#planes'],
            ['label' => 'Avance',     'href' => '#avance'],
        ];
        $mobileExtra = [
            ['label' => 'Experiencias', 'href' => '#experiencias'],
            ['label' => 'Contacto',     'href' => '#contacto'],
        ];

        // Contacto comercial — Grupo Dihouse (master broker). Centralizado aquí.
        $telNumber = '+523312309766';
        $telDisplay = '(+52) 33 1230 9766';
        $waNumber = '523312309766';
        $waText = rawurlencode('Hola, me interesa Alux 33 en Puerto Morelos. ¿Me pueden compartir información?');
        $instagramUrl = 'https://www.instagram.com/grupodihouse';
        $mapsUrl = 'https://maps.google.com/?q=Puerto+Morelos,+Quintana+Roo';
        // TODO: correo electrónico — pendiente de confirmación del equipo comercial.
    @endphp

    {{-- ============================== NAV ============================== --}}
    <header
        class="fixed inset-x-0 top-0 z-50 transition-all duration-500"
        :class="navSolid || navOpen ? 'bg-sand-50/95 backdrop-blur-sm shadow-[0_1px_0_0_rgba(35,32,25,0.08)]' : 'bg-transparent'"
    >
        <nav class="relative mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-10">
            <a
                href="#inicio"
                class="group relative z-50 flex shrink-0 items-center transition-colors duration-500"
                :class="navSolid || navOpen ? 'text-ink' : 'text-sand-50'"
                aria-label="Alux 33 — inicio"
            >
                @include('partials.logo', ['variant' => 'auto'])
            </a>

            {{-- Desktop links + CTA, right-aligned --}}
            <div class="flex items-center gap-3 xl:gap-5">
                <div class="hidden items-center gap-4 xl:flex 2xl:gap-7">
                    @foreach ($navLinks as $item)
                        <a
                            href="{{ $item['href'] }}"
                            class="nav-link eyebrow whitespace-nowrap text-[0.6rem] transition-colors duration-300 2xl:text-[0.65rem] {{ in_array($item['label'], ['Ubicación', 'Avance']) ? 'hidden 2xl:inline-block' : '' }}"
                            :class="navSolid ? 'text-ink-soft hover:text-wood-500' : 'text-sand-100 hover:text-white'"
                        >{{ $item['label'] }}</a>
                    @endforeach
                </div>
                <a
                    href="#contacto"
                    id="cta-nav"
                    class="eyebrow z-50 hidden whitespace-nowrap rounded-full px-4 py-2.5 text-[0.65rem] text-sand-50 transition-all duration-300 bg-wood-500 hover:bg-wood-400 lg:inline-flex xl:px-5"
                >Solicitar información</a>

                <button
                    class="relative z-50 flex h-10 w-10 flex-col items-center justify-center gap-1.5 xl:hidden"
                    @click="navOpen = !navOpen"
                    aria-label="Menú"
                >
                    <span class="block h-px w-6 transition-all duration-300"
                        :class="[navOpen ? 'translate-y-[3.5px] rotate-45' : '', navSolid || navOpen ? 'bg-ink' : 'bg-sand-50']"></span>
                    <span class="block h-px w-6 transition-all duration-300"
                        :class="[navOpen ? '-translate-y-[3.5px] -rotate-45' : '', navSolid || navOpen ? 'bg-ink' : 'bg-sand-50']"></span>
                </button>
            </div>
        </nav>

        {{-- Mobile / tablet menu --}}
        <div x-show="navOpen" x-collapse.duration.400ms class="xl:hidden">
            <div class="space-y-1 border-t border-ink/5 bg-sand-50 px-6 pb-8 pt-4">
                @foreach (array_merge($navLinks, $mobileExtra) as $item)
                    <a href="{{ $item['href'] }}" @click="navOpen = false"
                        class="display block py-3 text-2xl text-ink transition-colors hover:text-wood-500">{{ $item['label'] }}</a>
                @endforeach
                <a href="#contacto" @click="navOpen = false"
                    class="eyebrow mt-4 inline-block rounded-full bg-wood-500 px-6 py-3 text-[0.65rem] text-sand-50">Solicitar información</a>
            </div>
        </div>
    </header>

    <main>
        {{ $slot ?? '' }}
        @yield('content')
    </main>

    {{-- ============================== FOOTER ============================== --}}
    <footer class="bg-caribe-950 text-sand-200">
        <div class="mx-auto max-w-7xl px-6 py-16 lg:px-10">
            <div class="grid gap-12 md:grid-cols-3">
                <div class="text-sand-50">
                    @include('partials.logo')
                    <p class="mt-6 max-w-xs text-sm leading-relaxed text-sand-200/70">
                        Puerto Morelos, Quintana Roo.<br>
                        Riviera Maya, México.
                    </p>
                    <p class="mt-5 text-xs leading-relaxed text-sand-200/55">
                        Desarrollado por Estratemex.<br>
                        Master broker: Grupo Dihouse.
                    </p>
                </div>

                <div>
                    <p class="eyebrow mb-5 text-[0.6rem] text-wood-300">El proyecto</p>
                    <ul class="space-y-3 text-sm">
                        <li><a href="#proyecto" class="transition-colors hover:text-wood-300">Conoce Alux 33</a></li>
                        <li><a href="#modelos" class="transition-colors hover:text-wood-300">Modelos</a></li>
                        <li><a href="#amenidades" class="transition-colors hover:text-wood-300">Amenidades</a></li>
                        <li><a href="#experiencias" class="transition-colors hover:text-wood-300">Experiencias</a></li>
                        <li><a href="#planes" class="transition-colors hover:text-wood-300">Planes de pago</a></li>
                        <li><a href="#avance" class="transition-colors hover:text-wood-300">Avance</a></li>
                    </ul>
                </div>

                <div>
                    <p class="eyebrow mb-5 text-[0.6rem] text-wood-300">Contacto</p>
                    <ul class="space-y-3 text-sm">
                        <li>
                            <a href="https://wa.me/{{ $waNumber }}?text={{ $waText }}" target="_blank" rel="noopener" id="footer-wa" class="inline-flex items-center gap-2 transition-colors hover:text-wood-300">
                                <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.52.149-.174.198-.298.297-.497.1-.198.05-.371-.025-.52-.074-.149-.668-1.612-.916-2.207-.242-.579-.487-.5-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg>
                                WhatsApp · {{ $telDisplay }}
                            </a>
                        </li>
                        <li>
                            <a href="tel:{{ $telNumber }}" id="footer-tel" class="inline-flex items-center gap-2 transition-colors hover:text-wood-300">
                                <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current"><path d="M6.62 10.79a15.53 15.53 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.02-.24 11.36 11.36 0 0 0 3.57.57 1 1 0 0 1 1 1V20a1 1 0 0 1-1 1A17 17 0 0 1 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1 11.36 11.36 0 0 0 .57 3.57 1 1 0 0 1-.25 1.02l-2.2 2.2z"/></svg>
                                Llamar · {{ $telDisplay }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ $instagramUrl }}" target="_blank" rel="noopener" class="inline-flex items-center gap-2 transition-colors hover:text-wood-300">
                                <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current"><path d="M12 2.2c3.2 0 3.6 0 4.9.1 1.2.1 1.8.2 2.2.4.6.2 1 .5 1.4.9.4.4.7.8.9 1.4.2.4.4 1 .4 2.2.1 1.3.1 1.7.1 4.9s0 3.6-.1 4.9c-.1 1.2-.2 1.8-.4 2.2-.2.6-.5 1-.9 1.4-.4.4-.8.7-1.4.9-.4.2-1 .4-2.2.4-1.3.1-1.7.1-4.9.1s-3.6 0-4.9-.1c-1.2-.1-1.8-.2-2.2-.4-.6-.2-1-.5-1.4-.9-.4-.4-.7-.8-.9-1.4-.2-.4-.4-1-.4-2.2-.1-1.3-.1-1.7-.1-4.9s0-3.6.1-4.9c.1-1.2.2-1.8.4-2.2.2-.6.5-1 .9-1.4.4-.4.8-.7 1.4-.9.4-.2 1-.4 2.2-.4 1.3-.1 1.7-.1 4.9-.1zm0 2c-3.1 0-3.5 0-4.8.1-1.1.1-1.5.2-1.8.3-.4.2-.7.3-1 .6-.3.3-.5.6-.6 1-.1.3-.3.7-.3 1.8-.1 1.3-.1 1.6-.1 4.8s0 3.5.1 4.8c.1 1.1.2 1.5.3 1.8.2.4.3.7.6 1 .3.3.6.5 1 .6.3.1.7.3 1.8.3 1.3.1 1.6.1 4.8.1s3.5 0 4.8-.1c1.1-.1 1.5-.2 1.8-.3.4-.2.7-.3 1-.6.3-.3.5-.6.6-1 .1-.3.3-.7.3-1.8.1-1.3.1-1.6.1-4.8s0-3.5-.1-4.8c-.1-1.1-.2-1.5-.3-1.8-.2-.4-.3-.7-.6-1-.3-.3-.6-.5-1-.6-.3-.1-.7-.3-1.8-.3-1.3-.1-1.6-.1-4.8-.1zm0 3.4a4.4 4.4 0 1 1 0 8.8 4.4 4.4 0 0 1 0-8.8zm0 7.2a2.8 2.8 0 1 0 0-5.6 2.8 2.8 0 0 0 0 5.6zm5.6-7.4a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/></svg>
                                Instagram · @grupodihouse
                            </a>
                        </li>
                        {{-- TODO: correo electrónico — pendiente de confirmación --}}
                    </ul>
                    <a href="#contacto" class="eyebrow mt-7 inline-flex items-center justify-center rounded-full bg-wood-500 px-7 py-3.5 text-[0.65rem] text-sand-50 transition-colors hover:bg-wood-400">Agendar asesoría</a>
                </div>
            </div>

            <div class="mt-14 border-t border-sand-50/10 pt-8 text-xs leading-relaxed text-sand-200/50">
                <p>© {{ date('Y') }} Alux 33 · Desarrollado por Estratemex · Master broker: Grupo Dihouse. Todos los derechos reservados. · Aviso de Privacidad <span class="text-sand-200/30">· v1.0.3</span></p>
                <p class="mt-2">
                    Las imágenes, planos, renders, amenidades, experiencias y representaciones mostradas pueden ser ilustrativas y están sujetas a modificaciones.
                    La disponibilidad, superficies, vistas, precios, planes de pago, beneficios y condiciones deben confirmarse con el equipo comercial y pueden cambiar sin previo aviso.
                </p>
            </div>
        </div>
    </footer>

    {{-- ============================== FLOATING ACTIONS ============================== --}}
    <div class="fixed right-4 top-1/2 z-40 flex -translate-y-1/2 flex-col items-center gap-3 sm:right-6">
        <a href="{{ $mapsUrl }}" target="_blank" rel="noopener" aria-label="Ver ubicación en Google Maps"
            class="flex h-12 w-12 items-center justify-center rounded-full bg-caribe-900 text-sand-50 shadow-lg shadow-ink/20 transition-transform duration-300 hover:scale-110">
            <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5A2.5 2.5 0 1 1 12 6.5a2.5 2.5 0 0 1 0 5z"/></svg>
        </a>
        <a href="tel:{{ $telNumber }}" aria-label="Llamar" id="fab-tel"
            class="flex h-12 w-12 items-center justify-center rounded-full bg-wood-500 text-sand-50 shadow-lg shadow-ink/20 transition-transform duration-300 hover:scale-110">
            <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current"><path d="M6.62 10.79a15.53 15.53 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.02-.24 11.36 11.36 0 0 0 3.57.57 1 1 0 0 1 1 1V20a1 1 0 0 1-1 1A17 17 0 0 1 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1 11.36 11.36 0 0 0 .57 3.57 1 1 0 0 1-.25 1.02l-2.2 2.2z"/></svg>
        </a>
        <a href="https://wa.me/{{ $waNumber }}?text={{ $waText }}" target="_blank" rel="noopener" aria-label="WhatsApp" id="fab-wa"
            class="flex h-14 w-14 items-center justify-center rounded-full bg-[#25D366] shadow-lg shadow-ink/20 transition-transform duration-300 hover:scale-110">
            <svg viewBox="0 0 24 24" class="h-7 w-7 fill-white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.52.149-.174.198-.298.297-.497.1-.198.05-.371-.025-.52-.074-.149-.668-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        </a>
    </div>

</body>
</html>
