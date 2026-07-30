<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ---------------------------------------------------------------------------
 * PAGE-LEVEL SETUP — Roofing Services (group page, 16 services)
 * ------------------------------------------------------------------------- */
$currentPage = 'services';

$groupName       = 'Roofing Services';
$groupSlug       = 'roofing-services';
$pageTitle       = 'Roofing Services in Fort Smith, AR — Repair, Replacement & More | ' . $siteName;
$pageDescription = 'JBL Roofing LLC handles roof repair, replacement, 24/7 emergency repair, leak repair, inspections, and every major roofing material in Fort Smith, AR. Licensed, insured, free estimates.';
$canonicalUrl    = $siteUrl . '/services/' . $groupSlug . '/';
$ogType          = 'website';

$imgBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/jbl-roofing-llc/photos/';
$photos = [
    'hero'    => $imgBase . '1785371119407-ivl8mo-IMG_3492.jpeg',
    'repair'  => $imgBase . '1785371126320-k4kjaq-IMG_4587.jpeg',
    'replace' => $imgBase . '1785371127618-ndtvms-IMG_4588.jpeg',
    'material'=> $imgBase . '1785371128999-7fb5tb-IMG_4591.jpeg',
    'rel1'    => $imgBase . '1785371131896-afguij-IMG_2806.jpeg',
    'rel2'    => $imgBase . '1785371124660-vir8wt-IMG_4572.jpeg',
    'rel3'    => $imgBase . '1785371133543-80u1r3-IMG_4564.jpeg',
];

$ogImage          = $photos['hero'];
$heroImagePreload = $photos['hero'];

/* The 16 services in this group (icons drawn only from references/lucide-icons) */
$groupServices = [
    ['name' => 'Roof Repair',                    'icon' => 'hammer',       'desc' => 'Targeted fixes for leaks, missing shingles, and worn flashing.'],
    ['name' => 'Emergency Roof Repair (24/7)',   'icon' => 'clock',        'desc' => 'Round-the-clock response for active leaks and storm damage.'],
    ['name' => 'Roof Replacement & Installation','icon' => 'home',         'desc' => 'Complete tear-off and new roof systems, installed right.'],
    ['name' => 'Roof Leak Repair',               'icon' => 'wrench',       'desc' => 'Leak detection and permanent water-intrusion repair.'],
    ['name' => 'Residential Roof Inspection',    'icon' => 'search',       'desc' => 'Thorough photo-documented assessment of your roof.'],
    ['name' => 'Roof Damage Assessment',         'icon' => 'check-circle', 'desc' => 'Hail and wind damage documentation for insurance.'],
    ['name' => 'Asphalt Shingle Roofing',        'icon' => 'building-2',   'desc' => 'Affordable, proven shingle systems for our climate.'],
    ['name' => 'Metal Roofing',                  'icon' => 'shield-check', 'desc' => 'Standing-seam and panel metal that beats hail and wind.'],
    ['name' => 'Tile Roofing',                   'icon' => 'building',     'desc' => 'Durable, striking tile for upscale rooflines.'],
    ['name' => 'Slate Roofing',                  'icon' => 'award',        'desc' => 'Premium slate built to last generations.'],
    ['name' => 'Cedar Shake Roofing',            'icon' => 'pen-tool',     'desc' => 'Natural wood-shake character with expert installation.'],
    ['name' => 'Flat Roofing Systems',           'icon' => 'ruler',        'desc' => 'Low-slope systems for porches, additions, and flats.'],
    ['name' => 'TPO Roofing',                    'icon' => 'hard-hat',     'desc' => 'Energy-efficient thermoplastic membrane roofing.'],
    ['name' => 'EPDM Roofing',                   'icon' => 'paint-bucket', 'desc' => 'Long-lasting rubber membrane for flat sections.'],
    ['name' => 'Energy-Efficient Roofing',       'icon' => 'star',         'desc' => 'Cool-roof options that trim summer cooling bills.'],
    ['name' => 'Roof Financing Options',         'icon' => 'badge-check',  'desc' => 'Flexible, low-interest plans for repairs and replacement.'],
];

