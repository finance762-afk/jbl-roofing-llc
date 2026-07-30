<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ---------------------------------------------------------------------------
 * PAGE-LEVEL SETUP — Services Overview
 * ------------------------------------------------------------------------- */
$currentPage = 'services';

$pageTitle       = 'Roofing & Exterior Services in Fort Smith, AR | ' . $siteName;
$pageDescription = 'Explore JBL Roofing LLC services in Fort Smith, AR — roof repair, replacement, storm damage restoration, gutters, metal roofing, siding, and insurance claim help. Licensed, insured, free estimates.';
$canonicalUrl    = $siteUrl . '/services/';
$ogType          = 'website';

/* Real client photos (remote — Supabase storage; no on-disk webp variants, so
 * remote images take a sizes attribute but no srcset). */
$imgBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/jbl-roofing-llc/photos/';
$photos = [
    'hero'  => $imgBase . '1785371135054-yi0d8g-IMG_4571.jpeg',
    'g1'    => $imgBase . '1785371126320-k4kjaq-IMG_4587.jpeg',
    'g2'    => $imgBase . '1785371128999-7fb5tb-IMG_4591.jpeg',
    'g3'    => $imgBase . '1785371131896-afguij-IMG_2806.jpeg',
    'g4'    => $imgBase . '1785371127618-ndtvms-IMG_4588.jpeg',
    'g5'    => $imgBase . '1785371133543-80u1r3-IMG_4564.jpeg',
];

$ogImage          = $photos['hero'];
$heroImagePreload = $photos['hero'];

/* The five real service-group pages that actually exist at /services/{slug}/ */
$serviceCards = [
    [
        'name'    => 'Roofing Services',
        'slug'    => 'roofing-services',
        'icon'    => 'home',
        'photo'   => $photos['g1'],
        'desc'    => 'Repairs, full replacements, and every major roofing material.',
        'bullets' => ['Repair, replace & inspect', 'Asphalt, metal, tile & slate', 'Free roof inspections'],
        'tint'    => 1, 'delay' => 1,
    ],
    [
        'name'    => 'Seasonal Services',
        'slug'    => 'seasonal-services',
        'icon'    => 'wrench',
        'photo'   => $photos['g2'],
        'desc'    => 'Gutters, metal roofing, and preventive maintenance.',
        'bullets' => ['Seamless gutters & downspouts', 'Metal roof installs', 'Preventive roof maintenance'],
        'tint'    => 2, 'delay' => 2,
    ],
    [
        'name'    => 'Siding Installation & Repair',
        'slug'    => 'siding-installation-repair',
        'icon'    => 'hammer',
        'photo'   => $photos['g3'],
        'desc'    => 'Weatherproof siding that seals and lifts curb appeal.',
        'bullets' => ['New siding installation', 'Storm & rot repair', 'Better weatherproofing'],
        'tint'    => 3, 'delay' => 3,
    ],
    [
        'name'    => 'Storm Damage Repair',
        'slug'    => 'storm-damage-repair',
        'icon'    => 'shield-check',
        'photo'   => $photos['g4'],
        'desc'    => 'Fast wind, hail, and water damage restoration — 24/7.',
        'bullets' => ['24/7 emergency response', 'Wind & hail specialists', 'Tarping & leak stabilization'],
        'tint'    => 1, 'delay' => 1,
    ],
    [
        'name'    => 'Insurance Claim Assistance',
        'slug'    => 'insurance-claim-assistance',
        'icon'    => 'badge-check',
        'photo'   => $photos['g5'],
        'desc'    => 'We document damage and work directly with your adjuster.',
        'bullets' => ['Full damage documentation', 'We work with adjusters', 'Maximize your settlement'],
        'tint'    => 2, 'delay' => 2,
    ],
];

