<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

/* ---------------------------------------------------------------------------
 * PAGE SETUP — Fort Smith Service Area
 * ------------------------------------------------------------------------- */
$currentPage = 'service-areas';
$areaName = 'Fort Smith';
$areaState = 'AR';
$areaZip = '72903';

$pageTitle = 'Roofing Contractor in Fort Smith, AR | Emergency Repairs & Replacement | ' . $siteName;
$pageDescription = 'Licensed Fort Smith roofing contractor serving Sebastian County with expert roof repair, replacement, storm damage restoration, and 24/7 emergency services. Free inspections for Fort Smith homeowners.';
$canonicalUrl = $siteUrl . '/areas/fort-smith/';
$ogImage = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/jbl-roofing-llc/photos/1785371128999-7fb5tb-IMG_4591.jpeg';

/* ---------------------------------------------------------------------------
 * SCHEMA MARKUP — @graph with LocalBusiness + BreadcrumbList
 * ------------------------------------------------------------------------- */
$breadcrumbSchema = [
    '@type' => 'BreadcrumbList',
    'itemListElement' => [
        [
            '@type' => 'ListItem',
            'position' => 1,
            'name' => 'Home',
            'item' => $siteUrl . '/'
        ],
        [
            '@type' => 'ListItem',
            'position' => 2,
            'name' => 'Service Areas',
            'item' => $siteUrl . '/service-areas/'
        ],
        [
            '@type' => 'ListItem',
            'position' => 3,
            'name' => 'Fort Smith, AR',
            'item' => $canonicalUrl
        ]
    ]
];

$localBusinessSchema = [
    '@type' => 'RoofingContractor',
    '@id' => $siteUrl . '#organization',
    'name' => $siteName,
    'url' => $siteUrl,
    'telephone' => $phone,
    'email' => $email,
    'description' => $siteName . ' provides licensed roofing contractor services in Fort Smith, AR including emergency roof repair, roof replacement, storm damage restoration, and new installations.',
    'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => $address['street'],
        'addressLocality' => $address['city'],
        'addressRegion' => $address['state'],
        'postalCode' => $address['zip'],
        'addressCountry' => 'US'
    ],
    'geo' => [
        '@type' => 'GeoCoordinates',
        'latitude' => $geo['lat'],
        'longitude' => $geo['lng']
    ],
    'areaServed' => [
        '@type' => 'City',
        'name' => 'Fort Smith',
        'containedInPlace' => [
            '@type' => 'State',
            'name' => 'Arkansas'
        ]
    ],
    'openingHours' => 'Mo-Su 00:00-23:59',
    'priceRange' => '$$'
];

$schemaGraph = [
    '@context' => 'https://schema.org',
    '@graph' => [$localBusinessSchema, $breadcrumbSchema]
];