/* Detailed flagship blocks (question H2 + answer-block + split image) */
$processSteps = [
    ['n' => '01', 'title' => 'Free Inspection',       'text' => 'We climb the roof, document every problem with photos, and show you exactly what we find — no obligation.'],
    ['n' => '02', 'title' => 'Written Estimate',       'text' => 'A detailed, itemized quote in plain language, including material choices and financing options.'],
    ['n' => '03', 'title' => 'Scheduling & Materials', 'text' => 'We lock in a date, order materials, and protect your landscaping and siding before work begins.'],
    ['n' => '04', 'title' => 'Installation',           'text' => 'Efficient, tidy tear-off and install — most residential roofs finish in 1–3 days.'],
    ['n' => '05', 'title' => 'Cleanup & Walkthrough',  'text' => 'We magnet-sweep for nails, haul debris, and walk the finished roof with you before we call it done.'],
];

$faqs = [
    ['q' => 'How much does a roof replacement cost in Fort Smith?',                  'a' => 'Most roof replacements in Fort Smith range from $8,000 to $18,000 depending on size, pitch, material, and complexity. JBL Roofing LLC provides a free inspection and a detailed written estimate so you know the exact price before deciding — with no obligation.'],
    ['q' => 'Should I repair or replace my roof?',                                   'a' => 'It depends on age, damage extent, and how many prior repairs the roof has seen. JBL Roofing LLC gives you an honest recommendation after a free inspection — if a targeted repair will genuinely protect your home, we say so instead of pushing a replacement.'],
    ['q' => 'How long does a roof replacement take?',                                'a' => 'Most residential roofs in Fort Smith are completed in one to three days. Larger homes, steep pitches, or metal and tile systems can extend the timeline. We give you a project-specific schedule with your estimate and stick to it — no surprise extensions.'],
    ['q' => 'What roofing material is best for Arkansas weather?',                   'a' => 'Asphalt shingles are affordable and proven in our climate, while metal resists hail and high wind better and lasts longer. JBL Roofing LLC recommends the right system based on your budget, home style, and exposure to Fort Smith storms.'],
    ['q' => 'Do you offer 24/7 emergency roof repair?',                             'a' => 'Yes. JBL Roofing LLC responds around the clock to active leaks, storm damage, and wind or hail events. We stabilize the roof quickly with tarping and leak control, then schedule the permanent repair right away to prevent further interior damage.'],
    ['q' => 'Do you offer financing for roof repairs and replacement?',              'a' => 'Yes. JBL Roofing LLC offers flexible, low-interest financing that makes both repairs and full replacements affordable for Fort Smith homeowners. Ask about payment options during your free estimate and we will walk you through what fits your budget.'],
];

/* Related services (other group pages) — required services component, 3 cards */
$related = [
    ['name' => 'Storm Damage Repair',        'slug' => 'storm-damage-repair',        'icon' => 'shield-check', 'photo' => $photos['rel1'], 'desc' => 'Wind, hail, and water damage restoration — 24/7.', 'bullets' => ['Emergency response', 'Wind & hail repair', 'Tarping & stabilization'], 'tint' => 1],
    ['name' => 'Seasonal Services',          'slug' => 'seasonal-services',          'icon' => 'wrench',       'photo' => $photos['rel2'], 'desc' => 'Gutters, metal roofing, and roof maintenance.',   'bullets' => ['Seamless gutters', 'Metal roof installs', 'Preventive care'],       'tint' => 2],
    ['name' => 'Insurance Claim Assistance', 'slug' => 'insurance-claim-assistance', 'icon' => 'badge-check',  'photo' => $photos['rel3'], 'desc' => 'We document damage and work with your adjuster.',  'bullets' => ['Damage documentation', 'Adjuster coordination', 'Maximized settlement'], 'tint' => 3],
];

/* ---------------------------------------------------------------------------
 * SCHEMA — @graph: Service + FAQPage + BreadcrumbList
 * ------------------------------------------------------------------------- */
$serviceSchema = [
    '@type'       => 'Service',
    '@id'         => $canonicalUrl . '#service-' . $groupSlug,
    'name'        => 'Roofing Services',
    'serviceType' => 'Roofing',
    'description' => 'Residential roof repair, replacement, 24/7 emergency repair, leak repair, inspections, and asphalt, metal, tile, slate, and flat roofing systems in Fort Smith, AR.',
    'url'         => $canonicalUrl,
    'provider'    => ['@id' => $siteUrl . '#organization'],
    'areaServed'  => [
        '@type' => 'City', 'name' => 'Fort Smith',
        'containedInPlace' => ['@type' => 'State', 'name' => 'Arkansas'],
    ],
    'hasOfferCatalog' => [
        '@type' => 'OfferCatalog',
        'name'  => 'Roofing Services',
        'itemListElement' => array_map(function ($s) {
            return ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => $s['name']]];
        }, $groupServices),
    ],
];

