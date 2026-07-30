<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ---------------------------------------------------------------------------
 * PAGE-LEVEL SETUP — Seasonal Services (group page, 3 services)
 * ------------------------------------------------------------------------- */
$currentPage = 'services';

$groupSlug       = 'seasonal-services';
$pageTitle       = 'Seasonal Services in Fort Smith, AR — Gutters, Metal Roofing & Maintenance | ' . $siteName;
$pageDescription = 'JBL Roofing LLC handles gutter installation, metal roofing, and preventive roof maintenance in Fort Smith, AR — keeping your roof storm-ready year-round. Licensed, insured, free estimates.';
$canonicalUrl    = $siteUrl . '/services/' . $groupSlug . '/';
$ogType          = 'website';

$imgBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/jbl-roofing-llc/photos/';
$photos = [
    'hero'        => $imgBase . '1785371131896-afguij-IMG_2806.jpeg',
    'gutters'     => $imgBase . '1785371126320-k4kjaq-IMG_4587.jpeg',
    'metal'       => $imgBase . '1785371128999-7fb5tb-IMG_4591.jpeg',
    'maintenance' => $imgBase . '1785371133543-80u1r3-IMG_4564.jpeg',
    'rel1'        => $imgBase . '1785371119407-ivl8mo-IMG_3492.jpeg',
    'rel2'        => $imgBase . '1785371127618-ndtvms-IMG_4588.jpeg',
    'rel3'        => $imgBase . '1785371124660-vir8wt-IMG_4572.jpeg',
];

$ogImage          = $photos['hero'];
$heroImagePreload = $photos['hero'];

/* The 3 services in this group — cards anchor to on-page detail blocks */
$groupServices = [
    [
        'name' => 'Gutter Installation & Downspout Services', 'anchor' => 'gutters', 'icon' => 'ruler', 'photo' => $photos['gutters'],
        'desc' => 'Seamless gutters and downspouts that route water away from your foundation.',
        'bullets' => ['Seamless custom-fit gutters', 'Proper downspout drainage', 'Foundation protection'], 'tint' => 1,
    ],
    [
        'name' => 'Metal Roofing Services', 'anchor' => 'metal', 'icon' => 'shield-check', 'photo' => $photos['metal'],
        'desc' => 'Standing-seam and panel metal roofing built for hail, wind, and longevity.',
        'bullets' => ['Superior hail & wind resistance', 'Energy-efficient performance', 'Decades of service life'], 'tint' => 2,
    ],
    [
        'name' => 'Roof Maintenance Services', 'anchor' => 'maintenance', 'icon' => 'wrench', 'photo' => $photos['maintenance'],
        'desc' => 'Preventive tune-ups that catch small problems before they get expensive.',
        'bullets' => ['Scheduled inspections', 'Sealant & flashing checks', 'Extended roof lifespan'], 'tint' => 3,
    ],
];

$faqs = [
    ['q' => 'Why are seamless gutters worth it for a Fort Smith home?',              'a' => 'Seamless gutters have far fewer joints than sectional gutters, so there are fewer places to leak, clog, or pull apart. JBL Roofing LLC custom-forms them to fit your roofline, which channels Arkansas downpours away from your foundation and helps prevent basement seepage, fascia rot, and erosion.'],
    ['q' => 'How often should gutters be cleaned or serviced in Arkansas?',          'a' => 'Most Fort Smith homes need gutter service at least twice a year — once in late spring and again in late fall after the leaves drop. Homes with heavy tree cover may need it more often. JBL Roofing LLC checks the downspouts and fasteners at the same time to keep the whole system flowing.'],
    ['q' => 'Is a metal roof worth the extra cost in Fort Smith?',                   'a' => 'For many homeowners, yes. Metal roofing resists hail and high wind better than shingles, sheds water fast, reflects heat to lower cooling bills, and can last 40 to 60 years. JBL Roofing LLC helps you weigh the higher upfront cost against decades of durability and lower maintenance.'],
    ['q' => 'What does a roof maintenance visit include?',                           'a' => 'A JBL Roofing LLC maintenance visit includes a full roof inspection, sealant and flashing checks, clearing of debris, and a written report of any developing issues. Catching a lifted shingle or cracked boot early is far cheaper than repairing the water damage it would cause months later.'],
    ['q' => 'When is the best time to schedule seasonal roof work?',                 'a' => 'Spring and fall are ideal for gutters and maintenance — before storm season and before winter. Metal roofing can be installed year-round in our climate. JBL Roofing LLC recommends booking maintenance before the busy post-storm rush so your roof is ready when the weather turns.'],
];

