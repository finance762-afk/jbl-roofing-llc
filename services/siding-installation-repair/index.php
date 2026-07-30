<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ---------------------------------------------------------------------------
 * PAGE-LEVEL SETUP — Siding Installation & Repair (solo, editorial)
 * ------------------------------------------------------------------------- */
$currentPage = 'services';

$slugSelf        = 'siding-installation-repair';
$pageTitle       = 'Siding Installation & Repair in Fort Smith, AR | ' . $siteName;
$pageDescription = 'JBL Roofing LLC installs and repairs siding in Fort Smith, AR — sealing your home against Arkansas weather and lifting curb appeal. Licensed, insured, free estimates.';
$canonicalUrl    = $siteUrl . '/services/' . $slugSelf . '/';
$ogType          = 'website';

$imgBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/jbl-roofing-llc/photos/';
$photos = [
    'hero'   => $imgBase . '1785371127618-ndtvms-IMG_4588.jpeg',
    'expert' => $imgBase . '1785371131896-afguij-IMG_2806.jpeg',
    'work'   => $imgBase . '1785371130524-ymrb3k-IMG_2315.PNG',
    'rel1'   => $imgBase . '1785371119407-ivl8mo-IMG_3492.jpeg',
    'rel2'   => $imgBase . '1785371128999-7fb5tb-IMG_4591.jpeg',
    'rel3'   => $imgBase . '1785371133543-80u1r3-IMG_4564.jpeg',
];

$ogImage          = $photos['hero'];
$heroImagePreload = $photos['hero'];

$signs = [
    ['icon' => 'search',       'title' => 'Cracks &amp; Warping', 'text' => 'Split, buckled, or warped panels let moisture reach the sheathing behind them.'],
    ['icon' => 'paint-bucket', 'title' => 'Peeling &amp; Fading',  'text' => 'Constantly repainting or badly faded siding usually signals material at the end of its life.'],
    ['icon' => 'shield-check', 'title' => 'Soft or Rotten Spots', 'text' => 'Spongy areas or visible rot mean water has already gotten in and needs to be stopped.'],
    ['icon' => 'clock',        'title' => 'Rising Energy Bills',  'text' => 'Failing siding and insulation let conditioned air escape, driving cooling costs up.'],
];

$included = [
    'Full exterior assessment and honest repair-vs-replace recommendation',
    'Removal of damaged siding and inspection of the sheathing beneath',
    'Moisture barrier and flashing checks to seal the wall system',
    'Precise installation of new siding matched to your home',
    'Trim, corner, and caulk detailing for a weather-tight finish',
    'Full cleanup and haul-away of old material',
];

$process = [
    ['n' => '01', 'title' => 'Free Inspection',  'text' => 'We assess the siding and the wall behind it, then show you photos of what we find.'],
    ['n' => '02', 'title' => 'Written Estimate',  'text' => 'A clear, itemized quote with material options and no surprise change orders.'],
    ['n' => '03', 'title' => 'Installation',      'text' => 'We remove the old siding, correct any moisture issues, and install the new system.'],
    ['n' => '04', 'title' => 'Walkthrough',       'text' => 'We clean up completely and review the finished exterior with you before we leave.'],
];

$compare = [
    ['them' => 'Side-step the sheathing and just cover damaged areas',        'us' => 'Inspect the wall behind the siding and fix moisture at the source'],
    ['them' => 'Verbal ballpark that changes once work starts',               'us' => 'Written, itemized estimate you approve before we begin'],
    ['them' => 'Subcontracted crews you never meet',                          'us' => 'One local Fort Smith crew accountable start to finish'],
    ['them' => 'Leave trim and caulk detailing half-finished',                'us' => 'Weather-tight trim, corners, and caulking as standard'],
    ['them' => 'Debris and old panels left for you to deal with',             'us' => 'Complete cleanup and haul-away every time'],
];

