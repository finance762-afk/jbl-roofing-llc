<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ---------------------------------------------------------------------------
 * PAGE-LEVEL SETUP — Storm Damage Repair (solo, editorial)
 * ------------------------------------------------------------------------- */
$currentPage = 'services';

$slugSelf        = 'storm-damage-repair';
$pageTitle       = 'Storm Damage Roof Repair in Fort Smith, AR — 24/7 | ' . $siteName;
$pageDescription = 'JBL Roofing LLC provides 24/7 storm damage roof repair in Fort Smith, AR — wind, hail, and water damage restoration with insurance claim help. Licensed, insured, fast response.';
$canonicalUrl    = $siteUrl . '/services/' . $slugSelf . '/';
$ogType          = 'website';

$imgBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/jbl-roofing-llc/photos/';
$photos = [
    'hero'   => $imgBase . '1785371126320-k4kjaq-IMG_4587.jpeg',
    'expert' => $imgBase . '1785371135054-yi0d8g-IMG_4571.jpeg',
    'work'   => $imgBase . '1785371124660-vir8wt-IMG_4572.jpeg',
    'rel1'   => $imgBase . '1785371119407-ivl8mo-IMG_3492.jpeg',
    'rel2'   => $imgBase . '1785371128999-7fb5tb-IMG_4591.jpeg',
    'rel3'   => $imgBase . '1785371133543-80u1r3-IMG_4564.jpeg',
];

$ogImage          = $photos['hero'];
$heroImagePreload = $photos['hero'];

$damageTypes = [
    ['icon' => 'shield-check', 'title' => 'Hail Damage',  'text' => 'Bruised or fractured shingles and dented metal that quietly shorten your roof\'s life.'],
    ['icon' => 'wrench',       'title' => 'Wind Damage',  'text' => 'Lifted, creased, or torn-off shingles and loosened flashing after high-wind gusts.'],
    ['icon' => 'home',         'title' => 'Water Intrusion','text' => 'Active leaks, soaked decking, and ceiling stains that spread fast once water gets in.'],
    ['icon' => 'hammer',       'title' => 'Debris Impact', 'text' => 'Punctures and cracks from fallen limbs and windblown debris during Arkansas storms.'],
];

$afterSteps = [
    ['n' => '01', 'title' => 'Stay Safe & Call',       'text' => 'Keep clear of downed lines and sagging areas, then call JBL Roofing LLC for 24/7 response.'],
    ['n' => '02', 'title' => 'Emergency Stabilization', 'text' => 'We tarp openings and stop active leaks to prevent further interior damage right away.'],
    ['n' => '03', 'title' => 'Documented Assessment',   'text' => 'We photograph every point of damage for your records and your insurance claim.'],
    ['n' => '04', 'title' => 'Permanent Repair',        'text' => 'Once the claim is set, we complete the full repair or replacement to restore your roof.'],
];

$included = [
    'Rapid 24/7 emergency response for active leaks and storm damage',
    'Emergency tarping and leak stabilization to stop further damage',
    'Full hail, wind, and water damage assessment with photo documentation',
    'Direct coordination with your insurance adjuster on the roof',
    'Permanent repair or full replacement in matching materials',
    'Complete cleanup, nail sweep, and debris haul-away',
];

