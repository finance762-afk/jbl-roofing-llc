<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

/* ---------------------------------------------------------------------------
 * PAGE SETUP
 * ------------------------------------------------------------------------- */
$currentPage = 'service-areas';
$pageTitle = 'Roofing Services in Fort Smith, AR & Surrounding Areas | ' . $siteName;
$pageDescription = 'Expert roofing services throughout Fort Smith, Van Buren, Greenwood, Alma, and surrounding Arkansas communities. Licensed roofing contractor serving the River Valley region with emergency repairs, roof replacement, and storm damage restoration.';
$canonicalUrl = $siteUrl . '/service-areas/';
$ogImage = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/jbl-roofing-llc/photos/1785371119407-ivl8mo-IMG_3492.jpeg';

/* ---------------------------------------------------------------------------
 * SERVICE AREAS DATA
 * ------------------------------------------------------------------------- */
$areas = [
    [
        'name' => 'Fort Smith',
        'slug' => 'fort-smith',
        'zip' => '72903',
        'description' => 'Our home base and primary service area in Sebastian County',
        'primary' => true
    ],
    [
        'name' => 'Van Buren',
        'slug' => 'van-buren',
        'zip' => '72956',
        'description' => 'Serving Crawford County with expert roofing solutions',
        'primary' => false
    ],
    [
        'name' => 'Greenwood',
        'slug' => 'greenwood',
        'zip' => '72936',
        'description' => 'Professional roofing services for Sebastian County communities',
        'primary' => false
    ],
    [
        'name' => 'Alma',
        'slug' => 'alma',
        'zip' => '72921',
        'description' => 'Quality roofing contractor serving Crawford County',
        'primary' => false
    ],
    [
        'name' => 'Barling',
        'slug' => 'barling',
        'zip' => '72923',
        'description' => 'Trusted roofer for Sebastian County residential properties',
        'primary' => false
    ],
];

/* ---------------------------------------------------------------------------
 * SCHEMA MARKUP — BreadcrumbList
 * ------------------------------------------------------------------------- */
$breadcrumbs = generateBreadcrumbSchema([
    ['name' => 'Home', 'url' => $siteUrl . '/'],
    ['name' => 'Service Areas', 'url' => $canonicalUrl]
]);