$breadcrumb = generateBreadcrumbSchema([
    ['name' => 'Home',            'url' => $siteUrl . '/'],
    ['name' => 'Services',        'url' => $siteUrl . '/services/'],
    ['name' => 'Roofing Services','url' => $canonicalUrl],
]);
unset($breadcrumb['@context']);

$faqNode = generateFAQSchema($faqs);
unset($faqNode['@context']);

$schemaMarkup = generateGraphSchema([$serviceSchema, $faqNode, $breadcrumb]);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<style>
/* =========================================================================
   ROOFING SERVICES (group page) — page-specific design layer (Premium)
   Tokens only. No hardcoded colors / shadows / spacing.
   ========================================================================= */
.text-accent { color: var(--color-secondary); }
.sr-only {
  position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px;
  overflow: hidden; clip: rect(0,0,0,0); white-space: nowrap; border: 0;
}

/* ---- HERO (split, layered overlay + noise) ---- */
.rs-hero {
  min-height: 72vh; display: flex; align-items: center; text-align: left;
  padding-top: var(--space-16); padding-bottom: var(--space-16);
}
.rs-hero__overlay {
  position: absolute; inset: 0; z-index: 1;
  background: linear-gradient(115deg, rgba(var(--color-primary-rgb), 0.94) 0%, rgba(var(--color-primary-rgb), 0.80) 45%, rgba(var(--color-secondary-rgb), 0.55) 100%);
}
.rs-hero__overlay::after {
  content: ""; position: absolute; inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='3'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.5'/%3E%3C/svg%3E");
  opacity: 0.06; mix-blend-mode: overlay;
}
.rs-hero__inner { position: relative; z-index: 2; max-width: 760px; }
.rs-breadcrumb {
  display: flex; flex-wrap: wrap; gap: var(--space-2); align-items: center;
  color: rgba(255,255,255,0.72); font-size: var(--font-size-sm); margin-bottom: var(--space-5);
}
.rs-breadcrumb a { color: rgba(255,255,255,0.72); }
.rs-breadcrumb a:hover { color: var(--color-white); }
.rs-breadcrumb [aria-current] { color: var(--color-secondary); font-weight: 600; }
.rs-eyebrow {
  display: inline-flex; align-items: center; gap: var(--space-2); color: var(--color-white);
  background: rgba(var(--color-secondary-rgb), 0.28); border: 1px solid rgba(255,255,255,0.28);
  padding: var(--space-1) var(--space-4); border-radius: var(--radius-full);
  font-family: var(--font-heading); font-size: var(--font-size-xs);
  text-transform: uppercase; letter-spacing: 2px; font-weight: 700; margin-bottom: var(--space-5);
}
.rs-hero h1 { color: var(--color-white); font-size: var(--font-size-6xl); line-height: 1.05; margin-bottom: var(--space-5); }
.rs-hero h1 .text-accent { color: var(--color-secondary); }
.rs-hero .hero-answer { color: rgba(255,255,255,0.90); font-size: var(--font-size-lg); line-height: 1.75; max-width: 58ch; margin: 0 0 var(--space-8); }
.rs-hero__actions { display: flex; gap: var(--space-4); flex-wrap: wrap; margin-bottom: var(--space-8); }
.rs-hero__actions .btn-ghost { background: rgba(255,255,255,0.08); color: var(--color-white); border-color: rgba(255,255,255,0.5); }
.rs-hero__actions .btn-ghost:hover { background: var(--color-white); color: var(--color-primary); border-color: var(--color-white); }
.rs-hero__trust { display: flex; flex-wrap: wrap; gap: var(--space-3) var(--space-6); list-style: none; }
.rs-hero__trust li { display: flex; align-items: center; gap: var(--space-2); color: rgba(255,255,255,0.92); font-size: var(--font-size-sm); font-weight: 600; }
.rs-hero__trust li svg { color: var(--color-secondary); flex-shrink: 0; }