/* Related services (other group pages) — required services component, 3 cards */
$related = [
    ['name' => 'Roofing Services',           'slug' => 'roofing-services',           'icon' => 'home',        'photo' => $photos['rel1'], 'desc' => 'Repairs, replacements, and every major material.',   'bullets' => ['Repair & replace', 'All roof materials', 'Free inspections'],        'tint' => 1],
    ['name' => 'Storm Damage Repair',        'slug' => 'storm-damage-repair',        'icon' => 'shield-check','photo' => $photos['rel2'], 'desc' => 'Wind, hail, and water damage restoration — 24/7.',   'bullets' => ['Emergency response', 'Wind & hail repair', 'Tarping & stabilization'],'tint' => 2],
    ['name' => 'Insurance Claim Assistance', 'slug' => 'insurance-claim-assistance', 'icon' => 'badge-check', 'photo' => $photos['rel3'], 'desc' => 'We document damage and work with your adjuster.',    'bullets' => ['Damage documentation', 'Adjuster coordination', 'Maximized settlement'],'tint' => 3],
];

/* ---------------------------------------------------------------------------
 * SCHEMA — @graph: Service + FAQPage + BreadcrumbList
 * ------------------------------------------------------------------------- */
$serviceSchema = [
    '@type'       => 'Service',
    '@id'         => $canonicalUrl . '#service-' . $groupSlug,
    'name'        => 'Seasonal Roofing Services',
    'serviceType' => 'Gutter installation, metal roofing, and roof maintenance',
    'description' => 'Seamless gutter and downspout installation, metal roofing, and preventive roof maintenance for homes in Fort Smith, AR.',
    'url'         => $canonicalUrl,
    'provider'    => ['@id' => $siteUrl . '#organization'],
    'areaServed'  => [
        '@type' => 'City', 'name' => 'Fort Smith',
        'containedInPlace' => ['@type' => 'State', 'name' => 'Arkansas'],
    ],
    'hasOfferCatalog' => [
        '@type' => 'OfferCatalog',
        'name'  => 'Seasonal Services',
        'itemListElement' => array_map(function ($s) {
            return ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => $s['name']]];
        }, $groupServices),
    ],
];