$faqs = [
    ['q' => 'Do you offer 24/7 emergency storm damage repair in Fort Smith?',        'a' => 'Yes. JBL Roofing LLC responds around the clock to storm damage in Fort Smith. When wind, hail, or falling debris opens up your roof, we come out fast to tarp the openings and stabilize active leaks, then schedule the permanent repair so interior damage doesn\'t keep spreading.'],
    ['q' => 'How soon after a storm should I have my roof inspected?',               'a' => 'As soon as it is safe. Hail and wind damage is often invisible from the ground but still shortens your roof\'s life and can void coverage if left too long. JBL Roofing LLC offers free post-storm assessments in Fort Smith and documents everything you need for a timely insurance claim.'],
    ['q' => 'Will insurance cover my storm-damaged roof?',                           'a' => 'Most homeowners policies cover sudden hail and wind damage. JBL Roofing LLC documents the damage with photos, meets your adjuster on the roof, and explains the scope in plain language. We can\'t guarantee an outcome, but thorough documentation gives your claim its best chance.'],
    ['q' => 'What should I do right after storm damage?',                            'a' => 'Stay clear of downed power lines and sagging roof areas, then call JBL Roofing LLC. We handle emergency tarping and leak control first, document the damage for your claim, and walk you through the repair process — you don\'t have to sort it out alone.'],
    ['q' => 'Can hail damage really shorten my roof\'s life?',                        'a' => 'Yes. Hail can bruise or fracture shingles and knock protective granules loose without an obvious hole, which accelerates aging and leaks months later. JBL Roofing LLC inspects for this hidden damage after Fort Smith storms so it gets documented and repaired before it becomes a bigger problem.'],
    ['q' => 'Are you licensed and insured for storm restoration work?',              'a' => 'Yes. JBL Roofing LLC is a licensed, insured, and bonded roofing contractor based in Fort Smith, AR. Storm restoration is core to what we do, and every emergency and permanent repair is backed by that coverage and our workmanship commitment.'],
];

$related = [
    ['name' => 'Roofing Services',           'slug' => 'roofing-services',           'icon' => 'home',       'photo' => $photos['rel1'], 'desc' => 'Repairs, replacements, and every major material.',   'bullets' => ['Repair & replace', 'All roof materials', 'Free inspections'],         'tint' => 1],
    ['name' => 'Seasonal Services',          'slug' => 'seasonal-services',          'icon' => 'wrench',     'photo' => $photos['rel2'], 'desc' => 'Gutters, metal roofing, and roof maintenance.',     'bullets' => ['Seamless gutters', 'Metal roof installs', 'Preventive care'],          'tint' => 2],
    ['name' => 'Insurance Claim Assistance', 'slug' => 'insurance-claim-assistance', 'icon' => 'badge-check','photo' => $photos['rel3'], 'desc' => 'We document damage and work with your adjuster.',    'bullets' => ['Damage documentation', 'Adjuster coordination', 'Maximized settlement'],'tint' => 3],
];

/* ---------------------------------------------------------------------------
 * SCHEMA — @graph: Service + FAQPage + BreadcrumbList
 * ------------------------------------------------------------------------- */
$serviceSchema = [
    '@type'       => 'Service',
    '@id'         => $canonicalUrl . '#service-' . $slugSelf,
    'name'        => 'Storm Damage Roof Repair',
    'serviceType' => 'Storm damage roof repair and restoration',
    'description' => '24/7 storm damage roof repair in Fort Smith, AR — wind, hail, and water damage restoration, emergency tarping, and insurance claim documentation.',
    'url'         => $canonicalUrl,
    'provider'    => ['@id' => $siteUrl . '#organization'],
    'areaServed'  => ['@type' => 'City', 'name' => 'Fort Smith', 'containedInPlace' => ['@type' => 'State', 'name' => 'Arkansas']],
];