$faqs = [
    ['q' => 'How much does siding installation cost in Fort Smith?',                 'a' => 'Siding cost depends on your home\'s size, the material you choose, and how much of the existing wall needs repair. JBL Roofing LLC gives you a free inspection and a detailed written estimate up front, so you see the full price — materials and labor — before you commit.'],
    ['q' => 'Can you repair just a section of siding instead of replacing all of it?','a' => 'Often, yes. If the damage is localized and the rest of the siding is sound, JBL Roofing LLC can repair or replace the affected sections and match them to your existing siding. During the free inspection we tell you honestly whether a repair will hold or a fuller replacement is the smarter move.'],
    ['q' => 'How long does a siding project take?',                                  'a' => 'Most residential siding projects in Fort Smith take a few days to about a week, depending on the size of the home and the extent of any repairs to the wall beneath. JBL Roofing LLC gives you a project-specific timeline with your estimate so you know what to expect.'],
    ['q' => 'Does new siding improve energy efficiency?',                            'a' => 'It can. Failing siding and gaps let conditioned air escape and moisture in. Installing sound siding with proper moisture barriers helps seal the exterior, which can reduce drafts and lower cooling costs during Fort Smith\'s hot summers.'],
    ['q' => 'Do you fix the damage behind the siding too?',                          'a' => 'Yes. JBL Roofing LLC inspects the sheathing and moisture barrier once the old siding is off. If we find rot or water damage, we address it before installing new siding — covering a problem instead of fixing it only leads to bigger repairs later.'],
    ['q' => 'Are you licensed and insured for siding work in Arkansas?',             'a' => 'Yes. JBL Roofing LLC is a licensed, insured, and bonded contractor based in Fort Smith, AR. Every siding project is backed by that coverage and a workmanship commitment, and we walk the finished job with you before we consider it complete.'],
];

$related = [
    ['name' => 'Roofing Services',           'slug' => 'roofing-services',           'icon' => 'home',        'photo' => $photos['rel1'], 'desc' => 'Repairs, replacements, and every major material.',  'bullets' => ['Repair & replace', 'All roof materials', 'Free inspections'],        'tint' => 1],
    ['name' => 'Seasonal Services',          'slug' => 'seasonal-services',          'icon' => 'wrench',      'photo' => $photos['rel2'], 'desc' => 'Gutters, metal roofing, and roof maintenance.',    'bullets' => ['Seamless gutters', 'Metal roof installs', 'Preventive care'],         'tint' => 2],
    ['name' => 'Storm Damage Repair',        'slug' => 'storm-damage-repair',        'icon' => 'shield-check','photo' => $photos['rel3'], 'desc' => 'Wind, hail, and water damage restoration — 24/7.',  'bullets' => ['Emergency response', 'Wind & hail repair', 'Tarping & stabilization'],'tint' => 3],
];

/* ---------------------------------------------------------------------------
 * SCHEMA — @graph: Service + FAQPage + BreadcrumbList
 * ------------------------------------------------------------------------- */
$serviceSchema = [
    '@type'       => 'Service',
    '@id'         => $canonicalUrl . '#service-' . $slugSelf,
    'name'        => 'Siding Installation & Repair',
    'serviceType' => 'Siding installation and repair',
    'description' => 'Residential siding installation and repair in Fort Smith, AR — sealing homes against weather, addressing moisture damage, and improving curb appeal and energy efficiency.',
    'url'         => $canonicalUrl,
    'provider'    => ['@id' => $siteUrl . '#organization'],
    'areaServed'  => ['@type' => 'City', 'name' => 'Fort Smith', 'containedInPlace' => ['@type' => 'State', 'name' => 'Arkansas']],
];

