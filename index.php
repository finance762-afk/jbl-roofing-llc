<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ---------------------------------------------------------------------------
 * PAGE-LEVEL SETUP — Homepage
 * ------------------------------------------------------------------------- */
$currentPage = 'home';

$pageTitle       = 'Roof Repair & Replacement in Fort Smith, AR | ' . $siteName;
$pageDescription = 'JBL Roofing LLC delivers honest roof repair, replacement, and 24/7 storm damage restoration in Fort Smith, AR. Licensed, insured, free inspections — Built Tough. Built Right.';
$canonicalUrl    = $siteUrl . '/';
$ogType          = 'website';

/* Real client photos (remote — served from Supabase storage; no on-disk webp
 * variants exist, so remote images get a sizes attribute but no srcset). */
$imgBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/jbl-roofing-llc/photos/';
$photos = [
    'hero'  => $imgBase . '1785371119407-ivl8mo-IMG_3492.jpeg',
    'about' => $imgBase . '1785371124660-vir8wt-IMG_4572.jpeg',
    'card1' => $imgBase . '1785371126320-k4kjaq-IMG_4587.jpeg',
    'card2' => $imgBase . '1785371127618-ndtvms-IMG_4588.jpeg',
    'card3' => $imgBase . '1785371128999-7fb5tb-IMG_4591.jpeg',
    'card4' => $imgBase . '1785371131896-afguij-IMG_2806.jpeg',
    'card5' => $imgBase . '1785371133543-80u1r3-IMG_4564.jpeg',
];

$ogImage          = $photos['hero'];
$heroImagePreload = $photos['hero'];

/* Homepage service cards = the five real service-group pages (each lives at
 * /services/{slug}/). We do NOT link the 22 individual services because they
 * are grouped — those slugs have no standalone page. */
$homeServiceCards = [
    [
        'name' => 'Roofing Services',
        'slug' => 'roofing-services',
        'icon' => 'home',
        'photo'=> $photos['card1'],
        'desc' => 'Complete residential roofing — repairs, full replacements, and every major material system.',
        'bullets' => ['Repair, replace & inspect', 'Asphalt, metal, tile & slate', 'Free no-obligation estimates'],
        'tint' => 1, 'delay' => 1,
    ],
    [
        'name' => 'Storm Damage Repair',
        'slug' => 'storm-damage-repair',
        'icon' => 'shield-check',
        'photo'=> $photos['card2'],
        'desc' => 'Fast wind, hail, and water damage restoration after Arkansas storms roll through.',
        'bullets' => ['24/7 emergency response', 'Wind & hail specialists', 'Tarping & leak stabilization'],
        'tint' => 2, 'delay' => 2,
    ],
    [
        'name' => 'Seasonal Services',
        'slug' => 'seasonal-services',
        'icon' => 'wrench',
        'photo'=> $photos['card3'],
        'desc' => 'Gutter installation, metal roofing, and maintenance that keeps your roof ready year-round.',
        'bullets' => ['Seamless gutters & downspouts', 'Metal roofing installs', 'Preventive roof maintenance'],
        'tint' => 3, 'delay' => 3,
    ],
    [
        'name' => 'Siding Installation & Repair',
        'slug' => 'siding-installation-repair',
        'icon' => 'hammer',
        'photo'=> $photos['card4'],
        'desc' => 'Weatherproof siding installation and repair that lifts curb appeal and energy efficiency.',
        'bullets' => ['New siding installation', 'Storm & rot repair', 'Improved weatherproofing'],
        'tint' => 1, 'delay' => 1,
    ],
    [
        'name' => 'Insurance Claim Assistance',
        'slug' => 'insurance-claim-assistance',
        'icon' => 'badge-check',
        'photo'=> $photos['card5'],
        'desc' => 'We document the damage and work directly with your adjuster to streamline the claim.',
        'bullets' => ['Full damage documentation', 'We work with adjusters', 'Maximize your settlement'],
        'tint' => 2, 'delay' => 2,
    ],
];