$breadcrumb = generateBreadcrumbSchema([
    ['name' => 'Home',     'url' => $siteUrl . '/'],
    ['name' => 'Services', 'url' => $siteUrl . '/services/'],
    ['name' => 'Storm Damage Repair', 'url' => $canonicalUrl],
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
   STORM DAMAGE (solo, editorial) — page-specific design layer (Premium)
   Tokens only. No hardcoded colors / shadows / spacing.
   ========================================================================= */
.text-accent { color: var(--color-secondary); }
.sr-only { position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip: rect(0,0,0,0); white-space: nowrap; border: 0; }

/* ---- HERO ---- */
.stm-hero { min-height: 76vh; display: flex; align-items: center; text-align: left; padding-top: var(--space-16); padding-bottom: var(--space-16); }
.stm-hero__overlay { position: absolute; inset: 0; z-index: 1; background: linear-gradient(120deg, rgba(var(--color-primary-rgb), 0.96) 0%, rgba(var(--color-primary-rgb), 0.82) 50%, rgba(var(--color-secondary-rgb), 0.5) 100%); }
.stm-hero__overlay::after { content: ""; position: absolute; inset: 0; background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='3'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.5'/%3E%3C/svg%3E"); opacity: 0.06; mix-blend-mode: overlay; }
.stm-hero__inner { position: relative; z-index: 2; max-width: 760px; }
.stm-breadcrumb { display: flex; flex-wrap: wrap; gap: var(--space-2); align-items: center; color: rgba(255,255,255,0.72); font-size: var(--font-size-sm); margin-bottom: var(--space-5); }
.stm-breadcrumb a { color: rgba(255,255,255,0.72); }
.stm-breadcrumb a:hover { color: var(--color-white); }
.stm-breadcrumb [aria-current] { color: var(--color-secondary); font-weight: 600; }
.stm-eyebrow { display: inline-flex; align-items: center; gap: var(--space-2); color: var(--color-white); background: rgba(var(--color-secondary-rgb), 0.30); border: 1px solid rgba(255,255,255,0.28); padding: var(--space-1) var(--space-4); border-radius: var(--radius-full); font-family: var(--font-heading); font-size: var(--font-size-xs); text-transform: uppercase; letter-spacing: 2px; font-weight: 700; margin-bottom: var(--space-5); }
.stm-hero h1 { color: var(--color-white); font-size: var(--font-size-6xl); line-height: 1.05; margin-bottom: var(--space-5); }
.stm-hero h1 .text-accent { color: var(--color-secondary); }
.stm-hero .hero-answer { color: rgba(255,255,255,0.90); font-size: var(--font-size-lg); line-height: 1.75; max-width: 58ch; margin: 0 0 var(--space-8); }
.stm-hero__actions { display: flex; gap: var(--space-4); flex-wrap: wrap; margin-bottom: var(--space-8); }
.stm-hero__actions .btn-ghost { background: rgba(255,255,255,0.08); color: var(--color-white); border-color: rgba(255,255,255,0.5); }
.stm-hero__actions .btn-ghost:hover { background: var(--color-white); color: var(--color-primary); border-color: var(--color-white); }
.stm-hero__trust { display: flex; flex-wrap: wrap; gap: var(--space-3) var(--space-6); list-style: none; }
.stm-hero__trust li { display: flex; align-items: center; gap: var(--space-2); color: rgba(255,255,255,0.92); font-size: var(--font-size-sm); font-weight: 600; }
.stm-hero__trust li svg { color: var(--color-secondary); flex-shrink: 0; }

/* ---- EMERGENCY BANNER (signature) ---- */
.emergency-strip { background: var(--color-secondary); padding: var(--space-6) 0; }
.emergency-strip .container { display: flex; align-items: center; justify-content: center; gap: var(--space-4); flex-wrap: wrap; text-align: center; }
.emergency-strip .e-ic { width: 44px; height: 44px; border-radius: var(--radius-full); background: rgba(255,255,255,0.2); color: var(--color-white); display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
.emergency-strip p { color: var(--color-white); font-family: var(--font-heading); font-weight: 700; font-size: var(--font-size-lg); margin: 0; }
.emergency-strip a { color: var(--color-white); text-decoration: underline; }

/* ---- Shared editorial atoms ---- */
.section-divider { position: relative; line-height: 0; }
.section-divider svg { display: block; width: 100%; height: auto; }
.section-divider--wave path { fill: var(--color-white); }
.section-divider--angle path { fill: var(--color-dark); }
.section-subtitle { display: block; color: var(--color-secondary); font-weight: 700; font-size: var(--font-size-sm); text-transform: uppercase; letter-spacing: 2px; margin-bottom: var(--space-2); }
.section-header h2 .text-accent { color: var(--color-secondary); }
.hero-answer { max-width: 62ch; margin: 0 auto var(--space-4); color: var(--color-gray-dark); font-size: var(--font-size-lg); line-height: 1.7; }
.answer-block { color: var(--color-black); font-size: var(--font-size-lg); line-height: 1.75; padding: var(--space-5) var(--space-6); background: rgba(var(--color-secondary-rgb), 0.07); border-left: 4px solid var(--color-secondary); border-radius: var(--radius-md); margin-bottom: var(--space-6); }

/* ---- DAMAGE TYPES (problem, bento) ---- */
.damage-section { background: var(--color-white); }
.pull-quote { max-width: 900px; margin: 0 auto var(--space-12); text-align: center; }
.pull-quote p { font-family: var(--font-heading); font-style: italic; font-weight: 700; color: var(--color-primary); font-size: clamp(1.5rem, 3vw, 2.5rem); line-height: 1.3; }
.pull-quote p .text-accent { color: var(--color-secondary); }
.damage-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: var(--space-6); }
.damage-card { padding: var(--space-8) var(--space-6); background: var(--color-light); border-radius: var(--radius-lg); border-bottom: 4px solid var(--color-secondary); }
.damage-card:nth-child(even) { border-bottom-color: var(--color-primary); background: rgba(var(--color-secondary-rgb), 0.06); }
.damage-ic { width: 48px; height: 48px; border-radius: var(--radius-md); background: rgba(var(--color-secondary-rgb), 0.14); color: var(--color-secondary); display: flex; align-items: center; justify-content: center; margin-bottom: var(--space-4); }
.damage-card h3 { color: var(--color-primary); font-size: var(--font-size-lg); margin-bottom: var(--space-2); }
.damage-card p { color: var(--color-gray-dark); font-size: var(--font-size-sm); line-height: 1.65; margin: 0; }

/* ---- EXPERT POSITIONING ---- */
.expert-section { background: var(--color-light); }
.expert-grid { display: grid; grid-template-columns: 4fr 5fr; gap: var(--space-16); align-items: center; }
.expert-grid--reverse .expert-copy { order: 2; }
.expert-grid--reverse .expert-figure { order: 1; }
.expert-copy h2 { color: var(--color-primary); font-size: clamp(2rem, 4vw, 3rem); margin-bottom: var(--space-4); }
.expert-copy h2 .text-accent { color: var(--color-secondary); }
.expert-copy p { color: var(--color-gray-dark); line-height: 1.8; margin-bottom: var(--space-4); }
.expert-stats { display: grid; grid-template-columns: repeat(2, 1fr); gap: var(--space-6); margin-top: var(--space-8); }
.expert-stat { background: var(--color-white); border-radius: var(--radius-lg); padding: var(--space-6); box-shadow: var(--shadow-sm); border-left: 4px solid var(--color-secondary); }
.expert-stat .big { font-family: var(--font-heading); font-size: var(--font-size-4xl); font-weight: 800; color: var(--color-primary); line-height: 1; }
.expert-stat .lbl { font-size: var(--font-size-sm); color: var(--color-gray); margin-top: var(--space-2); }
.expert-figure { position: relative; }
.expert-figure img { width: 100%; border-radius: var(--radius-xl); box-shadow: var(--shadow-lg); object-fit: cover; aspect-ratio: 4 / 5; }
.expert-figure::after { content: ""; position: absolute; inset: calc(-1 * var(--space-5)) auto auto calc(-1 * var(--space-5)); width: 130px; height: 130px; border-radius: var(--radius-lg); border: 3px solid var(--color-secondary); z-index: -1; }

/* ---- AFTER-STORM STEPS (dark signature) ---- */
.steps-section { background: var(--color-dark); }
.steps-section .section-header h2 { color: var(--color-white); }
.steps-section .section-header p { color: rgba(255,255,255,0.7); }
.steps-section .section-subtitle { color: var(--color-secondary); }
.steps-flow { display: grid; grid-template-columns: repeat(4, 1fr); gap: var(--space-6); }
.step-node { position: relative; padding: var(--space-6); background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.10); border-radius: var(--radius-lg); }
.step-node .step-num { font-family: var(--font-heading); font-size: var(--font-size-3xl); font-weight: 800; color: var(--color-secondary); line-height: 1; }
.step-node h3 { color: var(--color-white); font-size: var(--font-size-lg); margin: var(--space-2) 0; }
.step-node p { color: rgba(255,255,255,0.72); font-size: var(--font-size-sm); line-height: 1.6; margin: 0; }

/* ---- BREAKDOWN ---- */
.breakdown-section { background: var(--color-white); }
.breakdown-inner { display: grid; grid-template-columns: 3fr 2fr; gap: var(--space-12); align-items: center; }
.included-list { list-style: none; display: grid; gap: var(--space-3); }
.included-list li { display: flex; gap: var(--space-3); align-items: flex-start; color: var(--color-gray-dark); line-height: 1.6; }
.included-list li svg { color: var(--color-secondary); flex-shrink: 0; margin-top: 3px; }
.breakdown-figure img { width: 100%; border-radius: var(--radius-xl); box-shadow: var(--shadow-lg); object-fit: cover; aspect-ratio: 4 / 5; }

/* ---- FAQ ---- */
.faq-section { background: var(--color-light); }
.faq-grid { grid-template-columns: repeat(2, 1fr); gap: var(--space-6); }
.faq-item { background: var(--color-white); align-items: flex-start; }
.faq-icon { background: var(--color-secondary); }
.faq-item h3 { color: var(--color-primary); font-size: var(--font-size-base); }

/* ---- RELATED (required component) ---- */
.related-section { background: var(--color-white); }
.services-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: var(--space-8); }
.card-tint-1 { background: rgba(var(--color-primary-rgb), 0.05); box-shadow: none; }
.card-tint-2 { background: rgba(var(--color-secondary-rgb), 0.10); box-shadow: none; }
.card-tint-3 { background: rgba(var(--color-accent-rgb), 0.14); box-shadow: none; }
.service-card-with-image { border-radius: var(--radius-lg); overflow: hidden; display: flex; flex-direction: column; background: var(--color-light); transition: transform var(--transition-base), box-shadow var(--transition-base); }
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

/* ---- FINAL CTA ---- */
.closing-cta { background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 120%); }
.closing-cta .container { position: relative; z-index: 1; text-align: center; }
.closing-cta h2 { color: var(--color-white); font-size: var(--font-size-5xl); margin-bottom: var(--space-4); }
.closing-cta p { color: rgba(255,255,255,0.9); max-width: 52ch; margin: 0 auto var(--space-8); font-size: var(--font-size-lg); }

