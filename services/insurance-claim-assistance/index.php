<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ---------------------------------------------------------------------------
 * PAGE-LEVEL SETUP — Insurance Claim Assistance (solo, editorial)
 * ------------------------------------------------------------------------- */
$currentPage = 'services';

$slugSelf        = 'insurance-claim-assistance';
$pageTitle       = 'Roof Insurance Claim Assistance in Fort Smith, AR | ' . $siteName;
$pageDescription = 'JBL Roofing LLC helps Fort Smith homeowners document roof damage and work directly with insurance adjusters. Licensed, insured, free inspections — claim support made simple.';
$canonicalUrl    = $siteUrl . '/services/' . $slugSelf . '/';
$ogType          = 'website';

$imgBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/jbl-roofing-llc/photos/';
$photos = [
    'hero'   => $imgBase . '1785371133543-80u1r3-IMG_4564.jpeg',
    'expert' => $imgBase . '1785371131896-afguij-IMG_2806.jpeg',
    'rel1'   => $imgBase . '1785371119407-ivl8mo-IMG_3492.jpeg',
    'rel2'   => $imgBase . '1785371126320-k4kjaq-IMG_4587.jpeg',
    'rel3'   => $imgBase . '1785371128999-7fb5tb-IMG_4591.jpeg',
];

$ogImage          = $photos['hero'];
$heroImagePreload = $photos['hero'];

$painPoints = [
    ['icon' => 'search',       'title' => 'Hidden Damage',      'text' => 'Hail and wind harm is often invisible from the ground, so homeowners miss it — and so can adjusters.'],
    ['icon' => 'pen-tool',     'title' => 'Confusing Paperwork', 'text' => 'Claim forms, scopes, and roofing terms are hard to translate when you\'ve never done it before.'],
    ['icon' => 'clock',        'title' => 'Tight Deadlines',    'text' => 'Most policies expect you to report storm damage promptly, and delays can weaken a valid claim.'],
    ['icon' => 'users',        'title' => 'Adjuster Meetings',  'text' => 'Meeting an adjuster on a roof and knowing what to point out is intimidating on your own.'],
];

$claimSteps = [
    ['n' => '01', 'title' => 'Free Damage Inspection', 'text' => 'We climb the roof and identify every point of storm damage — including the hidden hail marks most people miss.'],
    ['n' => '02', 'title' => 'Thorough Documentation', 'text' => 'We photograph and record the damage in the detail your insurer expects, building a clear evidence file.'],
    ['n' => '03', 'title' => 'Adjuster Coordination',  'text' => 'We meet your adjuster on the roof, walk the damage together, and speak the technical language for you.'],
    ['n' => '04', 'title' => 'Repair to the Scope',    'text' => 'Once the claim is approved, we complete the covered repairs or replacement to restore your roof.'],
];

$compare = [
    ['them' => 'Spot damage from the ground and hope you caught it all', 'us' => 'Full on-roof inspection that finds hidden hail and wind damage'],
    ['them' => 'Guess at what the insurer needs documented',            'us' => 'Detailed photo evidence built for the claim from day one'],
    ['them' => 'Face the adjuster meeting alone',                        'us' => 'We meet the adjuster on the roof and walk the damage together'],
    ['them' => 'Translate roofing jargon under pressure',               'us' => 'We explain scope and terms in plain language for you'],
    ['them' => 'Find a separate contractor after approval',             'us' => 'Same local crew documents and completes the repair'],
];