$breadcrumb = generateBreadcrumbSchema([
    ['name' => 'Home',              'url' => $siteUrl . '/'],
    ['name' => 'Services',          'url' => $siteUrl . '/services/'],
    ['name' => 'Seasonal Services', 'url' => $canonicalUrl],
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
   SEASONAL SERVICES (group page) — page-specific design layer (Premium)
   Tokens only. No hardcoded colors / shadows / spacing.
   ========================================================================= */
.text-accent { color: var(--color-secondary); }
.sr-only { position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip: rect(0,0,0,0); white-space: nowrap; border: 0; }

/* ---- HERO (centered, layered overlay + noise) ---- */
.ss-hero { min-height: 66vh; display: flex; align-items: center; text-align: center; padding-top: var(--space-16); padding-bottom: var(--space-16); }
.ss-hero__overlay {
  position: absolute; inset: 0; z-index: 1;
  background: linear-gradient(150deg, rgba(var(--color-primary-rgb), 0.92) 0%, rgba(var(--color-secondary-rgb), 0.62) 100%);
}
.ss-hero__overlay::after {
  content: ""; position: absolute; inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='3'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.5'/%3E%3C/svg%3E");
  opacity: 0.06; mix-blend-mode: overlay;
}
.ss-hero__inner { position: relative; z-index: 2; max-width: 820px; margin: 0 auto; }
.ss-breadcrumb { display: inline-flex; flex-wrap: wrap; gap: var(--space-2); align-items: center; justify-content: center; color: rgba(255,255,255,0.72); font-size: var(--font-size-sm); margin-bottom: var(--space-5); }
.ss-breadcrumb a { color: rgba(255,255,255,0.72); }
.ss-breadcrumb a:hover { color: var(--color-white); }
.ss-breadcrumb [aria-current] { color: var(--color-secondary); font-weight: 600; }
.ss-eyebrow { display: inline-flex; align-items: center; gap: var(--space-2); color: var(--color-white); background: rgba(var(--color-secondary-rgb), 0.28); border: 1px solid rgba(255,255,255,0.28); padding: var(--space-1) var(--space-4); border-radius: var(--radius-full); font-family: var(--font-heading); font-size: var(--font-size-xs); text-transform: uppercase; letter-spacing: 2px; font-weight: 700; margin-bottom: var(--space-5); }
.ss-hero h1 { color: var(--color-white); font-size: var(--font-size-6xl); line-height: 1.06; margin-bottom: var(--space-5); }
.ss-hero h1 .text-accent { color: var(--color-secondary); }
.ss-hero .hero-answer { color: rgba(255,255,255,0.90); font-size: var(--font-size-lg); line-height: 1.75; max-width: 60ch; margin: 0 auto var(--space-8); }
.ss-hero__actions { display: flex; gap: var(--space-4); justify-content: center; flex-wrap: wrap; }
.ss-hero__actions .btn-ghost { background: rgba(255,255,255,0.08); color: var(--color-white); border-color: rgba(255,255,255,0.5); }
.ss-hero__actions .btn-ghost:hover { background: var(--color-white); color: var(--color-primary); border-color: var(--color-white); }

/* ---- SECTION HEADERS + dividers ---- */
.section-divider { position: relative; line-height: 0; }
.section-divider svg { display: block; width: 100%; height: auto; }
.section-divider--wave path { fill: var(--color-white); }
.section-divider--angle path { fill: var(--color-dark); }
.section-subtitle { display: block; color: var(--color-secondary); font-weight: 700; font-size: var(--font-size-sm); text-transform: uppercase; letter-spacing: 2px; margin-bottom: var(--space-2); }
.section-header h2 .text-accent { color: var(--color-secondary); }
.hero-answer { max-width: 62ch; margin: 0 auto var(--space-4); color: var(--color-gray-dark); font-size: var(--font-size-lg); line-height: 1.7; }
.answer-block { max-width: 70ch; margin: 0 auto var(--space-6); color: var(--color-black); font-size: var(--font-size-lg); line-height: 1.75; padding: var(--space-5) var(--space-6); background: rgba(var(--color-secondary-rgb), 0.07); border-left: 4px solid var(--color-secondary); border-radius: var(--radius-md); }

/* ---- SERVICES GRID (required component) — 3 cards ---- */
.services-section { background: var(--color-white); }
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

/* ---- DETAIL SPLITS ---- */
.detail-section { background: var(--color-light); }
.detail-split { display: grid; grid-template-columns: 3fr 2fr; gap: var(--space-12); align-items: center; margin-bottom: var(--space-16); scroll-margin-top: 90px; }
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
.detail-figure img { width: 100%; border-radius: var(--radius-xl); box-shadow: var(--shadow-lg); object-fit: cover; aspect-ratio: 4 / 3; }
.detail-figure::before { content: ""; position: absolute; inset: calc(-1 * var(--space-5)) calc(-1 * var(--space-5)) auto auto; width: 110px; height: 110px; border-radius: var(--radius-lg); border: 3px solid var(--color-secondary); z-index: -1; }

/* ---- SEASON STRIP (signature section) ---- */
.season-section { background: var(--color-dark); position: relative; }
.season-section .section-header h2 { color: var(--color-white); }
.season-section .section-header p { color: rgba(255,255,255,0.7); }
.season-section .section-subtitle { color: var(--color-secondary); }
.season-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: var(--space-6); }
.season-card { background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.10); border-radius: var(--radius-lg); padding: var(--space-6); transition: transform var(--transition-base), border-color var(--transition-base); }
.season-card:hover { transform: translateY(-4px); border-color: rgba(var(--color-secondary-rgb), 0.6); }
.season-card .s-tag { color: var(--color-secondary); font-family: var(--font-heading); font-weight: 800; font-size: var(--font-size-sm); text-transform: uppercase; letter-spacing: 1px; }
.season-card h3 { color: var(--color-white); font-size: var(--font-size-lg); margin: var(--space-2) 0; }
.season-card p { color: rgba(255,255,255,0.72); font-size: var(--font-size-sm); line-height: 1.7; margin: 0; }