/* ---- RESPONSIVE ---- */
@media (max-width: 1024px) {
  .damage-grid { grid-template-columns: repeat(2, 1fr); }
  .expert-grid, .expert-grid--reverse { grid-template-columns: 1fr; gap: var(--space-12); }
  .expert-grid--reverse .expert-copy, .expert-grid--reverse .expert-figure { order: 0; }
  .steps-flow { grid-template-columns: repeat(2, 1fr); }
  .breakdown-inner { grid-template-columns: 1fr; gap: var(--space-10); }
  .services-grid { grid-template-columns: 1fr; }
}
@media (max-width: 768px) {
  .stm-hero h1 { font-size: var(--font-size-4xl); }
  .stm-hero__trust { grid-template-columns: 1fr; }
  .faq-grid { grid-template-columns: 1fr; }
}
@media (max-width: 600px) {
  .damage-grid { grid-template-columns: 1fr; }
  .steps-flow { grid-template-columns: 1fr; }
  .expert-stats { grid-template-columns: 1fr; }
}
</style>

<!-- =====================================================================
     1. HERO
     ===================================================================== -->
<section class="hero stm-hero" style="background-image: url('<?php echo htmlspecialchars($photos['hero']); ?>');" aria-label="Storm damage roof repair in Fort Smith">
  <div class="stm-hero__overlay"></div>
  <div class="container">
    <div class="stm-hero__inner">
      <nav class="stm-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a><span aria-hidden="true">/</span>
        <a href="/services/">Services</a><span aria-hidden="true">/</span>
        <span aria-current="page">Storm Damage Repair</span>
      </nav>
      <span class="stm-eyebrow"><?php echo icon('shield-check', 16); ?> 24/7 Emergency &middot; Fort Smith, AR</span>
      <h1>Storm Damage <span class="text-accent">Roof Repair</span> in Fort Smith, AR</h1>
      <p class="hero-answer">When hail and high wind hit Fort Smith, JBL Roofing LLC responds 24/7 — tarping openings, stopping leaks, and documenting every bit of damage for your insurance claim. Licensed, insured, and local, we restore your roof and take the paperwork stress off your plate.</p>
      <div class="stm-hero__actions">
        <a href="/contact/" class="btn btn-primary btn-lg">Request Emergency Help</a>
        <a href="#after-storm" class="btn btn-ghost btn-lg">What To Do After a Storm</a>
      </div>
      <ul class="stm-hero__trust">
        <li><?php echo icon('clock', 18); ?> 24/7 Emergency Response</li>
        <li><?php echo icon('shield-check', 18); ?> Licensed &amp; Insured</li>
        <li><?php echo icon('badge-check', 18); ?> Insurance Claim Help</li>
      </ul>
    </div>
  </div>