$faqs = [
    ['q' => 'Does homeowners insurance cover roof storm damage in Fort Smith?',        'a' => 'Most homeowners policies cover sudden hail and wind damage, though coverage and deductibles vary. JBL Roofing LLC inspects your roof for free, documents what we find, and helps you understand your options — we can\'t promise an outcome, but thorough evidence gives your claim its best footing.'],
    ['q' => 'How does JBL Roofing help with my insurance claim?',                      'a' => 'JBL Roofing LLC inspects and documents the damage, builds a detailed photo record, and meets your adjuster on the roof to walk through it together. We translate the roofing terms and scope into plain language so you understand every step, then complete the covered repairs once the claim is approved.'],
    ['q' => 'Should I file a claim before or after you inspect my roof?',              'a' => 'It\'s usually smart to have JBL Roofing LLC inspect first. A free inspection tells you whether the damage likely exceeds your deductible and is worth filing. That way you go into the claim informed, with documentation ready, instead of filing blind and hoping it holds up.'],
    ['q' => 'What if the adjuster misses some of the damage?',                         'a' => 'It happens, which is exactly why JBL Roofing LLC meets the adjuster on the roof. We point out damage that\'s easy to overlook from the ground and provide our own documentation for the record. Our goal is a scope that reflects the real condition of your roof.'],
    ['q' => 'How quickly should I start a claim after a storm?',                       'a' => 'As soon as it\'s safe. Most policies expect prompt reporting, and hail or wind damage can worsen with the next rain. JBL Roofing LLC offers fast free assessments in Fort Smith so you can document the damage and start your claim before deadlines or further damage become a problem.'],
    ['q' => 'Do you charge for the claim inspection?',                                 'a' => 'No. JBL Roofing LLC provides free, no-pressure roof inspections and damage documentation in Fort Smith. You get a clear picture of your roof\'s condition and the evidence you need — with no obligation to file a claim or hire us for the repair.'],
];

$related = [
    ['name' => 'Storm Damage Repair', 'slug' => 'storm-damage-repair', 'icon' => 'shield-check','photo' => $photos['rel2'], 'desc' => 'Wind, hail, and water damage restoration — 24/7.',  'bullets' => ['Emergency response', 'Wind & hail repair', 'Tarping & stabilization'],'tint' => 1],
    ['name' => 'Roofing Services',    'slug' => 'roofing-services',    'icon' => 'home',        'photo' => $photos['rel1'], 'desc' => 'Repairs, replacements, and every major material.', 'bullets' => ['Repair & replace', 'All roof materials', 'Free inspections'],         'tint' => 2],
    ['name' => 'Seasonal Services',   'slug' => 'seasonal-services',   'icon' => 'wrench',      'photo' => $photos['rel3'], 'desc' => 'Gutters, metal roofing, and roof maintenance.',   'bullets' => ['Seamless gutters', 'Metal roof installs', 'Preventive care'],          'tint' => 3],
];

/* ---------------------------------------------------------------------------
 * SCHEMA — @graph: Service + FAQPage + BreadcrumbList
 * ------------------------------------------------------------------------- */
$serviceSchema = [
    '@type'       => 'Service',
    '@id'         => $canonicalUrl . '#service-' . $slugSelf,
    'name'        => 'Roof Insurance Claim Assistance',
    'serviceType' => 'Roof insurance claim documentation and adjuster coordination',
    'description' => 'Roof insurance claim assistance in Fort Smith, AR — damage inspection, photo documentation, and adjuster coordination to support homeowners through the claims process.',
    'url'         => $canonicalUrl,
    'provider'    => ['@id' => $siteUrl . '#organization'],
    'areaServed'  => ['@type' => 'City', 'name' => 'Fort Smith', 'containedInPlace' => ['@type' => 'State', 'name' => 'Arkansas']],
];