/* Why-JBL points */
$pillars = [
    ['icon' => 'map-pin',      'title' => 'One Local Crew, Every Service', 'text' => 'Roof, gutters, siding, and storm work all handled by the same Fort Smith team — no subcontractor handoffs or finger-pointing.'],
    ['icon' => 'clock',        'title' => 'Storm-Season Ready',            'text' => 'When Arkansas hail and wind roll through, JBL Roofing LLC responds fast with emergency repairs and free damage assessments.'],
    ['icon' => 'badge-check',  'title' => 'Insurance Made Simple',         'text' => 'We photograph the damage, meet your adjuster on the roof, and translate the paperwork so your claim moves forward.'],
    ['icon' => 'thumbs-up',    'title' => 'Honest, Upfront Pricing',       'text' => 'Licensed, insured, and bonded with detailed written estimates — you see the scope and the cost before any work starts.'],
];

/* FAQs about the services lineup */
$faqs = [
    ['q' => 'What roofing and exterior services does JBL Roofing offer in Fort Smith?',   'a' => 'JBL Roofing LLC provides roof repair, roof replacement, 24/7 emergency and storm damage repair, gutter installation and cleaning, metal roofing, roof maintenance, siding installation and repair, and insurance claim assistance across Fort Smith and the surrounding Arkansas, Oklahoma, and Missouri region.'],
    ['q' => 'Do you handle both roof repairs and full replacements?',                     'a' => 'Yes. JBL Roofing LLC repairs leaks, storm damage, and worn sections, and also installs complete new roof systems. During your free inspection we tell you honestly whether a targeted repair or a full replacement is the smarter investment for your home.'],
    ['q' => 'Are your roofing services available for emergencies?',                        'a' => 'Yes. JBL Roofing LLC offers 24/7 emergency roof repair for active leaks, storm damage, and wind or hail events. We stabilize the roof quickly with tarping and leak control, then schedule the permanent repair right away.'],
    ['q' => 'Which areas do you serve for these services?',                               'a' => 'JBL Roofing LLC is based at 5022 S 33rd St in Fort Smith, AR and serves homeowners throughout Fort Smith and neighboring communities across Arkansas, Oklahoma, and Missouri, typically within about a 100-mile service radius.'],
    ['q' => 'Do you offer free estimates on all services?',                               'a' => 'Yes. Every JBL Roofing LLC service starts with a free, no-pressure inspection and a detailed written estimate. There is no obligation to move forward, and we walk you through exactly what we found and what each option costs.'],
];

/* ---------------------------------------------------------------------------
 * SCHEMA — @graph: BreadcrumbList + ItemList (of service groups) + FAQPage
 * ------------------------------------------------------------------------- */
$breadcrumb = generateBreadcrumbSchema([
    ['name' => 'Home',     'url' => $siteUrl . '/'],
    ['name' => 'Services', 'url' => $canonicalUrl],
]);
unset($breadcrumb['@context']);

$itemList = [
    '@type' => 'ItemList',
    'name'  => 'JBL Roofing LLC Services',
    'itemListElement' => array_map(function ($i, $c) {
        return [
            '@type'    => 'ListItem',
            'position' => $i + 1,
            'name'     => $c['name'],
            'url'      => $GLOBALS['siteUrl'] . '/services/' . $c['slug'] . '/',
        ];
    }, array_keys($serviceCards), $serviceCards),
];

$faqNode = generateFAQSchema($faqs);
unset($faqNode['@context']);

$schemaMarkup = generateGraphSchema([$breadcrumb, $itemList, $faqNode]);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<style>
/* =========================================================================
   SERVICES INDEX — page-specific design layer (Premium tier)
   Tokens only. No hardcoded colors / shadows / spacing.
   ========================================================================= */
.text-accent { color: var(--color-secondary); }
.sr-only {
  position: absolute; width: 1px; height: 1px;
  padding: 0; margin: -1px; overflow: hidden;
  clip: rect(0, 0, 0, 0); white-space: nowrap; border: 0;
}