</section>

<!-- Emergency banner (signature) -->
<div class="emergency-strip" role="note" aria-label="Emergency response">
  <div class="container">
    <span class="e-ic"><?php echo icon('clock', 22); ?></span>
    <p>Active leak or storm damage right now? JBL Roofing LLC responds 24/7 — <a href="/contact/">request emergency help</a>.</p>
  </div>
</div>

<!-- =====================================================================
     2. DAMAGE TYPES (problem)
     ===================================================================== -->
<section class="damage-section" aria-label="Types of storm damage">
  <div class="container">
    <div class="pull-quote reveal-up">
      <p>Storm damage rarely waits — the longer water gets in, the <span class="text-accent">more it costs</span>.</p>
    </div>
    <div class="section-header reveal-up">
      <span class="section-subtitle">Know the Damage</span>
      <h2>What kinds of <span class="text-accent">storm damage</span> hit Fort Smith roofs?</h2>
      <p class="answer-block" style="max-width:70ch;margin-left:auto;margin-right:auto;">Fort Smith roofs take four main kinds of storm damage: hail bruising and fractures, wind-lifted or torn shingles, water intrusion through openings, and impact punctures from debris. JBL Roofing LLC inspects for all four — including the hidden hail damage you can't see from the ground.</p>
    </div>
    <div class="damage-grid">
      <?php foreach ($damageTypes as $i => $d): ?>
      <article class="damage-card reveal-up reveal-delay-<?php echo ($i % 3) + 1; ?>">
        <div class="damage-ic"><?php echo icon($d['icon'], 24); ?></div>
        <h3><?php echo $d['title']; ?></h3>
        <p><?php echo $d['text']; ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- =====================================================================
     3. EXPERT POSITIONING
     ===================================================================== -->