$breadcrumb = generateBreadcrumbSchema([
    ['name' => 'Home',     'url' => $siteUrl . '/'],
    ['name' => 'Services', 'url' => $siteUrl . '/services/'],
    ['name' => 'Insurance Claim Assistance', 'url' => $canonicalUrl],
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
   INSURANCE CLAIM ASSISTANCE (solo, editorial) — page-specific (Premium)
   Tokens only. No hardcoded colors / shadows / spacing.
   ========================================================================= */
.text-accent { color: var(--color-secondary); }
.sr-only { position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip: rect(0,0,0,0); white-space: nowrap; border: 0; }

/* ---- HERO ---- */
.ins-hero { min-height: 74vh; display: flex; align-items: center; text-align: left; padding-top: var(--space-16); padding-bottom: var(--space-16); }
.ins-hero__overlay { position: absolute; inset: 0; z-index: 1; background: linear-gradient(115deg, rgba(var(--color-primary-rgb), 0.95) 0%, rgba(var(--color-primary-rgb), 0.80) 46%, rgba(var(--color-secondary-rgb), 0.52) 100%); }
.ins-hero__overlay::after { content: ""; position: absolute; inset: 0; background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='3'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.5'/%3E%3C/svg%3E"); opacity: 0.06; mix-blend-mode: overlay; }
.ins-hero__inner { position: relative; z-index: 2; max-width: 760px; }
.ins-breadcrumb { display: flex; flex-wrap: wrap; gap: var(--space-2); align-items: center; color: rgba(255,255,255,0.72); font-size: var(--font-size-sm); margin-bottom: var(--space-5); }
.ins-breadcrumb a { color: rgba(255,255,255,0.72); }
.ins-breadcrumb a:hover { color: var(--color-white); }
.ins-breadcrumb [aria-current] { color: var(--color-secondary); font-weight: 600; }
.ins-eyebrow { display: inline-flex; align-items: center; gap: var(--space-2); color: var(--color-white); background: rgba(var(--color-secondary-rgb), 0.28); border: 1px solid rgba(255,255,255,0.28); padding: var(--space-1) var(--space-4); border-radius: var(--radius-full); font-family: var(--font-heading); font-size: var(--font-size-xs); text-transform: uppercase; letter-spacing: 2px; font-weight: 700; margin-bottom: var(--space-5); }
.ins-hero h1 { color: var(--color-white); font-size: var(--font-size-6xl); line-height: 1.05; margin-bottom: var(--space-5); }
.ins-hero h1 .text-accent { color: var(--color-secondary); }
.ins-hero .hero-answer { color: rgba(255,255,255,0.90); font-size: var(--font-size-lg); line-height: 1.75; max-width: 58ch; margin: 0 0 var(--space-8); }
.ins-hero__actions { display: flex; gap: var(--space-4); flex-wrap: wrap; margin-bottom: var(--space-8); }
.ins-hero__actions .btn-ghost { background: rgba(255,255,255,0.08); color: var(--color-white); border-color: rgba(255,255,255,0.5); }
.ins-hero__actions .btn-ghost:hover { background: var(--color-white); color: var(--color-primary); border-color: var(--color-white); }
.ins-hero__trust { display: flex; flex-wrap: wrap; gap: var(--space-3) var(--space-6); list-style: none; }
.ins-hero__trust li { display: flex; align-items: center; gap: var(--space-2); color: rgba(255,255,255,0.92); font-size: var(--font-size-sm); font-weight: 600; }
.ins-hero__trust li svg { color: var(--color-secondary); flex-shrink: 0; }

/* ---- Shared editorial atoms ---- */
.section-divider { position: relative; line-height: 0; }
.section-divider svg { display: block; width: 100%; height: auto; }
.section-divider--wave path { fill: var(--color-white); }
.section-divider--angle path { fill: var(--color-dark); }
.section-subtitle { display: block; color: var(--color-secondary); font-weight: 700; font-size: var(--font-size-sm); text-transform: uppercase; letter-spacing: 2px; margin-bottom: var(--space-2); }
.section-header h2 .text-accent { color: var(--color-secondary); }
.hero-answer { max-width: 62ch; margin: 0 auto var(--space-4); color: var(--color-gray-dark); font-size: var(--font-size-lg); line-height: 1.7; }
.answer-block { color: var(--color-black); font-size: var(--font-size-lg); line-height: 1.75; padding: var(--space-5) var(--space-6); background: rgba(var(--color-secondary-rgb), 0.07); border-left: 4px solid var(--color-secondary); border-radius: var(--radius-md); margin-bottom: var(--space-6); }

/* ---- PROBLEM (pain points bento) ---- */
.pain-section { background: var(--color-white); }
.pull-quote { max-width: 900px; margin: 0 auto var(--space-12); text-align: center; }
.pull-quote p { font-family: var(--font-heading); font-style: italic; font-weight: 700; color: var(--color-primary); font-size: clamp(1.5rem, 3vw, 2.5rem); line-height: 1.3; }
.pull-quote p .text-accent { color: var(--color-secondary); }
.pain-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: var(--space-6); }
.pain-card { padding: var(--space-8) var(--space-6); background: var(--color-light); border-radius: var(--radius-lg); border-left: 4px solid var(--color-secondary); }
.pain-card:nth-child(even) { border-left-color: var(--color-primary); background: rgba(var(--color-secondary-rgb), 0.06); }
.pain-ic { width: 48px; height: 48px; border-radius: var(--radius-md); background: rgba(var(--color-secondary-rgb), 0.14); color: var(--color-secondary); display: flex; align-items: center; justify-content: center; margin-bottom: var(--space-4); }
.pain-card h3 { color: var(--color-primary); font-size: var(--font-size-lg); margin-bottom: var(--space-2); }
.pain-card p { color: var(--color-gray-dark); font-size: var(--font-size-sm); line-height: 1.65; margin: 0; }

/* ---- EXPERT POSITIONING ---- */
.expert-section { background: var(--color-light); }
.expert-grid { display: grid; grid-template-columns: 5fr 4fr; gap: var(--space-16); align-items: center; }
.expert-copy h2 { color: var(--color-primary); font-size: clamp(2rem, 4vw, 3rem); margin-bottom: var(--space-4); }
.expert-copy h2 .text-accent { color: var(--color-secondary); }
.expert-copy p { color: var(--color-gray-dark); line-height: 1.8; margin-bottom: var(--space-4); }
.expert-stats { display: grid; grid-template-columns: repeat(2, 1fr); gap: var(--space-6); margin-top: var(--space-8); }
.expert-stat { background: var(--color-white); border-radius: var(--radius-lg); padding: var(--space-6); box-shadow: var(--shadow-sm); border-left: 4px solid var(--color-secondary); }
.expert-stat .big { font-family: var(--font-heading); font-size: var(--font-size-4xl); font-weight: 800; color: var(--color-primary); line-height: 1; }
.expert-stat .lbl { font-size: var(--font-size-sm); color: var(--color-gray); margin-top: var(--space-2); }
.expert-figure { position: relative; }
.expert-figure img { width: 100%; border-radius: var(--radius-xl); box-shadow: var(--shadow-lg); object-fit: cover; aspect-ratio: 4 / 5; }
.expert-figure::after { content: ""; position: absolute; inset: auto calc(-1 * var(--space-5)) calc(-1 * var(--space-5)) auto; width: 130px; height: 130px; border-radius: var(--radius-lg); border: 3px solid var(--color-secondary); z-index: -1; }

/* ---- CLAIM TIMELINE (signature vertical steps) ---- */
.timeline-section { background: var(--color-white); }
.claim-timeline { max-width: 820px; margin: 0 auto; display: grid; gap: var(--space-6); position: relative; }
.claim-step { display: grid; grid-template-columns: 64px 1fr; gap: var(--space-6); align-items: flex-start; }
.claim-marker { width: 64px; height: 64px; border-radius: var(--radius-full); background: var(--color-primary); color: var(--color-white); display: flex; align-items: center; justify-content: center; font-family: var(--font-heading); font-weight: 800; font-size: var(--font-size-xl); position: relative; z-index: 1; }
.claim-step:nth-child(even) .claim-marker { background: var(--color-secondary); }
.claim-body { background: var(--color-light); border-radius: var(--radius-lg); padding: var(--space-6) var(--space-8); border-left: 4px solid var(--color-secondary); }
.claim-body h3 { color: var(--color-primary); font-size: var(--font-size-xl); margin-bottom: var(--space-2); }
.claim-body p { color: var(--color-gray-dark); line-height: 1.7; margin: 0; }

/* ---- DISCLAIMER NOTE ---- */
.claim-note { max-width: 820px; margin: var(--space-10) auto 0; padding: var(--space-5) var(--space-6); background: rgba(var(--color-primary-rgb), 0.05); border-radius: var(--radius-md); border-left: 4px solid var(--color-primary); }
.claim-note p { margin: 0; color: var(--color-gray-dark); font-size: var(--font-size-sm); line-height: 1.7; }

/* ---- COMPARISON ---- */
.compare-section { background: var(--color-light); }
.compare-table { max-width: 900px; margin: 0 auto; display: grid; gap: var(--space-3); }
.compare-head { display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-3); }
.compare-head > div { padding: var(--space-4) var(--space-6); border-radius: var(--radius-md); font-family: var(--font-heading); font-weight: 800; text-align: center; }
.compare-head .them { background: var(--color-gray-light); color: var(--color-gray-dark); }
.compare-head .us { background: var(--color-primary); color: var(--color-white); }
.compare-row { display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-3); }
.compare-row > div { padding: var(--space-5) var(--space-6); border-radius: var(--radius-md); font-size: var(--font-size-sm); line-height: 1.6; display: flex; gap: var(--space-3); align-items: flex-start; }
.compare-row .them { background: var(--color-white); color: var(--color-gray); border: 1px solid var(--color-gray-light); }
.compare-row .us { background: rgba(var(--color-secondary-rgb), 0.10); color: var(--color-gray-dark); border: 1px solid rgba(var(--color-secondary-rgb), 0.35); }
.compare-row svg { flex-shrink: 0; margin-top: 2px; }
.compare-row .them svg { color: var(--color-gray); }
.compare-row .us svg { color: var(--color-secondary); }