$breadcrumb = generateBreadcrumbSchema([
    ['name' => 'Home',     'url' => $siteUrl . '/'],
    ['name' => 'Services', 'url' => $siteUrl . '/services/'],
    ['name' => 'Siding Installation & Repair', 'url' => $canonicalUrl],
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
   SIDING (solo, editorial) — page-specific design layer (Premium)
   Tokens only. No hardcoded colors / shadows / spacing.
   ========================================================================= */
.text-accent { color: var(--color-secondary); }
.sr-only { position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip: rect(0,0,0,0); white-space: nowrap; border: 0; }

/* ---- HERO (editorial split) ---- */
.sid-hero { min-height: 74vh; display: flex; align-items: center; text-align: left; padding-top: var(--space-16); padding-bottom: var(--space-16); }
.sid-hero__overlay { position: absolute; inset: 0; z-index: 1; background: linear-gradient(110deg, rgba(var(--color-primary-rgb), 0.95) 0%, rgba(var(--color-primary-rgb), 0.78) 48%, rgba(var(--color-secondary-rgb), 0.5) 100%); }
.sid-hero__overlay::after { content: ""; position: absolute; inset: 0; background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='3'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.5'/%3E%3C/svg%3E"); opacity: 0.06; mix-blend-mode: overlay; }
.sid-hero__inner { position: relative; z-index: 2; max-width: 760px; }
.sid-breadcrumb { display: flex; flex-wrap: wrap; gap: var(--space-2); align-items: center; color: rgba(255,255,255,0.72); font-size: var(--font-size-sm); margin-bottom: var(--space-5); }
.sid-breadcrumb a { color: rgba(255,255,255,0.72); }
.sid-breadcrumb a:hover { color: var(--color-white); }
.sid-breadcrumb [aria-current] { color: var(--color-secondary); font-weight: 600; }
.sid-eyebrow { display: inline-flex; align-items: center; gap: var(--space-2); color: var(--color-white); background: rgba(var(--color-secondary-rgb), 0.28); border: 1px solid rgba(255,255,255,0.28); padding: var(--space-1) var(--space-4); border-radius: var(--radius-full); font-family: var(--font-heading); font-size: var(--font-size-xs); text-transform: uppercase; letter-spacing: 2px; font-weight: 700; margin-bottom: var(--space-5); }
.sid-hero h1 { color: var(--color-white); font-size: var(--font-size-6xl); line-height: 1.05; margin-bottom: var(--space-5); }
.sid-hero h1 .text-accent { color: var(--color-secondary); }
.sid-hero .hero-answer { color: rgba(255,255,255,0.90); font-size: var(--font-size-lg); line-height: 1.75; max-width: 58ch; margin: 0 0 var(--space-8); }
.sid-hero__actions { display: flex; gap: var(--space-4); flex-wrap: wrap; margin-bottom: var(--space-8); }
.sid-hero__actions .btn-ghost { background: rgba(255,255,255,0.08); color: var(--color-white); border-color: rgba(255,255,255,0.5); }
.sid-hero__actions .btn-ghost:hover { background: var(--color-white); color: var(--color-primary); border-color: var(--color-white); }
.sid-hero__trust { display: flex; flex-wrap: wrap; gap: var(--space-3) var(--space-6); list-style: none; }
.sid-hero__trust li { display: flex; align-items: center; gap: var(--space-2); color: rgba(255,255,255,0.92); font-size: var(--font-size-sm); font-weight: 600; }
.sid-hero__trust li svg { color: var(--color-secondary); flex-shrink: 0; }

/* ---- Shared editorial atoms ---- */
.section-divider { position: relative; line-height: 0; }
.section-divider svg { display: block; width: 100%; height: auto; }
.section-divider--wave path { fill: var(--color-white); }
.section-divider--angle path { fill: var(--color-dark); }
.section-subtitle { display: block; color: var(--color-secondary); font-weight: 700; font-size: var(--font-size-sm); text-transform: uppercase; letter-spacing: 2px; margin-bottom: var(--space-2); }
.section-header h2 .text-accent { color: var(--color-secondary); }
.hero-answer { max-width: 62ch; margin: 0 auto var(--space-4); color: var(--color-gray-dark); font-size: var(--font-size-lg); line-height: 1.7; }
.answer-block { color: var(--color-black); font-size: var(--font-size-lg); line-height: 1.75; padding: var(--space-5) var(--space-6); background: rgba(var(--color-secondary-rgb), 0.07); border-left: 4px solid var(--color-secondary); border-radius: var(--radius-md); margin-bottom: var(--space-6); }

/* ---- PROBLEM STATEMENT (pull quote + bento signs) ---- */
.problem-section { background: var(--color-white); }
.pull-quote { max-width: 900px; margin: 0 auto var(--space-12); text-align: center; }
.pull-quote p { font-family: var(--font-heading); font-style: italic; font-weight: 700; color: var(--color-primary); font-size: clamp(1.5rem, 3vw, 2.5rem); line-height: 1.3; }
.pull-quote p .text-accent { color: var(--color-secondary); }
.signs-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: var(--space-6); }
.sign-card { padding: var(--space-8) var(--space-6); background: var(--color-light); border-radius: var(--radius-lg); border-top: 4px solid var(--color-secondary); }
.sign-card:nth-child(even) { border-top-color: var(--color-primary); background: rgba(var(--color-secondary-rgb), 0.06); }
.sign-ic { width: 48px; height: 48px; border-radius: var(--radius-md); background: rgba(var(--color-secondary-rgb), 0.14); color: var(--color-secondary); display: flex; align-items: center; justify-content: center; margin-bottom: var(--space-4); }
.sign-card h3 { color: var(--color-primary); font-size: var(--font-size-lg); margin-bottom: var(--space-2); }
.sign-card p { color: var(--color-gray-dark); font-size: var(--font-size-sm); line-height: 1.65; margin: 0; }

/* ---- EXPERT POSITIONING (big stat asymmetric) ---- */
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

/* ---- SERVICE BREAKDOWN (list + process details) ---- */
.breakdown-section { background: var(--color-white); }
.breakdown-grid { display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-12); align-items: start; }
.included-list { list-style: none; display: grid; gap: var(--space-3); }
.included-list li { display: flex; gap: var(--space-3); align-items: flex-start; color: var(--color-gray-dark); line-height: 1.6; }
.included-list li svg { color: var(--color-secondary); flex-shrink: 0; margin-top: 3px; }
.proc-details summary {
  list-style: none; cursor: pointer; padding: var(--space-5) var(--space-6);
  background: var(--color-light); border-radius: var(--radius-md);
  font-family: var(--font-heading); font-weight: 700; color: var(--color-primary);
  display: flex; align-items: center; gap: var(--space-3); margin-bottom: var(--space-3);
  border-left: 4px solid var(--color-secondary); transition: background var(--transition-base);
}
.proc-details summary::-webkit-details-marker { display: none; }
.proc-details summary .p-num { color: var(--color-secondary); font-size: var(--font-size-xl); }
.proc-details[open] summary { background: rgba(var(--color-secondary-rgb), 0.10); }
.proc-details p { padding: 0 var(--space-6) var(--space-5); color: var(--color-gray-dark); line-height: 1.7; margin: 0 0 var(--space-3); }

/* ---- PROOF (real, non-fabricated guarantees) ---- */
.proof-section { background: var(--color-dark); }
.proof-grid { display: grid; grid-template-columns: 2fr 3fr; gap: var(--space-12); align-items: center; }
.proof-figure img { width: 100%; border-radius: var(--radius-xl); box-shadow: var(--shadow-lg); object-fit: cover; aspect-ratio: 3 / 4; }
.proof-copy h2 { color: var(--color-white); font-size: clamp(2rem, 4vw, 3rem); margin-bottom: var(--space-4); }
.proof-copy h2 .text-accent { color: var(--color-secondary); }
.proof-copy .answer-block { color: rgba(255,255,255,0.92); background: rgba(255,255,255,0.06); }
.proof-points { list-style: none; display: grid; gap: var(--space-4); margin-top: var(--space-6); }
.proof-points li { display: flex; gap: var(--space-3); align-items: flex-start; color: rgba(255,255,255,0.85); }
.proof-points li svg { color: var(--color-secondary); flex-shrink: 0; margin-top: 3px; }
.proof-points strong { color: var(--color-white); }

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
  .signs-grid { grid-template-columns: repeat(2, 1fr); }
  .expert-grid { grid-template-columns: 1fr; gap: var(--space-12); }
  .breakdown-grid { grid-template-columns: 1fr; gap: var(--space-10); }
  .proof-grid { grid-template-columns: 1fr; gap: var(--space-10); }
  .services-grid { grid-template-columns: 1fr; }
}
@media (max-width: 768px) {
  .sid-hero h1 { font-size: var(--font-size-4xl); }
  .sid-hero__trust { grid-template-columns: 1fr; }
  .faq-grid { grid-template-columns: 1fr; }
  .compare-head, .compare-row { grid-template-columns: 1fr; }
  .compare-head .them { display: none; }
}
@media (max-width: 600px) {
  .signs-grid { grid-template-columns: 1fr; }
  .expert-stats { grid-template-columns: 1fr; }
}
</style>