<section class="expert-section" aria-label="Why choose JBL Roofing for storm repair">
  <div class="container">
    <div class="expert-grid expert-grid--reverse">
      <div class="expert-copy reveal-left">
        <span class="section-subtitle">The JBL Difference</span>
        <h2>Why call <span class="text-accent">JBL Roofing</span> after a storm?</h2>
        <p class="answer-block">JBL Roofing LLC pairs fast emergency response with hands-on insurance support. We stabilize the roof first, document every point of damage for your claim, and meet your adjuster on the roof — so you're not stuck translating roofing jargon or fighting the process alone.</p>
        <p>Rapid response matters most in Arkansas's hail and wind seasons, when a small opening becomes major interior damage overnight. As a local, licensed crew, we're close by when the weather turns and accountable long after the tarps come off.</p>
        <div class="expert-stats">
          <div class="expert-stat"><div class="big">24/7</div><div class="lbl">Emergency storm response</div></div>
          <div class="expert-stat"><div class="big">20+</div><div class="lbl">Years combined experience</div></div>
        </div>
      </div>
      <div class="expert-figure reveal-right">
        <img src="<?php echo htmlspecialchars($photos['expert']); ?>" sizes="(max-width: 1024px) 100vw, 420px"
             alt="JBL Roofing LLC inspecting storm damage on a Fort Smith, Arkansas roof" width="560" height="700" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- =====================================================================
     4. AFTER-STORM STEPS (dark signature)
     ===================================================================== -->