$schemaMarkup = '<script type="application/ld+json">' . json_encode($breadcrumbs, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

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
  <section class="hero hero--interior">
    <div class="hero__overlay"></div>
    <div class="hero__content container">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span class="breadcrumb-sep" aria-hidden="true">/</span>
        <span aria-current="page">Service Areas</span>
      </nav>

      <h1>Expert Roofing Services Throughout the <span class="text-accent">Fort Smith River Valley</span></h1>
      <p class="hero-answer">JBL Roofing LLC proudly serves Fort Smith, Van Buren, Greenwood, Alma, Barling, and surrounding Arkansas communities with licensed roofing contractor services including emergency repairs, roof replacement, storm damage restoration, and new installations.</p>
    </div>

    <style>
      .hero--interior {
        position: relative;
        padding: calc(var(--nav-height) + var(--space-8)) 0 var(--space-8);
        background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark, #041209) 100%);
        color: white;
        min-height: 40vh;
        display: flex;
        align-items: center;
      }

      .hero__overlay {
        position: absolute;
        inset: 0;
        background: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/jbl-roofing-llc/photos/1785371119407-ivl8mo-IMG_3492.jpeg') center/cover no-repeat;
        opacity: 0.15;
        z-index: 0;
      }

      .hero__content {
        position: relative;
        z-index: 1;
        max-width: var(--content-width);
        text-align: center;
      }

      .hero--interior h1 {
        font-size: clamp(2rem, 5vw, 3rem);
        margin-bottom: var(--space-4);
        text-wrap: balance;
      }

      .hero-answer {
        font-size: var(--font-size-lg);
        line-height: 1.7;
        color: rgba(255,255,255,0.9);
        max-width: 70ch;
        margin: 0 auto;
      }
    </style>
  </section>

  <!-- Service Areas Grid -->
  <section style="padding: var(--space-10) 0;">
    <div class="container">
      <div style="text-align: center; max-width: var(--content-width); margin: 0 auto var(--space-8);">
        <span class="eyebrow-label">Coverage Map</span>
        <h2>Communities We Serve</h2>
        <p style="font-size: var(--font-size-lg); color: var(--color-text-light); margin-top: var(--space-3);">
          Licensed roofing contractor serving Sebastian County, Crawford County, and surrounding Arkansas River Valley communities with expert residential and commercial roofing services.
        </p>
      </div>

      <div class="areas-grid">
        <?php
        $delay = 1;
        foreach ($areas as $area):
        ?>
          <a href="/areas/<?php echo htmlspecialchars($area['slug']); ?>/" class="area-card <?php echo $area['primary'] ? 'area-card--primary' : ''; ?> reveal-up reveal-delay-<?php echo $delay; ?>">
            <div class="area-card__icon">
              <?php echo icon('map-pin', 32); ?>
            </div>
            <h3><?php echo htmlspecialchars($area['name']); ?>, AR</h3>
            <?php if ($area['primary']): ?>
              <span class="area-badge">Primary Service Area</span>
            <?php endif; ?>
            <p><?php echo htmlspecialchars($area['description']); ?></p>
            <span class="area-card__zip">Zip: <?php echo htmlspecialchars($area['zip']); ?></span>
            <span class="area-card__cta">View Services <span aria-hidden="true">→</span></span>
          </a>
        <?php
          $delay = ($delay % 3) + 1;
        endforeach;
        ?>
      </div>
    </div>

    <style>
      .areas-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: var(--space-6);
        margin-top: var(--space-8);
      }

      .area-card {
        position: relative;
        padding: var(--space-6);
        background: white;
        border: 1px solid var(--color-border);
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow-sm);
        transition: all var(--transition);
        text-align: center;
        text-decoration: none;
        color: inherit;
        overflow: hidden;
      }

      .area-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--color-secondary) 0%, var(--color-accent) 100%);
        transform: scaleX(0);
        transform-origin: left;
        transition: transform var(--transition);
      }

      .area-card:hover,
      .area-card:focus-visible {
        transform: translateY(-4px);
        box-shadow: var(--shadow-lg);
        border-color: var(--color-secondary);
      }

      .area-card:hover::before,
      .area-card:focus-visible::before {
        transform: scaleX(1);
      }

      .area-card--primary {
        border-color: var(--color-secondary);
        background: linear-gradient(135deg, rgba(90, 152, 69, 0.03) 0%, rgba(255,255,255,1) 100%);
      }

      .area-card__icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 64px;
        height: 64px;
        margin: 0 auto var(--space-4);
        background: linear-gradient(135deg, var(--color-secondary) 0%, var(--color-primary) 100%);
        color: white;
        border-radius: var(--radius);
        box-shadow: 0 4px 12px rgba(90, 152, 69, 0.2);
      }

      .area-card h3 {
        font-size: var(--font-size-xl);
        margin-bottom: var(--space-2);
        color: var(--color-primary);
      }

      .area-badge {
        display: inline-block;
        padding: var(--space-1) var(--space-3);
        margin-bottom: var(--space-3);
        background: var(--color-secondary);
        color: white;
        font-size: var(--font-size-sm);
        font-weight: 600;
        border-radius: var(--radius-sm);
        text-transform: uppercase;
        letter-spacing: 0.5px;
      }

      .area-card p {
        font-size: var(--font-size-base);
        color: var(--color-text-light);
        margin-bottom: var(--space-3);
        line-height: 1.6;
      }

      .area-card__zip {
        display: block;
        font-size: var(--font-size-sm);
        color: var(--color-text-light);
        margin-bottom: var(--space-4);
      }

      .area-card__cta {
        display: inline-flex;
        align-items: center;
        gap: var(--space-2);
        color: var(--color-secondary);
        font-weight: 600;
        font-size: var(--font-size-base);
      }

      .area-card:hover .area-card__cta,
      .area-card:focus-visible .area-card__cta {
        gap: var(--space-3);
      }

      @media (max-width: 768px) {
        .areas-grid {
          grid-template-columns: 1fr;
          gap: var(--space-4);
        }
      }
    </style>
  </section>

  <!-- Why Choose Section -->
  <section style="padding: var(--space-10) 0; background: var(--color-bg-alt);">
    <div class="container">
      <div class="split split-reverse">
        <div class="split__content">
          <span class="eyebrow-label">Regional Expertise</span>
          <h2>Why Fort Smith Homeowners Choose <span class="text-accent">JBL Roofing</span></h2>

          <div class="answer-block">
            <h3>Deep Knowledge of Arkansas River Valley Weather</h3>
            <p>We understand the unique roofing challenges in our region—from severe spring storms and damaging hail to high summer heat and winter ice. Our team knows exactly which materials and techniques hold up best against Arkansas weather patterns.</p>
          </div>

          <ul class="check-list">
            <li>
              <?php echo icon('check-circle', 20); ?>
              <span><strong>24/7 Emergency Response</strong> — Same-day storm damage assessment and tarping services</span>
            </li>
            <li>
              <?php echo icon('check-circle', 20); ?>
              <span><strong>Insurance Claim Expertise</strong> — We document damage and work directly with adjusters</span>
            </li>
            <li>
              <?php echo icon('check-circle', 20); ?>
              <span><strong>Local Relationships</strong> — Fast permitting and supplier access across the River Valley</span>
            </li>
            <li>
              <?php echo icon('check-circle', 20); ?>
              <span><strong>Arkansas-Tested Materials</strong> — Products proven to withstand regional climate extremes</span>
            </li>
          </ul>

          <a href="/contact/" class="btn btn-primary" style="margin-top: var(--space-6);">
            Get Your Free Roof Inspection
            <?php echo icon('arrow-right', 20); ?>
          </a>
        </div>

        <div class="split__image">
          <img
            src="https://db.pageone.cloud/storage/v1/object/public/client-assets/jbl-roofing-llc/photos/1785371124660-vir8wt-IMG_4572.jpeg"
            alt="JBL Roofing crew installing asphalt shingles on Fort Smith residential roof"
            width="600"
            height="800"
            loading="lazy"
            class="img-blob"
          >
        </div>
      </div>
    </div>

    <style>
      .split {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: var(--space-8);
        align-items: center;
      }

      .split-reverse {
        direction: rtl;
      }

      .split-reverse > * {
        direction: ltr;
      }

      .split__image img {
        width: 100%;
        height: auto;
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow-lg);
      }

      .check-list {
        list-style: none;
        padding: 0;
        margin: var(--space-6) 0;
      }

      .check-list li {
        display: flex;
        gap: var(--space-3);
        margin-bottom: var(--space-4);
        align-items: flex-start;
      }

      .check-list li svg {
        color: var(--color-secondary);
        flex-shrink: 0;
        margin-top: 2px;
      }

      .check-list li span {
        line-height: 1.7;
      }

      @media (max-width: 768px) {
        .split,
        .split-reverse {
          grid-template-columns: 1fr;
          direction: ltr;
        }
      }
    </style>
  </section>

  <!-- CTA Section -->
  <section style="padding: var(--space-10) 0;">
    <div class="container">
      <div class="cta-banner">
        <h2>Need a Trusted Roofer in Your Area?</h2>
        <p>Free inspections, honest estimates, and emergency services available 24/7 across the Fort Smith River Valley.</p>
        <div class="cta-banner__actions">
          <a href="/contact/" class="btn btn-accent btn-lg">Schedule Free Inspection</a>
          <?php if (!empty($phone)): ?>
            <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn btn-outline-white btn-lg">
              <?php echo icon('phone', 20); ?>
              <?php echo htmlspecialchars(formatPhone($phone)); ?>
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