$schemaMarkup = '<script type="application/ld+json">' . json_encode($schemaGraph, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>

<header class="site-header" role="banner">
  <div class="container">
    <div class="header-content">
      <a href="/" class="site-logo" aria-label="<?php echo htmlspecialchars($siteName); ?> Home">
        <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/jbl-roofing-llc/logo/1785370857501-nxseph-Logo.png" alt="<?php echo htmlspecialchars($siteName); ?> Logo" width="180" height="54">
      </a>

      <nav class="site-nav" role="navigation" aria-label="Main navigation">
        <ul class="nav-links">
          <li><a href="/">Home</a></li>
          <li class="nav-dropdown">
            <a href="/services/" aria-haspopup="true" aria-expanded="false">Services</a>
            <ul class="nav-dropdown-menu" role="menu" style="display:none">
              <?php foreach ($serviceGroups as $group): ?>
                <li role="none"><a href="/services/<?php echo htmlspecialchars($group['slug']); ?>/" role="menuitem"><?php echo htmlspecialchars($group['page']); ?></a></li>
              <?php endforeach; ?>
            </ul>
          </li>
          <li><a href="/about/">About</a></li>
          <li><a href="/service-areas/" aria-current="page">Service Areas</a></li>
          <li><a href="/contact/">Contact</a></li>
        </ul>

        <a href="/contact/" class="btn btn-accent nav-cta">Free Estimate</a>

        <button class="hamburger" aria-label="Toggle menu" aria-expanded="false">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </nav>
    </div>
  </div>
</header>

<!-- Mobile Menu Overlay -->
<div class="mobile-menu" aria-hidden="true">
  <nav role="navigation" aria-label="Mobile navigation">
    <a href="/">Home</a>
    <a href="/services/">Services</a>
    <?php foreach ($serviceGroups as $group): ?>
      <a href="/services/<?php echo htmlspecialchars($group['slug']); ?>/" style="padding-left: var(--space-6); font-size: var(--font-size-sm);"><?php echo htmlspecialchars($group['page']); ?></a>
    <?php endforeach; ?>
    <a href="/about/">About</a>
    <a href="/service-areas/" aria-current="page">Service Areas</a>
    <a href="/contact/">Contact</a>
  </nav>
</div>

<main id="main-content">
  <!-- Hero Section -->
  <section class="hero hero--area">
    <div class="hero__bg"></div>
    <div class="hero__content container">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span class="breadcrumb-sep" aria-hidden="true">/</span>
        <a href="/service-areas/">Service Areas</a>
        <span class="breadcrumb-sep" aria-hidden="true">/</span>
        <span aria-current="page">Fort Smith</span>
      </nav>

      <h1>Fort Smith Roofing Contractor — <span class="text-accent">Licensed & Trusted</span></h1>
      <p class="hero-answer">JBL Roofing LLC is a licensed Arkansas roofing contractor based in Fort Smith, serving Sebastian County homeowners with emergency roof repair, complete roof replacement, storm damage restoration, and new installations. We understand Fort Smith's weather challenges—from severe spring storms to damaging hail—and install roofing systems proven to withstand Arkansas climate extremes.</p>

      <div class="hero__cta">
        <a href="/contact/" class="btn btn-accent btn-lg">Get Free Fort Smith Roof Inspection</a>
        <?php if (!empty($phone)): ?>
          <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn btn-outline-white btn-lg">
            <?php echo icon('phone', 20); ?>
            Call Now — 24/7 Emergency
          </a>
        <?php endif; ?>
      </div>
    </div>

    <style>
      .hero--area {
        position: relative;
        padding: calc(var(--nav-height) + var(--space-10)) 0 var(--space-10);
        background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark, #041209) 100%);
        color: white;
        min-height: 60vh;
        display: flex;
        align-items: center;
        overflow: hidden;
      }

      .hero__bg {
        position: absolute;
        inset: 0;
        background: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/jbl-roofing-llc/photos/1785371128999-7fb5tb-IMG_4591.jpeg') center/cover no-repeat;
        opacity: 0.18;
        z-index: 0;
      }

      .hero__bg::after {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, transparent 0%, rgba(8,37,18,0.6) 100%);
      }

      .hero__content {
        position: relative;
        z-index: 1;
        max-width: var(--content-width);
      }

      .hero--area h1 {
        font-size: clamp(2.25rem, 6vw, 3.5rem);
        margin-bottom: var(--space-4);
        text-wrap: balance;
      }

      .hero-answer {
        font-size: var(--font-size-lg);
        line-height: 1.8;
        color: rgba(255,255,255,0.95);
        margin-bottom: var(--space-6);
        max-width: 75ch;
      }

      .hero__cta {
        display: flex;
        gap: var(--space-4);
        flex-wrap: wrap;
      }

      @media (max-width: 768px) {
        .hero__cta {
          flex-direction: column;
        }

        .hero__cta .btn {
          width: 100%;
          justify-content: center;
        }
      }
    </style>
  </section>

  <!-- Fort Smith Details Section -->
  <section style="padding: var(--space-10) 0;">
    <div class="container">
      <div class="split">
        <div class="split__content">
          <span class="eyebrow-label">Local Expertise</span>
          <h2>Why Fort Smith Homeowners Trust <span class="text-accent">JBL Roofing</span></h2>

          <div class="answer-block">
            <h3>What makes Fort Smith roofing unique?</h3>
            <p>Fort Smith sits at the confluence of the Arkansas and Poteau Rivers, creating microclimates that challenge roofing systems. Our region experiences severe spring thunderstorms with large hail, damaging straight-line winds, high summer heat that accelerates shingle deterioration, and occasional winter ice storms. We've roofed homes from historic neighborhoods near Garrison Avenue to newer subdivisions in Chaffee Crossing, and we know exactly which materials and installation techniques deliver long-term performance in Sebastian County.</p>
          </div>

          <ul class="feature-list">
            <li>
              <div class="feature-icon">
                <?php echo icon('shield-check', 24); ?>
              </div>
              <div>
                <h4>Arkansas Licensed & Insured</h4>
                <p>Fully licensed Arkansas roofing contractor with comprehensive liability and workers' compensation coverage</p>
              </div>
            </li>
            <li>
              <div class="feature-icon">
                <?php echo icon('clock', 24); ?>
              </div>
              <div>
                <h4>24/7 Emergency Response</h4>
                <p>Same-day storm damage assessment and emergency tarping services across Fort Smith and Sebastian County</p>
              </div>
            </li>
            <li>
              <div class="feature-icon">
                <?php echo icon('file-text', 24); ?>
              </div>
              <div>
                <h4>Insurance Claim Expertise</h4>
                <p>We document hail and wind damage, meet with adjusters, and handle claim paperwork to maximize your settlement</p>
              </div>
            </li>
          </ul>
        </div>

        <div class="split__image">
          <img
            src="https://db.pageone.cloud/storage/v1/object/public/client-assets/jbl-roofing-llc/photos/1785371126320-k4kjaq-IMG_4587.jpeg"
            alt="JBL Roofing team working on Fort Smith residential roof replacement"
            width="600"
            height="800"
            loading="lazy"
            class="img-diagonal"
          >
        </div>
      </div>
    </div>

    <style>
      .split {
        display: grid;
        grid-template-columns: 1.1fr 0.9fr;
        gap: var(--space-8);
        align-items: center;
      }

      .split__image img {
        width: 100%;
        height: auto;
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow-lg);
      }

      .feature-list {
        list-style: none;
        padding: 0;
        margin: var(--space-6) 0 0;
      }

      .feature-list li {
        display: flex;
        gap: var(--space-4);
        margin-bottom: var(--space-5);
        padding-bottom: var(--space-5);
        border-bottom: 1px solid var(--color-border);
      }

      .feature-list li:last-child {
        border-bottom: none;
        margin-bottom: 0;
        padding-bottom: 0;
      }

      .feature-icon {
        flex-shrink: 0;
        width: 48px;
        height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, var(--color-secondary) 0%, var(--color-primary) 100%);
        color: white;
        border-radius: var(--radius);
      }

      .feature-list h4 {
        font-size: var(--font-size-lg);
        margin-bottom: var(--space-2);
        color: var(--color-primary);
      }

      .feature-list p {
        font-size: var(--font-size-base);
        color: var(--color-text-light);
        line-height: 1.7;
        margin: 0;
      }

      @media (max-width: 768px) {
        .split {
          grid-template-columns: 1fr;
        }
      }
    </style>
  </section>

  <!-- Fort Smith Neighborhoods Section -->
  <section style="padding: var(--space-10) 0; background: var(--color-bg-alt);">
    <div class="container">
      <div style="text-align: center; max-width: var(--content-width); margin: 0 auto var(--space-8);">
        <span class="eyebrow-label">Service Coverage</span>
        <h2>Fort Smith Neighborhoods We Serve</h2>
        <p style="font-size: var(--font-size-lg); color: var(--color-text-light); margin-top: var(--space-3);">
          From historic downtown to Chaffee Crossing's newest developments, we've built our reputation roofing homes across every Fort Smith neighborhood.
        </p>
      </div>

      <div class="neighborhood-grid">
        <div class="neighborhood-card reveal-up reveal-delay-1">
          <h3>Historic Downtown & Garrison Avenue</h3>
          <p>Specialized repair and restoration for historic Fort Smith homes, including matching architectural shingles and preserving period-appropriate rooflines on older properties near the Belle Grove Historic District.</p>
        </div>

        <div class="neighborhood-card reveal-up reveal-delay-2">
          <h3>Chaffee Crossing</h3>
          <p>New roof installations and modern roofing systems for Fort Smith's fastest-growing master-planned community. We work with energy-efficient materials suited to contemporary construction standards.</p>
        </div>

        <div class="neighborhood-card reveal-up reveal-delay-3">
          <h3>Fianna Hills & North Fort Smith</h3>
          <p>Residential roofing for established North Fort Smith neighborhoods where mature trees require careful debris management and homes built in the 1970s-1990s often need full replacements.</p>
        </div>

        <div class="neighborhood-card reveal-up reveal-delay-1">
          <h3>South Fort Smith & Massard Prairie</h3>
          <p>Storm-resistant roofing solutions for homes in open areas more exposed to severe weather. We install impact-rated shingles and reinforced systems proven against high winds and hail common to the region.</p>
        </div>

        <div class="neighborhood-card reveal-up reveal-delay-2">
          <h3>Rogers Avenue Corridor</h3>
          <p>Fast-response emergency repairs and commercial roofing services along Fort Smith's main business corridor, minimizing downtime for retail and office properties.</p>
        </div>

        <div class="neighborhood-card reveal-up reveal-delay-3">
          <h3>Creekmore Park Area</h3>
          <p>Residential roof repair and replacement for mid-century homes near Creekmore Park, addressing common issues like outdated ventilation and deteriorated flashing around chimneys.</p>
        </div>
      </div>
    </div>

    <style>
      .neighborhood-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: var(--space-6);
        margin-top: var(--space-8);
      }

      .neighborhood-card {
        padding: var(--space-6);
        background: white;
        border-left: 4px solid var(--color-secondary);
        border-radius: var(--radius);
        box-shadow: var(--shadow-sm);
        transition: all var(--transition);
      }

      .neighborhood-card:hover {
        transform: translateX(4px);
        box-shadow: var(--shadow);
      }

      .neighborhood-card h3 {
        font-size: var(--font-size-lg);
        color: var(--color-primary);
        margin-bottom: var(--space-3);
      }

      .neighborhood-card p {
        font-size: var(--font-size-base);
        color: var(--color-text-light);
        line-height: 1.7;
        margin: 0;
      }

      @media (max-width: 768px) {
        .neighborhood-grid {
          grid-template-columns: 1fr;
        }
      }
    </style>
  </section>

  <!-- Services Available Section -->
  <section style="padding: var(--space-10) 0;">
    <div class="container">
      <div style="text-align: center; max-width: var(--content-width); margin: 0 auto var(--space-8);">
        <span class="eyebrow-label">What We Do</span>
        <h2>Roofing Services Available in <span class="text-accent">Fort Smith</span></h2>
        <p style="font-size: var(--font-size-lg); color: var(--color-text-light); margin-top: var(--space-3);">
          Complete residential and commercial roofing solutions for Fort Smith properties, from emergency repairs to full replacements.
        </p>
      </div>

      <div class="services-compact">
        <?php
        $fortSmithServices = [
            'Emergency Roof Repair (24/7)',
            'Roof Replacement & Installation',
            'Storm Damage Repair',
            'Asphalt Shingle Roofing',
            'Metal Roofing Services',
            'Roof Leak Repair',
            'Insurance Claim Assistance',
            'Residential Roof Inspection',
            'Gutter Installation & Downspout Services',
            'Roof Damage Assessment',
            'Energy-Efficient Roofing',
            'Roof Financing Options'
        ];

        $colCount = 0;
        foreach ($fortSmithServices as $service):
          if ($colCount % 3 === 0) echo '<div class="services-row">';
        ?>
          <div class="service-compact">
            <?php echo icon('check', 20); ?>
            <span><?php echo htmlspecialchars($service); ?></span>
          </div>
        <?php
          $colCount++;
          if ($colCount % 3 === 0) echo '</div>';
        endforeach;
        if ($colCount % 3 !== 0) echo '</div>';
        ?>
      </div>

      <div style="text-align: center; margin-top: var(--space-8);">
        <a href="/services/" class="btn btn-primary btn-lg">
          View All Services
          <?php echo icon('arrow-right', 20); ?>
        </a>
      </div>
    </div>

    <style>
      .services-compact {
        margin-top: var(--space-8);
      }

      .services-row {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: var(--space-4);
        margin-bottom: var(--space-4);
      }

      .service-compact {
        display: flex;
        align-items: center;
        gap: var(--space-3);
        padding: var(--space-4);
        background: var(--color-bg-alt);
        border-radius: var(--radius);
        transition: all var(--transition);
      }

      .service-compact:hover {
        background: white;
        box-shadow: var(--shadow-sm);
        transform: translateY(-2px);
      }

      .service-compact svg {
        color: var(--color-secondary);
        flex-shrink: 0;
      }

      .service-compact span {
        font-size: var(--font-size-base);
        font-weight: 500;
        color: var(--color-text);
      }

      @media (max-width: 968px) {
        .services-row {
          grid-template-columns: repeat(2, 1fr);
        }
      }

      @media (max-width: 640px) {
        .services-row {
          grid-template-columns: 1fr;
        }
      }
    </style>
  </section>

  <!-- CTA Section -->
  <section style="padding: var(--space-10) 0; background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark, #041209) 100%); color: white;">
    <div class="container" style="text-align: center;">
      <h2 style="font-size: clamp(1.75rem, 4vw, 2.5rem); margin-bottom: var(--space-4); text-wrap: balance;">Need a Roofing Contractor in Fort Smith?</h2>
      <p style="font-size: var(--font-size-lg); margin-bottom: var(--space-6); max-width: 60ch; margin-left: auto; margin-right: auto; color: rgba(255,255,255,0.9);">
        Free inspections for Fort Smith homeowners. Emergency services available 24/7. Arkansas licensed, insured, and backed by our workmanship warranty.
      </p>

      <div style="display: flex; gap: var(--space-4); justify-content: center; flex-wrap: wrap;">
        <a href="/contact/" class="btn btn-accent btn-lg">Get Your Free Estimate</a>
        <?php if (!empty($phone)): ?>
          <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn btn-outline-white btn-lg">
            <?php echo icon('phone', 20); ?>
            <?php echo htmlspecialchars(formatPhone($phone)); ?>
          </a>
        <?php endif; ?>
      </div>

      <p style="margin-top: var(--space-6); font-size: var(--font-size-sm); color: rgba(255,255,255,0.7);">
        <strong>Last Updated:</strong> <?php echo date('F Y'); ?>
      </p>
    </div>
  </section>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