/* ---- FAQ ---- */
.faq-section { background: var(--color-white); }
.faq-grid { grid-template-columns: repeat(2, 1fr); gap: var(--space-6); }
.faq-item { background: var(--color-light); align-items: flex-start; }
.faq-icon { background: var(--color-secondary); }
.faq-item h3 { color: var(--color-primary); font-size: var(--font-size-base); }

/* ---- RELATED ---- */
.related-section { background: var(--color-light); }

/* ---- CLOSING CTA ---- */
.closing-cta { background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 120%); }
.closing-cta .container { position: relative; z-index: 1; text-align: center; }
.closing-cta h2 { color: var(--color-white); font-size: var(--font-size-5xl); margin-bottom: var(--space-4); }
.closing-cta p { color: rgba(255,255,255,0.9); max-width: 52ch; margin: 0 auto var(--space-8); font-size: var(--font-size-lg); }

/* ---- RESPONSIVE ---- */
@media (max-width: 1024px) {
  .services-grid { grid-template-columns: 1fr; }
  .detail-split, .detail-split--reverse { grid-template-columns: 1fr; gap: var(--space-8); }
  .detail-split--reverse .detail-copy, .detail-split--reverse .detail-figure { order: 0; }
  .season-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
  .ss-hero h1 { font-size: var(--font-size-4xl); }
  .faq-grid { grid-template-columns: 1fr; }
}
@media (max-width: 600px) {
  .season-grid { grid-template-columns: 1fr; }
}
</style>

<!-- =====================================================================
     HERO
     ===================================================================== -->
<section class="hero ss-hero" style="background-image: url('<?php echo htmlspecialchars($photos['hero']); ?>');" aria-label="Seasonal roofing services in Fort Smith">
  <div class="ss-hero__overlay"></div>
  <div class="container">
    <div class="ss-hero__inner">
      <nav class="ss-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a><span aria-hidden="true">/</span>
        <a href="/services/">Services</a><span aria-hidden="true">/</span>
        <span aria-current="page">Seasonal Services</span>
      </nav>
      <span class="ss-eyebrow"><?php echo icon('calendar', 16); ?> Year-Round Roof Care</span>
      <h1>Seasonal <span class="text-accent">Services</span> in Fort Smith, AR</h1>
      <p class="hero-answer">JBL Roofing LLC keeps Fort Smith roofs storm-ready all year with seamless gutter and downspout installation, durable metal roofing, and preventive roof maintenance. Stay ahead of Arkansas weather with one local, licensed, and insured crew — starting with a free inspection.</p>
      <div class="ss-hero__actions">
        <a href="/contact/" class="btn btn-primary btn-lg">Get a Free Estimate</a>
        <a href="#services" class="btn btn-ghost btn-lg">See Seasonal Services</a>
      </div>
    </div>
  </div>
</section>

<!-- Wave divider -->
<div class="section-divider section-divider--wave" aria-hidden="true">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none"><path d="M0,32 C240,64 480,0 720,16 C960,32 1200,64 1440,24 L1440,60 L0,60 Z"></path></svg>
</div>

<!-- =====================================================================
     SERVICES GRID (required component)
     ===================================================================== -->