/* Company promise / differentiators (from research brief — real, not fabricated) */
$promises = [
    ['icon' => 'map-pin',      'title' => 'Local Fort Smith Expertise',   'text' => 'We know the region\'s weather patterns, building codes, and the roofing challenges Arkansas homes actually face.'],
    ['icon' => 'clock',        'title' => 'Rapid Storm Response',         'text' => 'When hail and wind season hits, we move fast on emergency repairs so small damage never becomes a big problem.'],
    ['icon' => 'badge-check',  'title' => 'Direct Insurance Support',     'text' => 'We document damage and work hand-in-hand with your adjuster, taking the paperwork stress off your plate.'],
    ['icon' => 'shield-check', 'title' => 'Warranty You Can Count On',    'text' => 'Strong material and workmanship warranties back every job — we stand behind the roofs we build.'],
    ['icon' => 'thumbs-up',    'title' => 'Honest, Transparent Pricing',  'text' => 'Licensed, insured, and bonded with free, no-pressure inspections and estimates you can trust.'],
];

/* Process steps */
$processSteps = [
    ['n' => '01', 'title' => 'Free Inspection',     'text' => 'A thorough roof assessment with clear photos of exactly what we find — no obligation.'],
    ['n' => '02', 'title' => 'Transparent Estimate','text' => 'A detailed, itemized quote in plain language, including material and financing options.'],
    ['n' => '03', 'title' => 'Expert Installation', 'text' => 'Efficient, tidy work that protects your property and respects your time — most roofs in 1–3 days.'],
    ['n' => '04', 'title' => 'Final Walkthrough',   'text' => 'We clean up completely and walk the finished roof with you before we call it done.'],
];

/* FAQs — 5 from research brief + 1 truthful financing question */
$faqs = [
    ['q' => 'How much does a roof replacement cost in Fort Smith?',        'a' => 'Costs range from $8,000–$18,000 depending on size, materials, and roof complexity. JBL Roofing LLC provides free inspections and detailed estimates with no obligation to decide.'],
    ['q' => 'Does homeowners insurance cover roof damage?',                'a' => 'Most policies cover hail and wind damage. JBL Roofing LLC documents the damage, works directly with adjusters, and handles the process so you don\'t have to — ask about our insurance claim assistance.'],
    ['q' => 'How long does a roof replacement take?',                      'a' => 'Most residential roofs are completed in 1–3 days. We work efficiently, protect your property, and leave everything clean — no surprise timeline extensions.'],
    ['q' => 'What\'s the best roofing material for Arkansas weather?',     'a' => 'Asphalt shingles are affordable and proven in our climate. Metal roofing resists hail and wind better. We recommend based on your budget, home style, and exposure to Fort Smith\'s severe weather.'],
    ['q' => 'How often should I get my roof inspected?',                   'a' => 'Annual inspections catch problems early and extend roof life. After storms, inspections are critical — especially hail events common to our area. We offer free post-storm assessments.'],
    ['q' => 'Do you offer financing for roof repairs and replacement?',    'a' => 'Yes. JBL Roofing LLC offers flexible, low-interest financing plans that make roof repairs and full replacements affordable for Fort Smith homeowners. Ask about options during your free estimate.'],
];

/* ---------------------------------------------------------------------------
 * SCHEMA — @graph: RoofingContractor (organization) + FAQPage
 * ------------------------------------------------------------------------- */
$orgSchema = [
    '@type'       => 'RoofingContractor',
    '@id'         => $siteUrl . '#organization',
    'name'        => $siteName,
    'url'         => $siteUrl,
    'image'       => $ogImage,
    'logo'        => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/jbl-roofing-llc/logo/1785370857501-nxseph-Logo.png',
    'description' => $siteName . ' is a licensed, insured roofing contractor based in Fort Smith, AR, providing roof repair, roof replacement, storm damage restoration, gutters, siding, and 24/7 emergency roofing across Arkansas, Oklahoma, and Missouri.',
    'slogan'      => $tagline,
    'priceRange'  => '$$',
    'address'     => [
        '@type'           => 'PostalAddress',
        'streetAddress'   => $address['street'],
        'addressLocality' => $address['city'],
        'addressRegion'   => $address['state'],
        'postalCode'      => $address['zip'],
        'addressCountry'  => 'US',
    ],
    'geo' => [
        '@type'     => 'GeoCoordinates',
        'latitude'  => $geo['lat'],
        'longitude' => $geo['lng'],
    ],
    'openingHoursSpecification' => [
        '@type'     => 'OpeningHoursSpecification',
        'dayOfWeek' => ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'],
        'opens'     => '00:00',
        'closes'    => '23:59',
    ],
    'areaServed' => [
        ['@type' => 'City',  'name' => 'Fort Smith'],
        ['@type' => 'State', 'name' => 'Arkansas'],
        ['@type' => 'State', 'name' => 'Oklahoma'],
        ['@type' => 'State', 'name' => 'Missouri'],
    ],
    'makesOffer' => array_map(function ($c) {
        return [
            '@type' => 'Offer',
            'itemOffered' => ['@type' => 'Service', 'name' => $c['name']],
        ];
    }, $homeServiceCards),
];
if (!empty($phone)) {
    $orgSchema['telephone'] = $phone;
}