/* ---- SECTION HEADER + dividers ---- */
.section-divider { position: relative; line-height: 0; }
.section-divider svg { display: block; width: 100%; height: auto; }
.section-divider--wave path { fill: var(--color-light); }
.section-divider--angle path { fill: var(--color-dark); }
.section-subtitle { display: block; color: var(--color-secondary); font-weight: 700; font-size: var(--font-size-sm); text-transform: uppercase; letter-spacing: 2px; margin-bottom: var(--space-2); }
.section-header h2 .text-accent { color: var(--color-secondary); }
.hero-answer { max-width: 62ch; margin: 0 auto var(--space-4); color: var(--color-gray-dark); font-size: var(--font-size-lg); line-height: 1.7; }
.answer-block {
  max-width: 70ch; margin: 0 auto var(--space-6);
  color: var(--color-black); font-size: var(--font-size-lg); line-height: 1.75;
  padding: var(--space-5) var(--space-6);
  background: rgba(var(--color-secondary-rgb), 0.07);
  border-left: 4px solid var(--color-secondary);
  border-radius: var(--radius-md);
}

/* ---- CAPABILITIES GRID (all 16 services, compact) ---- */
.caps-section { background: var(--color-white); }
.caps-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: var(--space-5); }
.cap-card {
  display: flex; flex-direction: column; gap: var(--space-2);
  padding: var(--space-6); background: var(--color-light);
  border: 1px solid var(--color-gray-light); border-radius: var(--radius-lg);
  transition: transform var(--transition-base), box-shadow var(--transition-base), border-color var(--transition-base);
}
.cap-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); border-color: rgba(var(--color-secondary-rgb), 0.5); }
.cap-card:nth-child(3n+1) { background: rgba(var(--color-primary-rgb), 0.05); }
.cap-card:nth-child(3n+2) { background: rgba(var(--color-secondary-rgb), 0.09); }
.cap-card:nth-child(3n)   { background: rgba(var(--color-accent-rgb), 0.13); }
.cap-icon {
  width: 46px; height: 46px; border-radius: var(--radius-md);
  background: var(--color-white); box-shadow: var(--shadow-sm);
  display: flex; align-items: center; justify-content: center; color: var(--color-secondary);
}
.cap-icon svg { width: 22px; height: 22px; }
.cap-card h3 { color: var(--color-primary); font-size: var(--font-size-base); margin: 0; }
.cap-card p { color: var(--color-gray-dark); font-size: var(--font-size-sm); line-height: 1.55; margin: 0; }

/* ---- DETAIL SPLITS (alternating) ---- */
.detail-section { background: var(--color-light); }
.detail-split {
  display: grid; grid-template-columns: 3fr 2fr; gap: var(--space-12);
  align-items: center; margin-bottom: var(--space-16);
}
.detail-split:last-child { margin-bottom: 0; }
.detail-split--reverse { grid-template-columns: 2fr 3fr; }
.detail-split--reverse .detail-copy { order: 2; }
.detail-split--reverse .detail-figure { order: 1; }
.detail-copy h2 { color: var(--color-primary); font-size: var(--font-size-4xl); margin-bottom: var(--space-4); }
.detail-copy h2 .text-accent { color: var(--color-secondary); }
.detail-copy p { color: var(--color-gray-dark); line-height: 1.8; margin-bottom: var(--space-4); }
.detail-copy .answer-block { margin-left: 0; }
.detail-list { list-style: none; display: grid; gap: var(--space-3); margin-top: var(--space-4); }
.detail-list li { display: flex; gap: var(--space-3); align-items: flex-start; color: var(--color-gray-dark); font-size: var(--font-size-base); }
.detail-list li svg { color: var(--color-secondary); flex-shrink: 0; margin-top: 3px; }
.detail-figure { position: relative; }
.detail-figure img {
  width: 100%; border-radius: var(--radius-xl); box-shadow: var(--shadow-lg);
  object-fit: cover; aspect-ratio: 4 / 3;
}
.detail-figure::before {
  content: ""; position: absolute; inset: auto auto calc(-1 * var(--space-5)) calc(-1 * var(--space-5));
  width: 120px; height: 120px; border-radius: var(--radius-lg);
  border: 3px solid var(--color-secondary); z-index: -1;
}