/* ---- FAQ ---- */
.faq-section { background: var(--color-white); }
.faq-grid { grid-template-columns: repeat(2, 1fr); gap: var(--space-6); }
.faq-item { background: var(--color-light); align-items: flex-start; }
.faq-icon { background: var(--color-secondary); }
.faq-item h3 { color: var(--color-primary); font-size: var(--font-size-base); }

/* ---- RELATED (required component) ---- */
.related-section { background: var(--color-light); }
.services-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: var(--space-8); }
.card-tint-1 { background: rgba(var(--color-primary-rgb), 0.05); box-shadow: none; }
.card-tint-2 { background: rgba(var(--color-secondary-rgb), 0.10); box-shadow: none; }
.card-tint-3 { background: rgba(var(--color-accent-rgb), 0.14); box-shadow: none; }
.service-card-with-image { border-radius: var(--radius-lg); overflow: hidden; display: flex; flex-direction: column; background: var(--color-white); transition: transform var(--transition-base), box-shadow var(--transition-base); }
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
  .pain-grid { grid-template-columns: repeat(2, 1fr); }
  .expert-grid { grid-template-columns: 1fr; gap: var(--space-12); }
  .services-grid { grid-template-columns: 1fr; }
}
@media (max-width: 768px) {
  .ins-hero h1 { font-size: var(--font-size-4xl); }
  .ins-hero__trust { grid-template-columns: 1fr; }
  .faq-grid { grid-template-columns: 1fr; }
  .claim-step { grid-template-columns: 48px 1fr; gap: var(--space-4); }
  .claim-marker { width: 48px; height: 48px; font-size: var(--font-size-base); }
  .compare-head, .compare-row { grid-template-columns: 1fr; }
  .compare-head .them { display: none; }
}
@media (max-width: 600px) {
  .pain-grid { grid-template-columns: 1fr; }
  .expert-stats { grid-template-columns: 1fr; }
}
</style>