$faqNode = generateFAQSchema($faqs);
unset($faqNode['@context']);

$schemaMarkup = generateGraphSchema([$orgSchema, $faqNode]);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<style>
/* =========================================================================
   HOMEPAGE — page-specific design layer (Premium tier)
   Tokens only. No hardcoded colors / shadows / spacing.
   ========================================================================= */
:root {
  --color-accent-rgb: 158, 159, 159;
  --color-card-tint-1: rgba(var(--color-primary-rgb), 0.05);
  --color-card-tint-2: rgba(var(--color-secondary-rgb), 0.10);
  --color-card-tint-3: rgba(var(--color-accent-rgb), 0.14);
}

.text-accent { color: var(--color-secondary); }
.sr-only {
  position: absolute;
  width: 1px; height: 1px;
  padding: 0; margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0;
}

/* ---- HERO (60/40 split, layered overlay + noise) ---- */
.hero--home {
  min-height: 100vh;
  display: flex;
  align-items: center;
  text-align: left;
  padding-top: var(--space-16);
  padding-bottom: var(--space-16);
}
.hero--home .hero__overlay {
  position: absolute;
  inset: 0;
  z-index: 1;
  background:
    linear-gradient(115deg, rgba(var(--color-primary-rgb), 0.94) 0%, rgba(var(--color-primary-rgb), 0.80) 42%, rgba(var(--color-secondary-rgb), 0.55) 100%);
}
.hero--home .hero__overlay::after {
  content: "";
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='3'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.5'/%3E%3C/svg%3E");
  opacity: 0.06;
  mix-blend-mode: overlay;
}
.hero__grid {
  position: relative;
  z-index: 2;
  display: grid;
  grid-template-columns: 3fr 2fr;
  gap: var(--space-12);
  align-items: center;
  width: 100%;
}
.hero__text .hero-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  color: var(--color-white);
  background: rgba(var(--color-secondary-rgb), 0.25);
  border-color: rgba(255, 255, 255, 0.28);
}
.hero__text .hero-eyebrow svg { color: var(--color-white); }
.hero__title {
  color: var(--color-white);
  font-size: var(--font-size-6xl);
  line-height: 1.05;
  margin-bottom: var(--space-5);
}
.hero__title .text-accent { color: var(--color-secondary); }
.hero__subtitle {
  color: rgba(255, 255, 255, 0.90);
  font-size: var(--font-size-lg);
  line-height: 1.7;
  max-width: 46ch;
  margin-bottom: var(--space-8);
}
.hero__actions {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  margin-bottom: var(--space-8);
}
.hero__actions .btn-secondary {
  background: var(--color-secondary);
  color: var(--color-white);
  border-color: var(--color-secondary);
}
.hero__actions .btn-secondary:hover {
  background: var(--color-white);
  color: var(--color-primary);
  border-color: var(--color-white);
}
.hero__trust {
  display: grid;
  grid-template-columns: repeat(2, auto);
  gap: var(--space-3) var(--space-6);
  list-style: none;
}
.hero__trust li {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  color: rgba(255, 255, 255, 0.92);
  font-size: var(--font-size-sm);
  font-weight: 600;
}
.hero__trust li svg { color: var(--color-secondary); flex-shrink: 0; }