/* ---- PROCESS TIMELINE ---- */
.process-section { background: var(--color-white); }
.process-timeline { display: grid; grid-template-columns: repeat(5, 1fr); gap: var(--space-6); counter-reset: step; }
.process-node {
  position: relative; padding: var(--space-6);
  background: var(--color-light); border-radius: var(--radius-lg);
  border-top: 4px solid var(--color-secondary);
  box-shadow: var(--shadow-sm);
}
.process-node .step-num { font-family: var(--font-heading); font-size: var(--font-size-3xl); font-weight: 800; color: rgba(var(--color-secondary-rgb), 0.55); line-height: 1; }
.process-node h3 { font-size: var(--font-size-lg); margin: var(--space-2) 0; color: var(--color-primary); }
.process-node p { font-size: var(--font-size-sm); color: var(--color-gray); margin: 0; line-height: 1.6; }

/* ---- FAQ ---- */
.faq-section { background: var(--color-light); }
.faq-grid { grid-template-columns: repeat(2, 1fr); gap: var(--space-6); }
.faq-item { background: var(--color-white); align-items: flex-start; }
.faq-icon { background: var(--color-secondary); }
.faq-item h3 { color: var(--color-primary); font-size: var(--font-size-base); }

/* ---- RELATED SERVICES (required services component) ---- */
.related-section { background: var(--color-white); }
.services-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: var(--space-8); }
.card-tint-1 { background: rgba(var(--color-primary-rgb), 0.05); box-shadow: none; }
.card-tint-2 { background: rgba(var(--color-secondary-rgb), 0.10); box-shadow: none; }
.card-tint-3 { background: rgba(var(--color-accent-rgb), 0.14); box-shadow: none; }
.service-card-with-image { border-radius: var(--radius-lg); overflow: hidden; display: flex; flex-direction: column; transition: transform var(--transition-base), box-shadow var(--transition-base); }
.service-card-with-image:hover { transform: translateY(-6px); box-shadow: var(--shadow-lg); }
.service-card__image { position: relative; aspect-ratio: 5 / 3; overflow: hidden; }
.service-card__image img { width: 100%; height: 100%; object-fit: cover; transition: transform var(--transition-slow); }
.service-card-with-image:hover .service-card__image img { transform: scale(1.06); }
.service-card__body { padding: var(--space-8) var(--space-6) var(--space-6); text-align: center; display: flex; flex-direction: column; align-items: center; gap: var(--space-3); flex: 1; }
.service-card__icon { width: 56px; height: 56px; border-radius: var(--radius-full); background: var(--color-white); box-shadow: var(--shadow-md); display: flex; align-items: center; justify-content: center; margin-top: -44px; color: var(--color-secondary); }
.service-card__icon svg { width: 26px; height: 26px; }
.service-card-with-image h3 { color: var(--color-primary); font-size: var(--font-size-xl); margin: 0; }
.service-card__desc { color: var(--color-gray-dark); font-size: var(--font-size-sm); line-height: 1.6; margin: 0; }
.service-card-with-image ul { list-style: none; width: 100%; text-align: left; display: flex; flex-direction: column; gap: var(--space-2); border-top: 1px solid rgba(var(--color-primary-rgb), 0.10); padding-top: var(--space-4); margin-top: var(--space-2); }
.service-card-with-image ul li { position: relative; padding-left: var(--space-6); font-size: var(--font-size-sm); color: var(--color-gray-dark); }
.service-card-with-image ul li::before { content: ""; position: absolute; left: 0; top: 0.4em; width: 10px; height: 10px; border-radius: var(--radius-full); background: var(--color-secondary); }
.service-card__cta { margin-top: auto; width: 100%; padding-top: var(--space-4); border-top: 1px solid rgba(var(--color-primary-rgb), 0.10); color: var(--color-secondary); font-family: var(--font-heading); font-weight: 700; font-size: var(--font-size-sm); }
.service-card__cta::after { content: " \2192"; transition: transform var(--transition-base); display: inline-block; }
.service-card__cta:hover { color: var(--color-primary); }
.service-card__cta:hover::after { transform: translateX(4px); }

/* ---- CLOSING CTA ---- */
.closing-cta { background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 120%); }
.closing-cta .container { position: relative; z-index: 1; text-align: center; }
.closing-cta h2 { color: var(--color-white); font-size: var(--font-size-5xl); margin-bottom: var(--space-4); }
.closing-cta p { color: rgba(255,255,255,0.9); max-width: 52ch; margin: 0 auto var(--space-8); font-size: var(--font-size-lg); }