<section id="services" class="services-section" aria-label="Seasonal services offered">
  <div class="container">
    <div class="section-header reveal-up">
      <span class="section-subtitle">What We Do</span>
      <h2>Which <span class="text-accent">seasonal services</span> keep a Fort Smith roof ready?</h2>
      <p class="answer-block">JBL Roofing LLC offers three seasonal services in Fort Smith, AR: seamless gutter and downspout installation to control water, metal roofing for long-term hail and wind resistance, and preventive roof maintenance that catches small issues before they become costly repairs.</p>
    </div>
    <div class="services-grid">
      <?php foreach ($groupServices as $c): ?>
      <article class="service-card-with-image card-tint-<?php echo $c['tint']; ?> reveal-up reveal-delay-<?php echo $c['tint']; ?>">
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
          <a href="#<?php echo htmlspecialchars($c['anchor']); ?>" class="service-card__cta">Learn more</a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- =====================================================================
     DETAIL SPLITS
     ===================================================================== -->
<section class="detail-section" aria-label="Seasonal service details">
  <div class="container">

    <!-- Gutters -->
    <div id="gutters" class="detail-split reveal-up">
      <div class="detail-copy">
        <h2>Why does JBL install <span class="text-accent">seamless gutters</span>?</h2>
        <p class="answer-block">JBL Roofing LLC installs seamless, custom-formed gutters and downspouts because they leak and clog far less than sectional gutters. Routing Fort Smith's heavy rain away from your foundation protects against basement seepage, fascia rot, and soil erosion — problems that cost far more than the gutters themselves.</p>
        <p>We measure your roofline, form the gutter on site for an exact fit, and set the downspouts to discharge well clear of the foundation. Add gutter guards and you cut cleanings dramatically, even under Arkansas's heavy tree cover.</p>
        <ul class="detail-list">
          <li><?php echo icon('check-circle', 20); ?> Custom-formed seamless runs</li>
          <li><?php echo icon('check-circle', 20); ?> Correctly placed downspouts</li>
          <li><?php echo icon('check-circle', 20); ?> Optional leaf-guard protection</li>
        </ul>
      </div>
      <div class="detail-figure">
        <img src="<?php echo htmlspecialchars($photos['gutters']); ?>" sizes="(max-width: 1024px) 100vw, 460px"
             alt="Seamless gutters and downspouts installed by JBL Roofing LLC in Fort Smith, Arkansas" width="640" height="480" loading="lazy">
      </div>
    </div>

    <!-- Metal -->
    <div id="metal" class="detail-split detail-split--reverse reveal-up">
      <div class="detail-copy">
        <h2>Is <span class="text-accent">metal roofing</span> a smart choice in Arkansas?</h2>
        <p class="answer-block">Metal roofing is one of the toughest options for Fort Smith's hail and wind. JBL Roofing LLC installs standing-seam and panel metal that sheds water fast, reflects summer heat to trim cooling bills, and can last 40 to 60 years — often outliving two or three shingle roofs.</p>
        <p>The upfront cost is higher than asphalt, but the long service life, storm resistance, and lower maintenance make metal a strong value for homeowners planning to stay. We help you weigh the numbers honestly so the choice fits your budget and how long you'll be in the home.</p>
        <ul class="detail-list">
          <li><?php echo icon('check-circle', 20); ?> Standing-seam &amp; panel systems</li>
          <li><?php echo icon('check-circle', 20); ?> Superior hail &amp; wind resistance</li>
          <li><?php echo icon('check-circle', 20); ?> Energy-reflective, long-lasting finish</li>
        </ul>
      </div>
      <div class="detail-figure">
        <img src="<?php echo htmlspecialchars($photos['metal']); ?>" sizes="(max-width: 1024px) 100vw, 460px"
             alt="Metal roofing installed by JBL Roofing LLC on a Fort Smith, Arkansas home" width="640" height="480" loading="lazy">
      </div>
    </div>

    <!-- Maintenance -->
    <div id="maintenance" class="detail-split reveal-up">
      <div class="detail-copy">
        <h2>What does <span class="text-accent">roof maintenance</span> actually catch?</h2>
        <p class="answer-block">Preventive maintenance catches the small stuff — lifted shingles, cracked pipe boots, failing sealant, and clogged valleys — before it turns into interior water damage. JBL Roofing LLC inspects the whole roof, makes minor fixes on the spot, and gives you a written report so nothing sneaks up on you.</p>
        <p>Regular tune-ups are the cheapest way to protect a roof and extend its service life. Homeowners who maintain their roofs avoid most emergency repairs and get more years out of the roof they already paid for.</p>
        <ul class="detail-list">
          <li><?php echo icon('check-circle', 20); ?> Full inspection with written report</li>
          <li><?php echo icon('check-circle', 20); ?> Sealant, flashing &amp; boot checks</li>
          <li><?php echo icon('check-circle', 20); ?> Minor fixes handled on the spot</li>
        </ul>
      </div>
      <div class="detail-figure">
        <img src="<?php echo htmlspecialchars($photos['maintenance']); ?>" sizes="(max-width: 1024px) 100vw, 460px"
             alt="JBL Roofing LLC performing preventive roof maintenance in Fort Smith, Arkansas" width="640" height="480" loading="lazy">
      </div>
    </div>

  </div>