/* ---- HERO LEAD FORM (glassmorphism card) ---- */
.hero-form-card {
  background: rgba(255, 255, 255, 0.94);
  backdrop-filter: blur(14px);
  -webkit-backdrop-filter: blur(14px);
  border: 1px solid rgba(255, 255, 255, 0.5);
  border-radius: var(--radius-xl);
  box-shadow: var(--shadow-xl);
  padding: var(--space-8);
}
.hero-form-card h2 {
  font-size: var(--font-size-2xl);
  margin-bottom: var(--space-1);
  color: var(--color-primary);
}
.hero-form-tagline {
  color: var(--color-secondary);
  font-weight: 600;
  font-size: var(--font-size-sm);
  margin-bottom: var(--space-5);
}
.hero-form .form-row { margin-bottom: var(--space-3); }
.hero-form input,
.hero-form select {
  width: 100%;
  padding: var(--space-4);
  font-family: var(--font-body);
  font-size: var(--font-size-base);
  color: var(--color-black);
  background: var(--color-white);
  border: 1px solid var(--color-gray-light);
  border-radius: var(--radius-md);
  transition: border-color var(--transition-fast), box-shadow var(--transition-fast);
}
.hero-form input:focus,
.hero-form select:focus {
  outline: none;
  border-color: var(--color-secondary);
  box-shadow: 0 0 0 3px rgba(var(--color-secondary-rgb), 0.18);
}
.hero-form .btn-block {
  width: 100%;
  margin-top: var(--space-2);
}
.form-footnote {
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  margin: var(--space-3) 0 0;
  line-height: 1.6;
}
.form-footnote a { color: var(--color-secondary); text-decoration: underline; }

/* ---- SECTION DIVIDERS (two distinct styles) ---- */
.section-divider { position: relative; line-height: 0; }
.section-divider svg { display: block; width: 100%; height: auto; }
.section-divider--wave path { fill: var(--color-light); }
.section-divider--angle path { fill: var(--color-dark); }

/* ---- NUMBERED SECTION LABEL ---- */
.numbered-section { position: relative; }
.numbered-section::before {
  content: attr(data-num);
  position: absolute;
  top: var(--space-8);
  right: var(--space-8);
  font-family: var(--font-heading);
  font-size: var(--font-size-6xl);
  font-weight: 800;
  color: rgba(var(--color-primary-rgb), 0.05);
  line-height: 1;
  pointer-events: none;
  z-index: 0;
}
.numbered-section .container { position: relative; z-index: 1; }
.section-header h2 .text-accent { color: var(--color-secondary); }
.hero-answer {
  max-width: 60ch;
  margin: 0 auto var(--space-4);
  color: var(--color-gray-dark);
  font-size: var(--font-size-lg);
  line-height: 1.7;
}
.section-subtitle {
  display: block;
  color: var(--color-secondary);
  font-weight: 700;
  font-size: var(--font-size-sm);
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-bottom: var(--space-2);
}

/* ---- SERVICES: tinted image cards (required component) ---- */
.services-section { background: var(--color-white); }
.services-grid { grid-template-columns: repeat(4, 1fr); }
.card-tint-1 { background: var(--color-card-tint-1); box-shadow: none; }
.card-tint-2 { background: var(--color-card-tint-2); box-shadow: none; }
.card-tint-3 { background: var(--color-card-tint-3); box-shadow: none; }
.service-card-with-image {
  border-radius: var(--radius-lg);
  overflow: hidden;
  display: flex;
  flex-direction: column;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.service-card-with-image:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow-lg);
}
.service-card__image {
  position: relative;
  aspect-ratio: 5 / 3;
  overflow: hidden;
}
.service-card__image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform var(--transition-slow);
}
.service-card-with-image:hover .service-card__image img { transform: scale(1.06); }
.service-card__body {
  padding: var(--space-8) var(--space-6) var(--space-6);
  text-align: center;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: var(--space-3);
  flex: 1;
}
.service-card__icon {
  width: 56px;
  height: 56px;
  border-radius: var(--radius-full);
  background: var(--color-white);
  box-shadow: var(--shadow-md);
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: -44px;
  color: var(--color-secondary);
}
.service-card__icon svg { width: 26px; height: 26px; }
.service-card-with-image h3 {
  color: var(--color-primary);
  font-size: var(--font-size-xl);
  margin: 0;
}
.service-card__desc {
  color: var(--color-gray-dark);
  font-size: var(--font-size-sm);
  line-height: 1.6;
  margin: 0;
}
.service-card-with-image ul {
  list-style: none;
  width: 100%;
  text-align: left;
  display: flex;
  flex-direction: column;
  gap: var(--space-2);
  border-top: 1px solid rgba(var(--color-primary-rgb), 0.10);
  padding-top: var(--space-4);
  margin-top: var(--space-2);
}
.service-card-with-image ul li {
  position: relative;
  padding-left: var(--space-6);
  font-size: var(--font-size-sm);
  color: var(--color-gray-dark);
}
.service-card-with-image ul li::before {
  content: "";
  position: absolute;
  left: 0;
  top: 0.4em;
  width: 10px;
  height: 10px;
  border-radius: var(--radius-full);
  background: var(--color-secondary);
}
.service-card__cta {
  margin-top: auto;
  width: 100%;
  padding-top: var(--space-4);
  border-top: 1px solid rgba(var(--color-primary-rgb), 0.10);
  color: var(--color-secondary);
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: var(--font-size-sm);
}
.service-card__cta::after { content: " \2192"; transition: transform var(--transition-base); display: inline-block; }
.service-card__cta:hover { color: var(--color-primary); }
.service-card__cta:hover::after { transform: translateX(4px); }
.services-cta { text-align: center; margin-top: var(--space-12); }