<!-- =====================================================================
     1. HERO
     ===================================================================== -->
<section class="hero sid-hero" style="background-image: url('<?php echo htmlspecialchars($photos['hero']); ?>');" aria-label="Siding installation and repair in Fort Smith">
  <div class="sid-hero__overlay"></div>
  <div class="container">
    <div class="sid-hero__inner">
      <nav class="sid-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a><span aria-hidden="true">/</span>
        <a href="/services/">Services</a><span aria-hidden="true">/</span>
        <span aria-current="page">Siding Installation &amp; Repair</span>
      </nav>
      <span class="sid-eyebrow"><?php echo icon('hammer', 16); ?> Exterior &middot; Fort Smith, AR</span>
      <h1>Siding Installation &amp; <span class="text-accent">Repair</span> in Fort Smith, AR</h1>
      <p class="hero-answer">JBL Roofing LLC installs and repairs siding across Fort Smith, AR — sealing your home against Arkansas weather, stopping moisture at the source, and lifting curb appeal. Licensed, insured, and locally owned, every project starts with a free inspection and an honest, written estimate.</p>
      <div class="sid-hero__actions">
        <a href="/contact/" class="btn btn-primary btn-lg">Get a Free Estimate</a>
        <a href="#breakdown" class="btn btn-ghost btn-lg">What's Included</a>
      </div>
      <ul class="sid-hero__trust">
        <li><?php echo icon('shield-check', 18); ?> Licensed &amp; Insured</li>
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
     2. PROBLEM STATEMENT
     ===================================================================== -->