</section>

<!-- =====================================================================
     SEASON STRIP (signature dark section)
     ===================================================================== -->
<section class="season-section" aria-label="Seasonal roof care calendar">
  <div class="container">
    <div class="section-header reveal-up">
      <span class="section-subtitle">Year-Round Plan</span>
      <h2>When should you schedule each type of roof work?</h2>
      <p>A simple seasonal rhythm keeps your Fort Smith roof ahead of the weather instead of reacting to it.</p>
    </div>
    <div class="season-grid">
      <div class="season-card reveal-up reveal-delay-1"><span class="s-tag">Spring</span><h3>Gutters &amp; Inspection</h3><p>Clear winter debris, check seals, and get ahead of storm season with a full inspection.</p></div>
      <div class="season-card reveal-up reveal-delay-2"><span class="s-tag">Summer</span><h3>Metal &amp; Upgrades</h3><p>Ideal window for metal roof installs and energy-efficient upgrades before peak heat bills.</p></div>
      <div class="season-card reveal-up reveal-delay-3"><span class="s-tag">Fall</span><h3>Maintenance</h3><p>Post-leaf gutter service and a preventive tune-up so small issues don't overwinter.</p></div>
      <div class="season-card reveal-up reveal-delay-4"><span class="s-tag">Winter</span><h3>Storm Response</h3><p>Fast repairs and tarping when ice, wind, or hail hits — 24/7 emergency coverage.</p></div>
    </div>
  </div>
</section>

<!-- Mid-page CTA banner -->
<section class="cta-banner" aria-label="Seasonal service estimate">
  <div class="container">
    <h2 class="reveal-up">Is your roof ready before the next storm?</h2>
    <p class="reveal-up reveal-delay-1">Gutters, metal roofing, or a preventive tune-up — JBL Roofing LLC will inspect your Fort Smith roof for free and tell you exactly what it needs to stay ahead of Arkansas weather.</p>
    <a href="/contact/" class="btn btn-outline-white btn-lg reveal-up reveal-delay-2">Book a Free Inspection</a>
  </div>
</section>

<!-- =====================================================================
     FAQ
     ===================================================================== -->
<section class="faq-section" aria-label="Seasonal services frequently asked questions">
  <div class="container">
    <div class="section-header reveal-up">
      <span class="section-subtitle">Good Questions</span>
      <h2>Have questions about <span class="text-accent">seasonal roof care</span>?</h2>
      <p class="hero-answer">Straight answers on gutters, metal roofing, maintenance schedules, and timing.</p>
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
      <h2>What else can <span class="text-accent">JBL Roofing</span> take care of?</h2>
      <p class="hero-answer">Seasonal work often pairs with repairs, storm restoration, and claims. One local crew handles all of it.</p>
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
<section class="closing-cta" aria-label="Get your free seasonal service estimate">
  <div class="container">
    <h2 class="reveal-up">Ready to keep your roof one step ahead?</h2>
    <p class="reveal-up reveal-delay-1">Seamless gutters, a lasting metal roof, or a simple tune-up — JBL Roofing LLC treats your Fort Smith home like our own. Built Tough. Built Right.</p>
    <a href="/contact/" class="btn btn-outline-white btn-lg reveal-up reveal-delay-2">Get My Free Estimate</a>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
