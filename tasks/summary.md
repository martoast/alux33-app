# Alux 33 — Landing Page

## Qué es
Landing one-pager para **Alux 33**, desarrollo residencial en Puerto Morelos,
Quintana Roo ("Del mar a la selva"). Departamentos de 1, 2 y 3 habitaciones
(modelos Fuego, Agua, 2 Hab, 3 Hab), amenidades, experiencias (club de playa,
polo, golf), 6 planes de pago. Desarrolla **Estratemex**; master broker
**Grupo Dihouse** — tel (+52) 33 1230 9766, IG @grupodihouse (contacto REAL,
activo en WhatsApp flotante, footer y CTAs).

Quinto sitio de la familia. Blueprint: `docs/landing-page-structure.md` ·
proceso: `docs/new-landing-playbook.md`. Skin: azul Caribe (`caribe-*`),
arena (`sand-*`), madera/dorado (`wood-*`).

## Secciones
hero (alberca) → consulta rápida (form corto superpuesto) → proyecto → video →
concepto "Del mar a la selva" (band) → ubicación (mapa + 10 referencias, SIN
tiempos — pendientes de verificación) → modelos (4 tarjetas + lightbox
distribución) → disponibilidad (dark CTA) → amenidades (slider + modal; gym/
lavado/acceso como tarjetas de ícono) → experiencias (club de playa con galería
+ polo/golf/selva) → info del proyecto (4 tarjetas) → planes de pago (6 cards +
modal comparativo) → avance (banner) → galería → visitas → asesoría (form 2
pasos con barra de progreso) → respaldo → brokers → cta-final

## Formularios (Netlify)
- `consulta` — form corto post-hero
- `asesoria` — form 2 pasos (paso 1 validado por Alpine; consent requerido)

## Reglas del brief
NO inventar precios/rendimientos/plusvalía/fechas/comisiones/membresías.
Porcentajes de planes = proporcionados, "sujetos a validación". Renders
etiquetados "Render"; club de playa etiquetado "experiencia externa".
Preloader sin porcentaje. Tiempos de traslado omitidos (no verificados).

## Desarrollo local
```bash
composer install && npm install
php artisan serve   # ?nopreload salta el preloader
```