<section class="problem-section" aria-label="Signs your siding is failing">
  <div class="container">
    <div class="pull-quote reveal-up">
      <p>Your siding is doing more than looking good — it's the <span class="text-accent">first barrier</span> between Arkansas weather and your walls.</p>
    </div>
    <div class="section-header reveal-up">
      <span class="section-subtitle">Warning Signs</span>
      <h2>How do you know your <span class="text-accent">siding</span> is failing?</h2>
      <p class="answer-block" style="max-width:70ch;margin-left:auto;margin-right:auto;">Siding is usually failing when you see cracked or warped panels, peeling and fading paint, soft or rotten spots, or rising energy bills. JBL Roofing LLC in Fort Smith inspects for all four and tells you honestly whether a repair or replacement makes more sense.</p>
    </div>
    <div class="signs-grid">
      <?php foreach ($signs as $i => $s): ?>
      <article class="sign-card reveal-up reveal-delay-<?php echo ($i % 3) + 1; ?>">
        <div class="sign-ic"><?php echo icon($s['icon'], 24); ?></div>
        <h3><?php echo $s['title']; ?></h3>
        <p><?php echo $s['text']; ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- =====================================================================
     3. EXPERT POSITIONING
     ===================================================================== -->
<section class="expert-section" aria-label="Why choose JBL Roofing for siding">
  <div class="container">
    <div class="expert-grid">
      <div class="expert-copy reveal-right">
        <span class="section-subtitle">The JBL Difference</span>
        <h2>Why hire <span class="text-accent">JBL Roofing</span> for your siding?</h2>
        <p class="answer-block">JBL Roofing LLC treats siding as part of your home's whole weather system, not just a surface. Because the same local crew handles your roof, gutters, and siding, water is managed from the roofline down — no gaps between trades where leaks start.</p>
        <p>We're a small, locally focused team with more than 20 years of combined exterior experience, built on honest work and fair pricing after years in the corporate world. When we pull old siding and find rot or a moisture problem, we fix it — we don't hide it behind new panels.</p>
        <div class="expert-stats">
          <div class="expert-stat"><div class="big">20+</div><div class="lbl">Years combined exterior experience</div></div>
          <div class="expert-stat"><div class="big">3</div><div class="lbl">States served — AR, OK, MO</div></div>
        </div>
      </div>
      <div class="expert-figure reveal-left">
        <img src="<?php echo htmlspecialchars($photos['expert']); ?>" sizes="(max-width: 1024px) 100vw, 420px"
             alt="JBL Roofing LLC crew working on a home exterior in Fort Smith, Arkansas" width="560" height="700" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- =====================================================================
     4. SERVICE BREAKDOWN
     ===================================================================== -->