<section id="after-storm" class="steps-section" aria-label="What to do after storm damage">
  <div class="container">
    <div class="section-header reveal-up">
      <span class="section-subtitle">Act Fast</span>
      <h2>What should you do right after <span class="text-accent">storm damage</span>?</h2>
      <p>Four steps protect your home and your claim. JBL Roofing LLC handles the hard parts with you.</p>
    </div>
    <div class="steps-flow">
      <?php foreach ($afterSteps as $step): ?>
      <div class="step-node reveal-up">
        <div class="step-num"><?php echo htmlspecialchars($step['n']); ?></div>
        <h3><?php echo htmlspecialchars($step['title']); ?></h3>
        <p><?php echo htmlspecialchars($step['text']); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- =====================================================================
     5. SERVICE BREAKDOWN
     ===================================================================== -->
<section class="breakdown-section" aria-label="What storm damage repair includes">
  <div class="container">
    <div class="section-header reveal-up">
      <span class="section-subtitle">The Scope</span>
      <h2>What's included in <span class="text-accent">storm damage repair</span>?</h2>
      <p class="hero-answer">From the first emergency tarp to the final nail sweep, JBL Roofing LLC covers the whole storm-restoration process.</p>
    </div>
    <div class="breakdown-inner">
      <div class="reveal-right">
        <ul class="included-list">
          <?php foreach ($included as $item): ?>
          <li><?php echo icon('check-circle', 20); ?> <span><?php echo htmlspecialchars($item); ?></span></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="breakdown-figure reveal-left">
        <img src="<?php echo htmlspecialchars($photos['work']); ?>" sizes="(max-width: 1024px) 100vw, 420px"
             alt="Storm-damaged roof restored by JBL Roofing LLC in Fort Smith, Arkansas" width="540" height="675" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- =====================================================================
     6. FAQ
     ===================================================================== -->
<section class="faq-section" aria-label="Storm damage repair frequently asked questions">
  <div class="container">
    <div class="section-header reveal-up">
      <span class="section-subtitle">Good Questions</span>
      <h2>Have questions about <span class="text-accent">storm damage repair</span>?</h2>
      <p class="hero-answer">Straight answers on emergency response, inspections, insurance, hail damage, and what to do first.</p>
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
      <h2>What else might your <span class="text-accent">storm recovery</span> need?</h2>
      <p class="hero-answer">Storm work often leads to full repairs, gutter replacement, and an insurance claim. One local crew handles it all.</p>
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

<!-- Angle divider into final CTA -->
<div class="section-divider section-divider--angle" aria-hidden="true">
  <svg viewBox="0 0 1440 50" preserveAspectRatio="none"><path d="M0,0 L1440,50 L1440,50 L0,50 Z"></path></svg>
</div>

<!-- =====================================================================
     7. FINAL CTA
     ===================================================================== -->
<section class="closing-cta" aria-label="Request storm damage help">
  <div class="container">
    <h2 class="reveal-up">Storm hit? Don't wait on a leak.</h2>
    <p class="reveal-up reveal-delay-1">Hail and wind damage only gets worse — and more expensive — the longer it sits. JBL Roofing LLC responds 24/7 with free assessments and insurance help. Built Tough. Built Right.</p>
    <a href="/contact/" class="btn btn-outline-white btn-lg reveal-up reveal-delay-2">Request Emergency Help</a>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