/* ---- RESPONSIVE ---- */
@media (max-width: 1024px) {
  .caps-grid { grid-template-columns: repeat(2, 1fr); }
  .process-timeline { grid-template-columns: repeat(2, 1fr); }
  .detail-split, .detail-split--reverse { grid-template-columns: 1fr; gap: var(--space-8); }
  .detail-split--reverse .detail-copy, .detail-split--reverse .detail-figure { order: 0; }
  .services-grid { grid-template-columns: 1fr; }
}
@media (max-width: 768px) {
  .rs-hero h1 { font-size: var(--font-size-4xl); }
  .rs-hero__trust { grid-template-columns: 1fr; }
  .faq-grid { grid-template-columns: 1fr; }
}
@media (max-width: 600px) {
  .caps-grid { grid-template-columns: 1fr; }
  .process-timeline { grid-template-columns: 1fr; }
}
</style>

<!-- =====================================================================
     HERO
     ===================================================================== -->
<section class="hero rs-hero" style="background-image: url('<?php echo htmlspecialchars($photos['hero']); ?>');" aria-label="Roofing services in Fort Smith">
  <div class="rs-hero__overlay"></div>
  <div class="container">
    <div class="rs-hero__inner">
      <nav class="rs-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a><span aria-hidden="true">/</span>
        <a href="/services/">Services</a><span aria-hidden="true">/</span>
        <span aria-current="page">Roofing Services</span>
      </nav>
      <span class="rs-eyebrow"><?php echo icon('home', 16); ?> Residential Roofing</span>
      <h1>Roofing <span class="text-accent">Services</span> in Fort Smith, AR</h1>
      <p class="hero-answer">JBL Roofing LLC is a licensed, insured Fort Smith roofing contractor handling repairs, full replacements, 24/7 emergency work, leak repair, inspections, and every major material — asphalt, metal, tile, slate, cedar shake, and flat systems. One local crew, honest pricing, free inspections.</p>
      <div class="rs-hero__actions">
        <a href="/contact/" class="btn btn-primary btn-lg">Get a Free Estimate</a>
        <a href="#services" class="btn btn-ghost btn-lg">See All 16 Services</a>
      </div>
      <ul class="rs-hero__trust">
        <li><?php echo icon('shield-check', 18); ?> Licensed &amp; Insured</li>
        <li><?php echo icon('clock', 18); ?> 24/7 Emergency Response</li>
        <li><?php echo icon('award', 18); ?> 20+ Yrs Combined Experience</li>
        <li><?php echo icon('check-circle', 18); ?> Free, No-Pressure Estimates</li>
      </ul>
    </div>
  </div>
</section>

<!-- Wave divider -->
<div class="section-divider section-divider--wave" aria-hidden="true">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none"><path d="M0,32 C240,64 480,0 720,16 C960,32 1200,64 1440,24 L1440,60 L0,60 Z"></path></svg>
</div>

<!-- =====================================================================
     CAPABILITIES — all 16 services
     ===================================================================== -->
<section id="services" class="caps-section" aria-label="Roofing services offered">
  <div class="container">
    <div class="section-header reveal-up">
      <span class="section-subtitle">What We Do</span>
      <h2>What's included in JBL Roofing's <span class="text-accent">roofing services</span>?</h2>
      <p class="answer-block">JBL Roofing LLC's roofing lineup covers 16 services in Fort Smith, AR — from same-day leak repair and 24/7 emergency response to complete replacements in asphalt, metal, tile, slate, cedar shake, and flat systems, plus inspections, damage assessments, energy-efficient upgrades, and financing.</p>
    </div>

    <div class="caps-grid">
      <?php foreach ($groupServices as $s): ?>
      <article class="cap-card reveal-up">
        <div class="cap-icon"><?php echo icon($s['icon'], 22); ?></div>
        <h3><?php echo htmlspecialchars($s['name']); ?></h3>
        <p><?php echo htmlspecialchars($s['desc']); ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- =====================================================================
     DETAIL SPLITS — flagship services
     ===================================================================== -->