<section id="breakdown" class="breakdown-section" aria-label="What a siding project includes">
  <div class="container">
    <div class="section-header reveal-up">
      <span class="section-subtitle">The Scope</span>
      <h2>What's included in a <span class="text-accent">siding project</span>?</h2>
      <p class="hero-answer">A JBL Roofing LLC siding project covers everything from the first inspection to the final cleanup — with the wall behind the siding handled, not skipped.</p>
    </div>
    <div class="breakdown-grid">
      <div class="reveal-right">
        <ul class="included-list">
          <?php foreach ($included as $item): ?>
          <li><?php echo icon('check-circle', 20); ?> <span><?php echo htmlspecialchars($item); ?></span></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="reveal-left">
        <?php foreach ($process as $step): ?>
        <details class="proc-details"<?php echo $step['n'] === '01' ? ' open' : ''; ?>>
          <summary><span class="p-num"><?php echo htmlspecialchars($step['n']); ?></span> <?php echo htmlspecialchars($step['title']); ?></summary>
          <p><?php echo htmlspecialchars($step['text']); ?></p>
        </details>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- =====================================================================
     5. PROOF (real guarantees — no fabricated reviews)
     ===================================================================== -->
<section class="proof-section" aria-label="What backs JBL Roofing's siding work">
  <div class="container">
    <div class="proof-grid">
      <div class="proof-figure reveal-right">
        <img src="<?php echo htmlspecialchars($photos['work']); ?>" sizes="(max-width: 1024px) 100vw, 420px"
             alt="Finished exterior work by JBL Roofing LLC in Fort Smith, Arkansas" width="540" height="720" loading="lazy">
      </div>
      <div class="proof-copy reveal-left">
        <span class="section-subtitle">Standing Behind It</span>
        <h2>What backs JBL's <span class="text-accent">siding work</span>?</h2>
        <p class="answer-block">Every JBL Roofing LLC siding project is backed by our license, insurance, and a workmanship commitment. We're a young company built by veterans of the trade, and our reputation in Fort Smith rests on doing each job right — so we protect it on every home.</p>
        <ul class="proof-points">
          <li><?php echo icon('shield-check', 20); ?> <span><strong>Licensed, insured &amp; bonded</strong> — coverage on every project</span></li>
          <li><?php echo icon('badge-check', 20); ?> <span><strong>Workmanship commitment</strong> — we stand behind the install</span></li>
          <li><?php echo icon('users', 20); ?> <span><strong>Same crew, start to finish</strong> — no anonymous subcontractors</span></li>
          <li><?php echo icon('map-pin', 20); ?> <span><strong>Local &amp; accountable</strong> — based right here in Fort Smith</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- =====================================================================
     6. COMPARISON
     ===================================================================== -->
<section class="compare-section" aria-label="How JBL Roofing compares">
  <div class="container">
    <div class="section-header reveal-up">
      <span class="section-subtitle">Side by Side</span>
      <h2>What makes JBL different from other <span class="text-accent">siding crews</span>?</h2>
      <p class="hero-answer">The difference shows up in the details most homeowners never see — behind the panels, in the estimate, and in who actually shows up.</p>
    </div>
    <div class="compare-table reveal-up">
      <div class="compare-head">
        <div class="them">Other Contractors</div>
        <div class="us">JBL Roofing LLC</div>
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
     7. FAQ
     ===================================================================== -->
<section class="faq-section" aria-label="Siding frequently asked questions">
  <div class="container">
    <div class="section-header reveal-up">
      <span class="section-subtitle">Good Questions</span>
      <h2>Have questions about <span class="text-accent">siding in Fort Smith</span>?</h2>
      <p class="hero-answer">Straight answers on cost, repair-vs-replace, timelines, efficiency, and what happens behind the panels.</p>
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
      <h2>What other exterior work does <span class="text-accent">JBL</span> handle?</h2>
      <p class="hero-answer">Siding, roof, and storm work all protect the same home. One local crew keeps them working together.</p>
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
     8. FINAL CTA
     ===================================================================== -->
<section class="closing-cta" aria-label="Get your free siding estimate">
  <div class="container">
    <h2 class="reveal-up">Ready to seal your home the right way?</h2>
    <p class="reveal-up reveal-delay-1">Get a free siding inspection and a clear written estimate from a local Fort Smith crew that fixes what's behind the panels, not just the surface. Built Tough. Built Right.</p>
    <a href="/contact/" class="btn btn-outline-white btn-lg reveal-up reveal-delay-2">Get My Free Estimate</a>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
