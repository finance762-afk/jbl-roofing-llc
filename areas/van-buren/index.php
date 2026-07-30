<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

/* ---------------------------------------------------------------------------
 * PAGE SETUP — Van Buren Service Area
 * ------------------------------------------------------------------------- */
$currentPage = 'service-areas';
$areaName = 'Van Buren';
$areaState = 'AR';
$areaZip = '72956';

$pageTitle = 'Van Buren Roofing Contractor | Emergency Roof Repair & Replacement | ' . $siteName;
$pageDescription = 'Licensed Van Buren roofing contractor serving Crawford County with expert roof repair, storm damage restoration, and new installations. Fast response for Van Buren homeowners. Free roof inspections.';
$canonicalUrl = $siteUrl . '/areas/van-buren/';
$ogImage = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/jbl-roofing-llc/photos/1785371127618-ndtvms-IMG_4588.jpeg';

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
            'name' => 'Van Buren, AR',
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
    'description' => $siteName . ' provides licensed roofing contractor services in Van Buren, AR including emergency roof repair, roof replacement, storm damage restoration, and new installations.',
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
        'name' => 'Van Buren',
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
        <span aria-current="page">Van Buren</span>
      </nav>

      <h1>Van Buren Roofing Services — <span class="text-accent">Trusted Crawford County Contractor</span></h1>
      <p class="hero-answer">JBL Roofing LLC serves Van Buren, Arkansas with licensed roofing contractor services including emergency roof repair, complete roof replacement, and storm damage restoration. Located just across the Arkansas River from Fort Smith, Van Buren experiences the same severe weather patterns—intense spring storms, damaging hail, and high winds—making durable, professionally installed roofing systems essential for Crawford County homes.</p>

      <div class="hero__cta">
        <a href="/contact/" class="btn btn-accent btn-lg">Get Free Van Buren Roof Inspection</a>
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
        background: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/jbl-roofing-llc/photos/1785371127618-ndtvms-IMG_4588.jpeg') center/cover no-repeat;
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

  <!-- Van Buren Details Section -->
  <section style="padding: var(--space-10) 0;">
    <div class="container">
      <div class="split">
        <div class="split__content">
          <span class="eyebrow-label">Crawford County Expertise</span>
          <h2>Why Van Buren Homeowners Choose <span class="text-accent">JBL Roofing</span></h2>

          <div class="answer-block">
            <h3>What roofing challenges does Van Buren face?</h3>
            <p>Van Buren sits along the Arkansas River in Crawford County, where homes face river valley humidity, severe spring thunderstorms with large hail, and damaging straight-line winds. Historic downtown Van Buren properties near Main Street require careful restoration work preserving architectural details, while newer subdivisions near I-40 need modern impact-resistant systems. We've worked extensively on both older homes in Van Buren's established neighborhoods and new construction in growing areas north of Highway 59, understanding the distinct needs of each property type.</p>
          </div>

          <ul class="feature-list">
            <li>
              <div class="feature-icon">
                <?php echo icon('map-pin', 24); ?>
              </div>
              <div>
                <h4>Local Van Buren Response</h4>
                <p>Fast dispatch to Van Buren properties from our Fort Smith base—typically on-site within 30-60 minutes for emergency calls</p>
              </div>
            </li>
            <li>
              <div class="feature-icon">
                <?php echo icon('cloud-lightning', 24); ?>
              </div>
              <div>
                <h4>River Valley Weather Knowledge</h4>
                <p>Expert understanding of Arkansas River microclimate impacts on roofing, from moisture intrusion to storm damage patterns unique to Crawford County</p>
              </div>
            </li>
            <li>
              <div class="feature-icon">
                <?php echo icon('home', 24); ?>
              </div>
              <div>
                <h4>Historic Preservation Experience</h4>
                <p>Specialized restoration for Van Buren's historic downtown properties while meeting modern building codes and energy standards</p>
              </div>
            </li>
          </ul>
        </div>

        <div class="split__image">
          <img
            src="https://db.pageone.cloud/storage/v1/object/public/client-assets/jbl-roofing-llc/photos/1785371135054-yi0d8g-IMG_4571.jpeg"
            alt="JBL Roofing crew installing roofing in Van Buren neighborhood"
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

  <!-- Van Buren Neighborhoods Section -->
  <section style="padding: var(--space-10) 0; background: var(--color-bg-alt);">
    <div class="container">
      <div style="text-align: center; max-width: var(--content-width); margin: 0 auto var(--space-8);">
        <span class="eyebrow-label">Coverage Areas</span>
        <h2>Van Buren Areas We Serve</h2>
        <p style="font-size: var(--font-size-lg); color: var(--color-text-light); margin-top: var(--space-3);">
          Expert roofing services throughout Van Buren—from historic Main Street to newer residential developments along I-40.
        </p>
      </div>

      <div class="neighborhood-grid">
        <div class="neighborhood-card reveal-up reveal-delay-1">
          <h3>Historic Downtown Van Buren</h3>
          <p>Specialized roofing restoration for Van Buren's historic Main Street district, preserving architectural character while upgrading structural integrity and weather resistance on properties dating back to the late 1800s.</p>
        </div>

        <div class="neighborhood-card reveal-up reveal-delay-2">
          <h3>North Van Buren & Highway 59 Corridor</h3>
          <p>New construction roofing and modern replacement systems for Van Buren's expanding northern residential areas, using energy-efficient materials suited to contemporary building standards.</p>
        </div>

        <div class="neighborhood-card reveal-up reveal-delay-3">
          <h3>Crawford County Riverfront Properties</h3>
          <p>Moisture-resistant roofing solutions for homes near the Arkansas River, addressing unique challenges from high humidity, seasonal flooding risks, and accelerated material deterioration in low-lying areas.</p>
        </div>

        <div class="neighborhood-card reveal-up reveal-delay-1">
          <h3>East Van Buren & Dora Road</h3>
          <p>Residential roof repair and replacement for established neighborhoods east of downtown, where homes built in the 1960s-1980s often require complete re-roofing with updated ventilation systems.</p>
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

  <!-- Services Section -->
  <section style="padding: var(--space-10) 0;">
    <div class="container">
      <div style="text-align: center; max-width: var(--content-width); margin: 0 auto var(--space-6);">
        <span class="eyebrow-label">What We Do</span>
        <h2>Van Buren Roofing Services</h2>
      </div>

      <div class="services-compact" style="margin-top: var(--space-8);">
        <?php
        $services = [
            'Emergency Roof Repair (24/7)',
            'Roof Replacement & Installation',
            'Storm Damage Repair',
            'Asphalt Shingle Roofing',
            'Metal Roofing Services',
            'Roof Leak Repair',
            'Insurance Claim Assistance',
            'Residential Roof Inspection',
            'Historic Roof Restoration',
            'Gutter Installation & Downspout Services',
            'Energy-Efficient Roofing',
            'Roof Financing Options'
        ];

        foreach ($services as $index => $service):
          if ($index % 3 === 0) echo '<div class="services-row">';
        ?>
          <div class="service-compact">
            <?php echo icon('check', 20); ?>
            <span><?php echo htmlspecialchars($service); ?></span>
          </div>
        <?php
          if (($index + 1) % 3 === 0) echo '</div>';
        endforeach;
        if (count($services) % 3 !== 0) echo '</div>';
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
      <h2 style="font-size: clamp(1.75rem, 4vw, 2.5rem); margin-bottom: var(--space-4); text-wrap: balance;">Van Buren's Trusted Roofing Contractor</h2>
      <p style="font-size: var(--font-size-lg); margin-bottom: var(--space-6); max-width: 60ch; margin-left: auto; margin-right: auto; color: rgba(255,255,255,0.9);">
        Free roof inspections for Van Buren homeowners. Emergency storm damage response available 24/7. Licensed Arkansas roofing contractor serving Crawford County.
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