<section class="detail-section" aria-label="Roofing service details">
  <div class="container">

    <!-- Roof Repair -->
    <div class="detail-split reveal-up">
      <div class="detail-copy">
        <h2>How does JBL handle <span class="text-accent">roof repair</span> in Fort Smith?</h2>
        <p class="answer-block">JBL Roofing LLC repairs leaks, missing or lifted shingles, damaged flashing, and worn valleys — usually in a single visit. We start with a free inspection, show you photos of the actual problem, and fix the cause, not just the symptom, so the leak stays gone.</p>
        <p>Small problems become expensive fast when water gets past the shingles and into the decking. Our crew tracks the leak to its true source, replaces failed materials with a proper match, and re-seals the roof so the repair blends in and holds up to the next Arkansas storm.</p>
        <ul class="detail-list">
          <li><?php echo icon('check-circle', 20); ?> Leak tracing to the real source, not a guess</li>
          <li><?php echo icon('check-circle', 20); ?> Flashing, valley, and shingle repairs</li>
          <li><?php echo icon('check-circle', 20); ?> Photo documentation before and after</li>
        </ul>
      </div>
      <div class="detail-figure">
        <img src="<?php echo htmlspecialchars($photos['repair']); ?>" sizes="(max-width: 1024px) 100vw, 460px"
             alt="JBL Roofing LLC crew repairing a residential roof in Fort Smith, Arkansas" width="640" height="480" loading="lazy">
      </div>
    </div>

    <!-- Roof Replacement -->
    <div class="detail-split detail-split--reverse reveal-up">
      <div class="detail-copy">
        <h2>What does a full <span class="text-accent">roof replacement</span> include?</h2>
        <p class="answer-block">A JBL Roofing LLC replacement includes complete tear-off, deck inspection and repair, new underlayment and ice-and-water shield, fresh flashing, and your chosen roofing material — installed to manufacturer spec so the warranty holds. Most Fort Smith homes finish in one to three days.</p>
        <p>We protect your landscaping and siding before we start, magnet-sweep for nails when we finish, and haul away every scrap of the old roof. You get a written scope up front, so there are no surprise change orders halfway through the job.</p>
        <ul class="detail-list">
          <li><?php echo icon('check-circle', 20); ?> Full tear-off and deck repair</li>
          <li><?php echo icon('check-circle', 20); ?> Asphalt, metal, tile, slate &amp; cedar options</li>
          <li><?php echo icon('check-circle', 20); ?> Manufacturer-spec install &amp; warranty</li>
        </ul>
      </div>
      <div class="detail-figure">
        <img src="<?php echo htmlspecialchars($photos['replace']); ?>" sizes="(max-width: 1024px) 100vw, 460px"
             alt="New residential roof installation completed by JBL Roofing LLC in Fort Smith, AR" width="640" height="480" loading="lazy">
      </div>
    </div>

    <!-- Materials -->
    <div class="detail-split reveal-up">
      <div class="detail-copy">
        <h2>Which roofing <span class="text-accent">materials</span> do you install?</h2>
        <p class="answer-block">JBL Roofing LLC installs asphalt shingle, standing-seam and panel metal, tile, slate, and cedar shake roofing, plus flat-roof systems including TPO and EPDM. We match the material to your budget, home style, and Fort Smith's hail and wind exposure — and recommend energy-efficient options that cut cooling costs.</p>
        <p>Not sure what's right for your home? Asphalt keeps costs down, metal maximizes hail and wind resistance, and tile or slate deliver decades of premium curb appeal. We lay out the trade-offs honestly during your free estimate so you can choose with confidence.</p>
        <ul class="detail-list">
          <li><?php echo icon('check-circle', 20); ?> Asphalt, metal, tile, slate &amp; cedar shake</li>
          <li><?php echo icon('check-circle', 20); ?> Flat systems: TPO &amp; EPDM membrane</li>
          <li><?php echo icon('check-circle', 20); ?> Energy-efficient cool-roof upgrades</li>
        </ul>
      </div>
      <div class="detail-figure">
        <img src="<?php echo htmlspecialchars($photos['material']); ?>" sizes="(max-width: 1024px) 100vw, 460px"
             alt="Close-up of roofing materials installed by JBL Roofing LLC in Fort Smith, Arkansas" width="640" height="480" loading="lazy">
      </div>
    </div>

  </div>
</section>

<!-- =====================================================================
     PROCESS
     ===================================================================== -->