/* ---- STATS ---- */
.stats-section { background: var(--color-primary); }
.stats-section .stat-item .stat-number {
  color: var(--color-white);
  font-family: var(--font-heading);
  font-size: var(--font-size-6xl);
  font-weight: 800;
  line-height: 1;
}
.stats-section .stat-item .stat-label {
  color: rgba(255, 255, 255, 0.75);
  font-size: var(--font-size-sm);
  text-transform: uppercase;
  letter-spacing: 1px;
  margin-top: var(--space-2);
}

/* ---- ABOUT / PROCESS (asymmetric broken grid) ---- */
.about-process { background: var(--color-light); }
.about-grid {
  display: grid;
  grid-template-columns: 3fr 2fr;
  gap: var(--space-16);
  align-items: center;
}
.about-copy > p {
  color: var(--color-gray-dark);
  line-height: 1.8;
  margin-bottom: var(--space-4);
}
.process-steps {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-6);
  margin-top: var(--space-8);
}
.process-step {
  padding: var(--space-6);
  background: var(--color-white);
  border-radius: var(--radius-lg);
  border-left: 4px solid var(--color-secondary);
  box-shadow: var(--shadow-sm);
}
.process-step .step-num {
  font-family: var(--font-heading);
  font-size: var(--font-size-2xl);
  font-weight: 800;
  color: rgba(var(--color-secondary-rgb), 0.55);
  line-height: 1;
}
.process-step h3 { font-size: var(--font-size-lg); margin: var(--space-2) 0; color: var(--color-primary); }
.process-step p { font-size: var(--font-size-sm); color: var(--color-gray); margin: 0; line-height: 1.6; }
.about-figure { position: relative; }
.about-figure img {
  width: 100%;
  border-radius: var(--radius-xl);
  box-shadow: var(--shadow-lg);
  object-fit: cover;
  aspect-ratio: 4 / 5;
}
.about-stat-card {
  position: absolute;
  left: calc(-1 * var(--space-8));
  bottom: calc(-1 * var(--space-6));
  background: var(--color-secondary);
  color: var(--color-white);
  padding: var(--space-6) var(--space-8);
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-xl);
  text-align: center;
}
.about-stat-card .big { font-family: var(--font-heading); font-size: var(--font-size-4xl); font-weight: 800; line-height: 1; }
.about-stat-card .lbl { font-size: var(--font-size-xs); text-transform: uppercase; letter-spacing: 1px; margin-top: var(--space-1); }

/* ---- PROMISE (dark signature section) ---- */
.promise-section { background: var(--color-dark); position: relative; }
.promise-section .section-header h2 { color: var(--color-white); }
.promise-section .section-header p { color: rgba(255, 255, 255, 0.7); }
.promise-section .section-subtitle { color: var(--color-secondary); }
.promise-blob {
  position: absolute;
  width: 420px;
  height: 420px;
  border-radius: var(--radius-full);
  background: radial-gradient(circle, rgba(var(--color-secondary-rgb), 0.18), transparent 70%);
  top: calc(-1 * var(--space-16));
  right: calc(-1 * var(--space-16));
  pointer-events: none;
  z-index: 0;
}
.promise-grid {
  position: relative;
  z-index: 1;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
}
.promise-card {
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.10);
  border-radius: var(--radius-lg);
  padding: var(--space-8);
  transition: transform var(--transition-base), border-color var(--transition-base);
}
.promise-card:hover { transform: translateY(-4px); border-color: rgba(var(--color-secondary-rgb), 0.6); }
.promise-card .p-icon {
  width: 52px;
  height: 52px;
  border-radius: var(--radius-md);
  background: rgba(var(--color-secondary-rgb), 0.18);
  color: var(--color-secondary);
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: var(--space-4);
}
.promise-card h3 { color: var(--color-white); font-size: var(--font-size-lg); margin-bottom: var(--space-2); }
.promise-card p { color: rgba(255, 255, 255, 0.72); font-size: var(--font-size-sm); line-height: 1.7; margin: 0; }

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
.closing-cta p { color: rgba(255, 255, 255, 0.9); max-width: 52ch; margin: 0 auto var(--space-8); font-size: var(--font-size-lg); }