/* ---- COMPACT HERO (layered overlay + noise) ---- */
.svc-hero {
  min-height: 62vh;
  display: flex;
  align-items: center;
  text-align: center;
  padding-top: var(--space-16);
  padding-bottom: var(--space-16);
}
.svc-hero .svc-hero__overlay {
  position: absolute; inset: 0; z-index: 1;
  background:
    linear-gradient(160deg, rgba(var(--color-primary-rgb), 0.93) 0%, rgba(var(--color-primary-rgb), 0.78) 55%, rgba(var(--color-secondary-rgb), 0.60) 100%);
}
.svc-hero .svc-hero__overlay::after {
  content: ""; position: absolute; inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='3'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.5'/%3E%3C/svg%3E");
  opacity: 0.06; mix-blend-mode: overlay;
}
.svc-hero__inner { position: relative; z-index: 2; max-width: 820px; margin: 0 auto; }
.svc-breadcrumb {
  display: inline-flex; gap: var(--space-2); align-items: center;
  color: rgba(255,255,255,0.72); font-size: var(--font-size-sm);
  margin-bottom: var(--space-5);
}
.svc-breadcrumb a { color: rgba(255,255,255,0.72); }
.svc-breadcrumb a:hover { color: var(--color-white); }
.svc-breadcrumb [aria-current] { color: var(--color-secondary); font-weight: 600; }
.svc-hero__eyebrow {
  display: inline-flex; align-items: center; gap: var(--space-2);
  color: var(--color-white);
  background: rgba(var(--color-secondary-rgb), 0.28);
  border: 1px solid rgba(255,255,255,0.28);
  padding: var(--space-1) var(--space-4);
  border-radius: var(--radius-full);
  font-family: var(--font-heading); font-size: var(--font-size-xs);
  text-transform: uppercase; letter-spacing: 2px; font-weight: 700;
  margin-bottom: var(--space-5);
}
.svc-hero__eyebrow svg { color: var(--color-white); }
.svc-hero h1 {
  color: var(--color-white);
  font-size: var(--font-size-6xl);
  line-height: 1.06;
  margin-bottom: var(--space-5);
}
.svc-hero h1 .text-accent { color: var(--color-secondary); }
.svc-hero .hero-answer {
  color: rgba(255,255,255,0.90);
  font-size: var(--font-size-lg);
  line-height: 1.75;
  max-width: 60ch;
  margin: 0 auto var(--space-8);
}
.svc-hero__actions { display: flex; gap: var(--space-4); justify-content: center; flex-wrap: wrap; }
.svc-hero__actions .btn-ghost {
  background: rgba(255,255,255,0.08);
  color: var(--color-white);
  border-color: rgba(255,255,255,0.5);
}
.svc-hero__actions .btn-ghost:hover { background: var(--color-white); color: var(--color-primary); border-color: var(--color-white); }

/* ---- SECTION DIVIDER ---- */
.section-divider { position: relative; line-height: 0; }
.section-divider svg { display: block; width: 100%; height: auto; }
.section-divider--wave path { fill: var(--color-white); }
.section-divider--angle path { fill: var(--color-dark); }

/* ---- SECTION HEADER ---- */
.section-subtitle {
  display: block; color: var(--color-secondary);
  font-weight: 700; font-size: var(--font-size-sm);
  text-transform: uppercase; letter-spacing: 2px;
  margin-bottom: var(--space-2);
}
.section-header h2 .text-accent { color: var(--color-secondary); }
.hero-answer {
  max-width: 62ch; margin: 0 auto var(--space-4);
  color: var(--color-gray-dark); font-size: var(--font-size-lg); line-height: 1.7;
}