<section class="process-section" aria-label="Our roofing process">
  <div class="container">
    <div class="section-header reveal-up">
      <span class="section-subtitle">Start to Finish</span>
      <h2>What happens during a <span class="text-accent">roofing project</span> with JBL?</h2>
      <p class="hero-answer">JBL Roofing LLC follows the same five-step process on every Fort Smith roof — a clear path from free inspection to final walkthrough, with no surprises along the way.</p>
    </div>
    <div class="process-timeline">
      <?php foreach ($processSteps as $step): ?>
      <div class="process-node reveal-up">
        <div class="step-num"><?php echo htmlspecialchars($step['n']); ?></div>
        <h3><?php echo htmlspecialchars($step['title']); ?></h3>
        <p><?php echo htmlspecialchars($step['text']); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Mid-page CTA banner -->
<section class="cta-banner" aria-label="Free roofing estimate">
  <div class="container">
    <h2 class="reveal-up">Ready to fix or replace your roof?</h2>
    <p class="reveal-up reveal-delay-1">Get a free inspection and a clear written estimate from a local Fort Smith crew — repair or replacement, asphalt or metal, we'll tell you honestly what your roof needs.</p>
    <a href="/contact/" class="btn btn-outline-white btn-lg reveal-up reveal-delay-2">Get My Free Estimate</a>
  </div>
</section>

<!-- =====================================================================
     FAQ
     ===================================================================== -->
<section class="faq-section" aria-label="Roofing services frequently asked questions">
  <div class="container">
    <div class="section-header reveal-up">
      <span class="section-subtitle">Good Questions</span>
      <h2>Have questions about <span class="text-accent">Fort Smith roofing</span>?</h2>
      <p class="hero-answer">Straight answers on cost, repair-vs-replace, timelines, materials, emergencies, and financing.</p>
    </div>
    <div class="faq-grid">
      <?php foreach ($faqs as $i => $faq): ?>
      <div class="faq-item reveal-up reveal-delay-<?php echo ($i % 3) + 1; ?>">
        <div class="faq-icon"><?php echo icon('info', 20); ?></div>
        <div>
          <h3><?php echo htmlspecialchars($faq['q']); ?></h3>
          <p class="faq-answer"><?php echo htmlspecialchars($faq['a']); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- =====================================================================
     RELATED SERVICES (required component)
     ===================================================================== -->
<section class="related-section" aria-label="Other services you may need">
  <div class="container">
    <div class="section-header reveal-up">
      <span class="section-subtitle">What We Do</span>
      <h2>What other services might your <span class="text-accent">roof project</span> need?</h2>
      <p class="hero-answer">Storms, gutters, and insurance claims often go hand-in-hand with roof work. JBL Roofing LLC covers those too, so one local crew can handle the whole job.</p>
    </div>
    <div class="services-grid">
      <?php foreach ($related as $i => $c): ?>
      <article class="service-card-with-image card-tint-<?php echo $c['tint']; ?> reveal-up reveal-delay-<?php echo $i + 1; ?>">
        <div class="service-card__image">
          <img src="<?php echo htmlspecialchars($c['photo']); ?>" sizes="(max-width: 1024px) 100vw, 380px"
               alt="<?php echo htmlspecialchars($c['name'] . ' by JBL Roofing LLC in Fort Smith, AR'); ?>" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><?php echo icon($c['icon'], 26); ?></div>
          <h3><?php echo htmlspecialchars($c['name']); ?></h3>
          <p class="service-card__desc"><?php echo htmlspecialchars($c['desc']); ?></p>
          <ul>
            <?php foreach ($c['bullets'] as $b): ?><li><?php echo htmlspecialchars($b); ?></li><?php endforeach; ?>
          </ul>
          <a href="/services/<?php echo htmlspecialchars($c['slug']); ?>/" class="service-card__cta">Learn more</a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Angle divider into closing CTA -->
<div class="section-divider section-divider--angle" aria-hidden="true">
  <svg viewBox="0 0 1440 50" preserveAspectRatio="none"><path d="M0,0 L1440,50 L1440,50 L0,50 Z"></path></svg>
</div>

<!-- =====================================================================
     CLOSING CTA
     ===================================================================== -->
<section class="closing-cta" aria-label="Get your free roofing estimate">
  <div class="container">
    <h2 class="reveal-up">Roof trouble? Let's take a look — free.</h2>
    <p class="reveal-up reveal-delay-1">From a small leak to a full replacement, JBL Roofing LLC gives Fort Smith homeowners honest answers and fair pricing. Built Tough. Built Right.</p>
    <a href="/contact/" class="btn btn-outline-white btn-lg reveal-up reveal-delay-2">Get My Free Estimate</a>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