<!-- =====================================================================
     1. HERO
     ===================================================================== -->
<section class="hero ins-hero" style="background-image: url('<?php echo htmlspecialchars($photos['hero']); ?>');" aria-label="Roof insurance claim assistance in Fort Smith">
  <div class="ins-hero__overlay"></div>
  <div class="container">
    <div class="ins-hero__inner">
      <nav class="ins-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a><span aria-hidden="true">/</span>
        <a href="/services/">Services</a><span aria-hidden="true">/</span>
        <span aria-current="page">Insurance Claim Assistance</span>
      </nav>
      <span class="ins-eyebrow"><?php echo icon('badge-check', 16); ?> Claim Support &middot; Fort Smith, AR</span>
      <h1>Roof Insurance <span class="text-accent">Claim Assistance</span> in Fort Smith, AR</h1>
      <p class="hero-answer">A roof insurance claim shouldn't feel like a second job. JBL Roofing LLC inspects the damage, documents it the way insurers expect, and meets your adjuster on the roof — translating the process into plain language so your Fort Smith claim moves forward and nothing gets missed.</p>
      <div class="ins-hero__actions">
        <a href="/contact/" class="btn btn-primary btn-lg">Get a Free Inspection</a>
        <a href="#claim-process" class="btn btn-ghost btn-lg">How the Claim Works</a>
      </div>
      <ul class="ins-hero__trust">
        <li><?php echo icon('badge-check', 18); ?> Adjuster Coordination</li>
        <li><?php echo icon('shield-check', 18); ?> Licensed &amp; Insured</li>
        <li><?php echo icon('check-circle', 18); ?> Free Damage Documentation</li>
      </ul>
    </div>
  </div>