/* ---- SERVICES GRID (required component) ---- */
.services-section { background: var(--color-white); }
.services-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-8);
}
.card-tint-1 { background: rgba(var(--color-primary-rgb), 0.05); box-shadow: none; }
.card-tint-2 { background: rgba(var(--color-secondary-rgb), 0.10); box-shadow: none; }
.card-tint-3 { background: rgba(var(--color-accent-rgb), 0.14); box-shadow: none; }
.service-card-with-image {
  border-radius: var(--radius-lg); overflow: hidden;
  display: flex; flex-direction: column;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.service-card-with-image:hover { transform: translateY(-6px); box-shadow: var(--shadow-lg); }
.service-card__image { position: relative; aspect-ratio: 5 / 3; overflow: hidden; }
.service-card__image img { width: 100%; height: 100%; object-fit: cover; transition: transform var(--transition-slow); }
.service-card-with-image:hover .service-card__image img { transform: scale(1.06); }
.service-card__body {
  padding: var(--space-8) var(--space-6) var(--space-6);
  text-align: center; display: flex; flex-direction: column;
  align-items: center; gap: var(--space-3); flex: 1;
}
.service-card__icon {
  width: 56px; height: 56px; border-radius: var(--radius-full);
  background: var(--color-white); box-shadow: var(--shadow-md);
  display: flex; align-items: center; justify-content: center;
  margin-top: -44px; color: var(--color-secondary);
}
.service-card__icon svg { width: 26px; height: 26px; }
.service-card-with-image h3 { color: var(--color-primary); font-size: var(--font-size-xl); margin: 0; }
.service-card__desc { color: var(--color-gray-dark); font-size: var(--font-size-sm); line-height: 1.6; margin: 0; }
.service-card-with-image ul {
  list-style: none; width: 100%; text-align: left;
  display: flex; flex-direction: column; gap: var(--space-2);
  border-top: 1px solid rgba(var(--color-primary-rgb), 0.10);
  padding-top: var(--space-4); margin-top: var(--space-2);
}
.service-card-with-image ul li { position: relative; padding-left: var(--space-6); font-size: var(--font-size-sm); color: var(--color-gray-dark); }
.service-card-with-image ul li::before {
  content: ""; position: absolute; left: 0; top: 0.4em;
  width: 10px; height: 10px; border-radius: var(--radius-full); background: var(--color-secondary);
}
.service-card__cta {
  margin-top: auto; width: 100%; padding-top: var(--space-4);
  border-top: 1px solid rgba(var(--color-primary-rgb), 0.10);
  color: var(--color-secondary); font-family: var(--font-heading);
  font-weight: 700; font-size: var(--font-size-sm);
}
.service-card__cta::after { content: " \2192"; transition: transform var(--transition-base); display: inline-block; }
.service-card__cta:hover { color: var(--color-primary); }
.service-card__cta:hover::after { transform: translateX(4px); }

/* ---- PILLARS (asymmetric alternating rows) ---- */
.pillars-section { background: var(--color-light); }
.pillars-list { display: flex; flex-direction: column; gap: var(--space-6); max-width: 1000px; margin: 0 auto; }
.pillar-row {
  display: grid; grid-template-columns: 64px 1fr; gap: var(--space-6);
  align-items: flex-start;
  background: var(--color-white);
  border-radius: var(--radius-lg);
  border-left: 4px solid var(--color-secondary);
  box-shadow: var(--shadow-sm);
  padding: var(--space-8);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.pillar-row:hover { transform: translateX(6px); box-shadow: var(--shadow-md); }
.pillar-row:nth-child(even) { border-left-color: var(--color-primary); }
.pillar-icon {
  width: 64px; height: 64px; border-radius: var(--radius-md);
  background: rgba(var(--color-secondary-rgb), 0.12);
  color: var(--color-secondary);
  display: flex; align-items: center; justify-content: center;
}
.pillar-row:nth-child(even) .pillar-icon { background: rgba(var(--color-primary-rgb), 0.08); color: var(--color-primary); }
.pillar-body h3 { color: var(--color-primary); font-size: var(--font-size-xl); margin-bottom: var(--space-2); }
.pillar-body p { color: var(--color-gray-dark); line-height: 1.7; margin: 0; }

/* ---- FAQ ---- */
.faq-section { background: var(--color-white); }
.faq-grid { grid-template-columns: repeat(2, 1fr); gap: var(--space-6); }
.faq-item { background: var(--color-light); align-items: flex-start; }
.faq-icon { background: var(--color-secondary); }
.faq-item h3 { color: var(--color-primary); font-size: var(--font-size-base); }

/* ---- CLOSING CTA ---- */
.closing-cta { background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 120%); }
.closing-cta .container { position: relative; z-index: 1; text-align: center; }
.closing-cta h2 { color: var(--color-white); font-size: var(--font-size-5xl); margin-bottom: var(--space-4); }
.closing-cta p { color: rgba(255,255,255,0.9); max-width: 52ch; margin: 0 auto var(--space-8); font-size: var(--font-size-lg); }

/* ---- RESPONSIVE ---- */
@media (max-width: 1024px) {
  .services-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
  .svc-hero h1 { font-size: var(--font-size-4xl); }
  .faq-grid { grid-template-columns: 1fr; }
  .pillar-row { grid-template-columns: 1fr; text-align: left; }
}
@media (max-width: 600px) {
  .services-grid { grid-template-columns: 1fr; }
}
</style>

<!-- =====================================================================
     HERO
     ===================================================================== -->
<section class="hero svc-hero" style="background-image: url('<?php echo htmlspecialchars($photos['hero']); ?>');" aria-label="JBL Roofing services overview">
  <div class="svc-hero__overlay"></div>
  <div class="container">
    <div class="svc-hero__inner">
      <nav class="svc-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span aria-hidden="true">/</span>
        <span aria-current="page">Services</span>
      </nav>
      <span class="svc-hero__eyebrow"><?php echo icon('hard-hat', 16); ?> Full-Service Roofing &amp; Exterior</span>
      <h1>Roofing &amp; Exterior <span class="text-accent">Services</span> in Fort Smith, AR</h1>
      <p class="hero-answer">JBL Roofing LLC is a licensed, insured Fort Smith roofing contractor offering repairs, full replacements, 24/7 storm damage restoration, gutters, metal roofing, siding, and insurance claim help. One local crew covers your whole exterior — honest work at fair prices, backed by free inspections.</p>
      <div class="svc-hero__actions">
        <a href="/contact/" class="btn btn-primary btn-lg">Get a Free Estimate</a>
        <a href="#service-list" class="btn btn-ghost btn-lg">Browse All Services</a>
      </div>
    </div>
  </div>
</section>

<!-- Ticker strip -->
<div class="ticker-strip" aria-hidden="true">
  <div class="ticker-track">
    <?php
    $tickerItems = [
        'Roof Repair &amp; Replacement', '24/7 Storm Damage', 'Gutters &amp; Downspouts',
        'Metal &amp; Asphalt Roofing', 'Siding Installation', 'Insurance Claim Help',
        'Free Inspections', 'Serving AR • OK • MO', 'Licensed &amp; Insured',
    ];
    for ($i = 0; $i < 2; $i++):
        foreach ($tickerItems as $t): ?>
          <span><?php echo $t; ?> &nbsp;•&nbsp;</span>
    <?php endforeach; endfor; ?>
  </div>
</div>

<!-- Wave divider into services -->
<div class="section-divider section-divider--wave" aria-hidden="true">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none"><path d="M0,32 C240,64 480,0 720,16 C960,32 1200,64 1440,24 L1440,60 L0,60 Z"></path></svg>
</div>

<!-- =====================================================================
     SERVICES GRID (required component)
     ===================================================================== -->
<section id="service-list" class="services-section" aria-label="JBL Roofing services in Fort Smith">
  <div class="container">
    <div class="section-header reveal-up">
      <span class="section-subtitle">What We Do</span>
      <h2>Which <span class="text-accent">roofing services</span> can you book in Fort Smith?</h2>
      <p class="hero-answer">JBL Roofing LLC groups its full lineup into five focused service areas. Every one starts with a free inspection and a clear written estimate — pick the service that fits your project, or ask us and we'll point you the right way.</p>
    </div>

    <div class="services-grid">
      <?php foreach ($serviceCards as $c): ?>
      <article class="service-card-with-image card-tint-<?php echo $c['tint']; ?> reveal-up reveal-delay-<?php echo $c['delay']; ?>">
        <div class="service-card__image">
          <img src="<?php echo htmlspecialchars($c['photo']); ?>"
               sizes="(max-width: 600px) 100vw, (max-width: 1024px) 50vw, 380px"
               alt="<?php echo htmlspecialchars($c['name'] . ' by JBL Roofing LLC in Fort Smith, AR'); ?>"
               width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><?php echo icon($c['icon'], 26); ?></div>
          <h3><?php echo htmlspecialchars($c['name']); ?></h3>
          <p class="service-card__desc"><?php echo htmlspecialchars($c['desc']); ?></p>
          <ul>
            <?php foreach ($c['bullets'] as $b): ?>
              <li><?php echo htmlspecialchars($b); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/services/<?php echo htmlspecialchars($c['slug']); ?>/" class="service-card__cta">Learn more</a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- =====================================================================
     WHY JBL (pillars)
     ===================================================================== -->
<section class="pillars-section" aria-label="Why choose JBL Roofing">
  <div class="container">
    <div class="section-header reveal-up">
      <span class="section-subtitle">The JBL Difference</span>
      <h2>Why do Fort Smith homeowners hire <span class="text-accent">one crew</span> for everything?</h2>
      <p class="hero-answer">Because handoffs are where roofing projects go wrong. JBL Roofing LLC keeps your roof, gutters, siding, and storm repairs under one accountable local team — so nothing falls through the cracks and one number reaches the people doing the work.</p>
    </div>

    <div class="pillars-list">
      <?php foreach ($pillars as $p): ?>
      <div class="pillar-row reveal-up">
        <div class="pillar-icon"><?php echo icon($p['icon'], 28); ?></div>
        <div class="pillar-body">
          <h3><?php echo htmlspecialchars($p['title']); ?></h3>
          <p><?php echo htmlspecialchars($p['text']); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Mid-page CTA banner -->
<section class="cta-banner" aria-label="Free estimate call to action">
  <div class="container">
    <h2 class="reveal-up">Not sure which service you need?</h2>
    <p class="reveal-up reveal-delay-1">Tell us what's going on with your roof and JBL Roofing LLC will take a free look, explain your options in plain language, and give you a written estimate — no pressure, no obligation.</p>
    <a href="/contact/" class="btn btn-outline-white btn-lg reveal-up reveal-delay-2">Book a Free Inspection</a>
  </div>
</section>

<!-- =====================================================================
     FAQ
     ===================================================================== -->
<section class="faq-section" aria-label="Frequently asked questions about JBL Roofing services">
  <div class="container">
    <div class="section-header reveal-up">
      <span class="section-subtitle">Good Questions</span>
      <h2>What do homeowners ask about our <span class="text-accent">Fort Smith services</span>?</h2>
      <p class="hero-answer">Quick answers on what we offer, emergencies, service area, and estimates — straight from a local roofer.</p>
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

<!-- Angle divider into closing CTA -->
<div class="section-divider section-divider--angle" aria-hidden="true">
  <svg viewBox="0 0 1440 50" preserveAspectRatio="none"><path d="M0,0 L1440,50 L1440,50 L0,50 Z"></path></svg>
</div>

<!-- =====================================================================
     CLOSING CTA
     ===================================================================== -->
<section class="closing-cta" aria-label="Get your free roofing estimate">
  <div class="container">
    <h2 class="reveal-up">Want one local crew for your whole roof?</h2>
    <p class="reveal-up reveal-delay-1">From a small leak to a full replacement, JBL Roofing LLC treats your Fort Smith home like our own — Built Tough. Built Right.</p>
    <a href="/contact/" class="btn btn-outline-white btn-lg reveal-up reveal-delay-2">Get My Free Estimate</a>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