/* ---- RESPONSIVE ---- */
@media (max-width: 1024px) {
  .hero__grid { grid-template-columns: 1fr; gap: var(--space-8); }
  .about-grid { grid-template-columns: 1fr; gap: var(--space-12); }
  .promise-grid { grid-template-columns: repeat(2, 1fr); }
  .services-grid { grid-template-columns: repeat(2, 1fr); }
  .about-stat-card { left: var(--space-4); bottom: calc(-1 * var(--space-4)); }
}
@media (max-width: 768px) {
  .hero__title { font-size: var(--font-size-4xl); }
  .hero__trust { grid-template-columns: 1fr; }
  .process-steps { grid-template-columns: 1fr; }
  .numbered-section::before { display: none; }
}
@media (max-width: 600px) {
  .services-grid { grid-template-columns: 1fr; }
  .promise-grid { grid-template-columns: 1fr; }
  .faq-grid { grid-template-columns: 1fr; }
}
</style>

<!-- =====================================================================
     HERO
     ===================================================================== -->
<section class="hero hero--home" style="background-image: url('<?php echo htmlspecialchars($photos['hero']); ?>');" aria-label="Fort Smith roofing contractor">
  <div class="hero__overlay"></div>
  <div class="container hero__grid">
    <div class="hero__text">
      <span class="hero-eyebrow">
        <?php echo icon('shield-check', 16); ?>
        Serving Fort Smith Since <?php echo $yearEstablished; ?>
      </span>
      <h1 class="hero__title">Trusted <span class="text-accent">Roof Repair</span> &amp; Replacement in Fort Smith, AR</h1>
      <p class="hero__subtitle">JBL Roofing LLC is a locally focused, family-run crew with 20+ years of combined experience. We fix leaks, replace worn roofs, and restore storm damage — honest work and fair pricing, done right the first time.</p>
      <div class="hero__actions">
        <a href="#estimate-form" class="btn btn-primary btn-lg">Get a Free Estimate</a>
        <a href="/services/" class="btn btn-secondary btn-lg">Explore Our Services</a>
      </div>
      <ul class="hero__trust">
        <li><?php echo icon('shield-check', 18); ?> Licensed &amp; Insured</li>
        <li><?php echo icon('award', 18); ?> 20+ Yrs Combined Experience</li>
        <li><?php echo icon('clock', 18); ?> 24/7 Emergency Response</li>
        <li><?php echo icon('check-circle', 18); ?> Free, No-Pressure Estimates</li>
      </ul>
    </div>

    <aside class="hero-form-card" id="estimate-form">
      <h2>Get Your Free Estimate</h2>
      <p class="hero-form-tagline">No obligation. Same-day response.</p>
      <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST" class="hero-form">
        <input type="hidden" name="_next" value="<?php echo htmlspecialchars($siteUrl); ?>/thank-you">
        <input type="hidden" name="_captcha" value="false">
        <input type="hidden" name="_template" value="table">
        <input type="hidden" name="_subject" value="New estimate request — JBL Roofing LLC website">
        <input type="hidden" name="_cc" value="CustomerService@pageoneinsights.com">
        <input type="text" name="_honey" style="display:none" tabindex="-1" autocomplete="off">
        <input type="hidden" name="form_location" value="hero">
        <input type="hidden" name="consent_version" value="v2.1">
        <input type="hidden" name="consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'] ?? '/'); ?>">
        <div class="form-row">
          <label for="hero-name" class="sr-only">Full name</label>
          <input type="text" id="hero-name" name="name" placeholder="Full name" required>
        </div>
        <div class="form-row">
          <label for="hero-phone" class="sr-only">Phone number</label>
          <input type="tel" id="hero-phone" name="phone" placeholder="Phone number" required>
        </div>
        <div class="form-row">
          <label for="hero-zip" class="sr-only">ZIP code</label>
          <input type="text" id="hero-zip" name="zip" placeholder="ZIP code" pattern="[0-9]{5}" inputmode="numeric" required>
        </div>
        <div class="form-row">
          <label for="hero-service" class="sr-only">Service needed</label>
          <select id="hero-service" name="service_requested">
            <option value="">What do you need?</option>
            <?php foreach ($homeServiceCards as $c): ?>
              <option value="<?php echo htmlspecialchars($c['name']); ?>"><?php echo htmlspecialchars($c['name']); ?></option>
            <?php endforeach; ?>
            <option value="Not sure / Other">Not sure / Other</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary btn-block btn-lg">Get My Free Estimate</button>
        <p class="form-footnote">By submitting, you agree to our <a href="/terms/">Terms</a> and <a href="/privacy-policy/">Privacy Policy</a>.</p>
      </form>
    </aside>
  </div>