</section>

<!-- Wave divider -->
<div class="section-divider section-divider--wave" aria-hidden="true">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none"><path d="M0,32 C240,64 480,0 720,16 C960,32 1200,64 1440,24 L1440,60 L0,60 Z"></path></svg>
</div>

<!-- =====================================================================
     2. PROBLEM (pain points)
     ===================================================================== -->
<section class="pain-section" aria-label="Why roof insurance claims are hard">
  <div class="container">
    <div class="pull-quote reveal-up">
      <p>A valid claim can stall for one reason: the damage was never <span class="text-accent">documented right</span>.</p>
    </div>
    <div class="section-header reveal-up">
      <span class="section-subtitle">The Real Problem</span>
      <h2>Why are roof insurance claims so <span class="text-accent">confusing</span>?</h2>
      <p class="answer-block" style="max-width:70ch;margin-left:auto;margin-right:auto;">Roof claims are confusing because the damage is often hidden, the paperwork is unfamiliar, deadlines are tight, and adjuster meetings are intimidating. JBL Roofing LLC removes those hurdles for Fort Smith homeowners by handling the inspection, documentation, and adjuster coordination for you.</p>
    </div>
    <div class="pain-grid">
      <?php foreach ($painPoints as $i => $p): ?>
      <article class="pain-card reveal-up reveal-delay-<?php echo ($i % 3) + 1; ?>">
        <div class="pain-ic"><?php echo icon($p['icon'], 24); ?></div>
        <h3><?php echo $p['title']; ?></h3>
        <p><?php echo $p['text']; ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- =====================================================================
     3. EXPERT POSITIONING
     ===================================================================== -->
<section class="expert-section" aria-label="Why let JBL handle your claim">
  <div class="container">
    <div class="expert-grid">
      <div class="expert-copy reveal-right">
        <span class="section-subtitle">The JBL Difference</span>
        <h2>Why let <span class="text-accent">JBL Roofing</span> handle your claim?</h2>
        <p class="answer-block">Because JBL Roofing LLC is the same crew that inspects, documents, and repairs your roof — no handoffs, no gaps. We know what storm damage looks like up close and what insurers need to see, so your claim is built on solid evidence from the first inspection.</p>
        <p>We spent years inside larger companies before starting JBL, and we chose to do things straight: honest documentation, plain-language explanations, and no pressure. We advocate for an accurate scope of your roof's real condition — then we're right here to complete the covered work.</p>
        <div class="expert-stats">
          <div class="expert-stat"><div class="big">20+</div><div class="lbl">Years combined experience</div></div>
          <div class="expert-stat"><div class="big">Free</div><div class="lbl">Inspection &amp; documentation</div></div>
        </div>
      </div>
      <div class="expert-figure reveal-left">
        <img src="<?php echo htmlspecialchars($photos['expert']); ?>" sizes="(max-width: 1024px) 100vw, 420px"
             alt="JBL Roofing LLC documenting roof damage for an insurance claim in Fort Smith, Arkansas" width="560" height="700" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- =====================================================================
     4. CLAIM TIMELINE (signature)
     ===================================================================== -->