</section>

<!-- Ticker strip -->
<div class="ticker-strip" aria-hidden="true">
  <div class="ticker-track">
    <?php
    $tickerItems = [
        'Licensed &amp; Insured', 'Roof Repair &amp; Replacement', '24/7 Emergency Roofing',
        'Storm &amp; Hail Damage', 'Free Inspections', 'Metal &amp; Asphalt Roofing',
        'Insurance Claim Help', 'Serving AR • OK • MO', 'Financing Available',
    ];
    // Duplicate for seamless loop
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
     SERVICES (data-num 01)
     ===================================================================== -->
<section class="numbered-section services-section" data-num="01" aria-label="Roofing services in Fort Smith">
  <div class="container">
    <div class="section-header reveal-up">
      <span class="section-subtitle">What We Do</span>
      <h2>What <span class="text-accent">roofing services</span> does JBL Roofing offer in Fort Smith?</h2>
      <p class="hero-answer">JBL Roofing LLC handles the full range of residential roofing in Fort Smith, AR — repairs, complete replacements, storm damage restoration, gutters, siding, and insurance claim support. Whether it's a small leak or a whole new roof, one local crew covers it all.</p>
    </div>

    <div class="services-grid">
      <?php foreach ($homeServiceCards as $c): ?>
      <article class="service-card-with-image card-tint-<?php echo $c['tint']; ?> reveal-up reveal-delay-<?php echo $c['delay']; ?>">
        <div class="service-card__image">
          <img src="<?php echo htmlspecialchars($c['photo']); ?>"
               sizes="(max-width: 600px) 100vw, (max-width: 1024px) 50vw, 300px"
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

    <div class="services-cta reveal-up">
      <a href="/services/" class="btn btn-primary btn-lg">View All <?php echo count($services); ?> Services</a>
    </div>
  </div>
</section>

<!-- =====================================================================
     STATS
     ===================================================================== -->
<section class="stats-section" aria-label="JBL Roofing by the numbers">
  <div class="container">
    <div class="stats-grid">
      <div class="stat-item reveal-scale reveal-delay-1">
        <div class="stat-number" data-counter="20" data-suffix="+">20+</div>
        <div class="stat-label">Years Combined Experience</div>
      </div>
      <div class="stat-item reveal-scale reveal-delay-2">
        <div class="stat-number" data-counter="3">3</div>
        <div class="stat-label">States Served — AR, OK, MO</div>
      </div>
      <div class="stat-item reveal-scale reveal-delay-3">
        <div class="stat-number" data-counter="100" data-suffix=" mi">100 mi</div>
        <div class="stat-label">Service Radius</div>
      </div>
      <div class="stat-item reveal-scale reveal-delay-4">
        <div class="stat-number">24/7</div>
        <div class="stat-label">Emergency Response</div>
      </div>
    </div>
  </div>
</section>

<!-- =====================================================================
     MID-PAGE CTA BANNER
     ===================================================================== -->
<section class="cta-banner" aria-label="Storm damage call to action">
  <div class="container">
    <h2 class="reveal-up">Storm rolled through? Don't wait on a leak.</h2>
    <p class="reveal-up reveal-delay-1">Hail and wind damage gets worse — and more expensive — the longer it sits. JBL Roofing LLC offers free, no-pressure inspections and 24/7 emergency response across Fort Smith and the surrounding region.</p>
    <a href="#estimate-form" class="btn btn-outline-white btn-lg reveal-up reveal-delay-2">Book a Free Inspection</a>
  </div>
</section>

<!-- =====================================================================
     ABOUT / PROCESS (data-num 02)
     ===================================================================== -->