<section id="claim-process" class="timeline-section" aria-label="How the insurance claim process works">
  <div class="container">
    <div class="section-header reveal-up">
      <span class="section-subtitle">Step by Step</span>
      <h2>What does JBL do for your <span class="text-accent">insurance claim</span>?</h2>
      <p class="hero-answer">Four clear steps take you from storm damage to a restored roof — with JBL Roofing LLC handling the hard parts alongside you.</p>
    </div>
    <div class="claim-timeline">
      <?php foreach ($claimSteps as $step): ?>
      <div class="claim-step reveal-up">
        <div class="claim-marker"><?php echo htmlspecialchars($step['n']); ?></div>
        <div class="claim-body">
          <h3><?php echo htmlspecialchars($step['title']); ?></h3>
          <p><?php echo htmlspecialchars($step['text']); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="claim-note reveal-up">
      <p><strong>An honest note:</strong> JBL Roofing LLC is a roofing contractor, not a public adjuster or law firm, and we can't guarantee a claim outcome. What we can do is document your roof thoroughly, communicate clearly with your adjuster, and complete quality repairs to the approved scope.</p>
    </div>
  </div>
</section>

<!-- Mid-page CTA banner -->
<section class="cta-banner" aria-label="Free claim inspection">
  <div class="container">
    <h2 class="reveal-up">Think you have storm damage? Start with a free look.</h2>
    <p class="reveal-up reveal-delay-1">Before you file, let JBL Roofing LLC inspect and document your Fort Smith roof for free — so you go into the claim informed, with the evidence already in hand.</p>
    <a href="/contact/" class="btn btn-outline-white btn-lg reveal-up reveal-delay-2">Get a Free Inspection</a>
  </div>
</section>

<!-- =====================================================================
     5. COMPARISON
     ===================================================================== -->
<section class="compare-section" aria-label="Filing a claim alone versus with JBL">
  <div class="container">
    <div class="section-header reveal-up">
      <span class="section-subtitle">Side by Side</span>
      <h2>What's the difference between going it alone and calling <span class="text-accent">JBL</span>?</h2>
      <p class="hero-answer">The claim process rewards preparation. Here's what changes when a local roofer documents the damage with you.</p>
    </div>
    <div class="compare-table reveal-up">
      <div class="compare-head">
        <div class="them">On Your Own</div>
        <div class="us">With JBL Roofing LLC</div>
      </div>
      <?php foreach ($compare as $row): ?>
      <div class="compare-row">
        <div class="them"><?php echo icon('x', 18); ?> <span><?php echo htmlspecialchars($row['them']); ?></span></div>
        <div class="us"><?php echo icon('check', 18); ?> <span><?php echo htmlspecialchars($row['us']); ?></span></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- =====================================================================
     6. FAQ
     ===================================================================== -->
<section class="faq-section" aria-label="Insurance claim frequently asked questions">
  <div class="container">
    <div class="section-header reveal-up">
      <span class="section-subtitle">Good Questions</span>
      <h2>Have questions about your <span class="text-accent">roof claim</span>?</h2>
      <p class="hero-answer">Straight answers on coverage, how we help, timing, missed damage, and inspection cost.</p>
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
      <h2>What comes after your <span class="text-accent">claim is approved</span>?</h2>
      <p class="hero-answer">Once the scope is set, the same JBL Roofing crew handles the storm repair, roof work, and anything else your home needs.</p>
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
<section class="closing-cta" aria-label="Get help with your roof insurance claim">
  <div class="container">
    <h2 class="reveal-up">Why face the claim alone?</h2>
    <p class="reveal-up reveal-delay-1">Get a free inspection and documented damage report from a local Fort Smith roofer who meets your adjuster on the roof. Built Tough. Built Right.</p>
    <a href="/contact/" class="btn btn-outline-white btn-lg reveal-up reveal-delay-2">Get a Free Inspection</a>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