<section class="numbered-section about-process" data-num="02" aria-label="About JBL Roofing and our process">
  <div class="container">
    <div class="about-grid">
      <div class="about-copy reveal-right">
        <span class="section-subtitle">Our Story</span>
        <h2>Local roofers who put <span class="text-accent">homeowners first</span></h2>
        <p>At JBL Roofing LLC, we believe in putting homeowners first. With over 20 years of combined roofing experience, our team understands what it takes to do honest work and earn your trust. After years working for large corporations, we decided to do things differently — building a company that values fair pricing and genuine customer care over quick profits.</p>
        <p>We're a small, locally focused team serving communities across Arkansas, Oklahoma, and Missouri. Whether you need a minor repair or a complete replacement, we approach every project with the same integrity and attention to detail — treating your home and family the way we'd want ours treated.</p>

        <div class="process-steps">
          <?php foreach ($processSteps as $step): ?>
          <div class="process-step reveal-up">
            <div class="step-num"><?php echo htmlspecialchars($step['n']); ?></div>
            <h3><?php echo htmlspecialchars($step['title']); ?></h3>
            <p><?php echo htmlspecialchars($step['text']); ?></p>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="about-figure reveal-left">
        <img src="<?php echo htmlspecialchars($photos['about']); ?>"
             sizes="(max-width: 1024px) 100vw, 500px"
             alt="JBL Roofing LLC crew completing a residential roofing project in Fort Smith, Arkansas"
             width="600" height="750" loading="lazy">
        <div class="about-stat-card">
          <div class="big">20+</div>
          <div class="lbl">Years Combined<br>Experience</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Angle divider into dark promise section -->
<div class="section-divider section-divider--angle" aria-hidden="true">
  <svg viewBox="0 0 1440 50" preserveAspectRatio="none"><path d="M0,0 L1440,50 L1440,50 L0,50 Z"></path></svg>
</div>

<!-- =====================================================================
     PROMISE / DIFFERENTIATORS (data-num 03 — dark signature section)
     ===================================================================== -->
<section class="numbered-section promise-section" data-num="03" aria-label="Why Fort Smith homeowners choose JBL Roofing">
  <div class="promise-blob" aria-hidden="true"></div>
  <div class="container">
    <div class="section-header reveal-up">
      <span class="section-subtitle">The JBL Difference</span>
      <h2>Why Fort Smith homeowners choose JBL Roofing</h2>
      <p>Five reasons neighbors across Arkansas, Oklahoma, and Missouri trust us with the roof over their heads.</p>
    </div>

    <div class="promise-grid">
      <?php foreach ($promises as $i => $p): ?>
      <div class="promise-card reveal-up reveal-delay-<?php echo ($i % 3) + 1; ?>">
        <div class="p-icon"><?php echo icon($p['icon'], 26); ?></div>
        <h3><?php echo htmlspecialchars($p['title']); ?></h3>
        <p><?php echo htmlspecialchars($p['text']); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- =====================================================================
     FAQ (data-num 04)
     ===================================================================== -->
<section class="numbered-section faq-section" data-num="04" aria-label="Frequently asked roofing questions">
  <div class="container">
    <div class="section-header reveal-up">
      <span class="section-subtitle">Good Questions</span>
      <h2>Fort Smith roofing questions, <span class="text-accent">answered</span></h2>
      <p class="hero-answer">Straight answers on cost, timelines, insurance, and materials — from a local roofer, not a call center.</p>
    </div>

    <div class="faq-grid">
      <?php foreach ($faqs as $i => $faq): ?>
      <div class="faq-item reveal-up reveal-delay-<?php echo ($i % 3) + 1; ?>">
        <div class="faq-icon"><?php echo icon('info', 20); ?></div>
        <div>
          <h3><?php echo htmlspecialchars($faq['q']); ?></h3>
          <p><?php echo htmlspecialchars($faq['a']); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- =====================================================================
     CLOSING CTA
     ===================================================================== -->
<section class="closing-cta" aria-label="Get your free roofing estimate">
  <div class="container">
    <h2 class="reveal-up">Ready for a roof that's Built Tough &amp; Built Right?</h2>
    <p class="reveal-up reveal-delay-1">Get a free, no-obligation inspection and a clear estimate from a local Fort Smith crew that treats your home like our own.</p>
    <a href="#estimate-form" class="btn btn-outline-white btn-lg reveal-up reveal-delay-2">Get My Free Estimate</a>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
