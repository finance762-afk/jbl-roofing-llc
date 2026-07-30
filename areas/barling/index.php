<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage = 'service-areas';
$areaName = 'Barling';
$areaState = 'AR';
$areaZip = '72923';

$pageTitle = 'Barling Roofing Contractor | Emergency Roof Repair Sebastian County | ' . $siteName;
$pageDescription = 'Licensed Barling roofing contractor serving Sebastian County with expert roof repair, storm damage restoration, and new installations. Fast response for Barling homeowners. Free roof inspections.';
$canonicalUrl = $siteUrl . '/areas/barling/';
$ogImage = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/jbl-roofing-llc/photos/1785371124660-vir8wt-IMG_4572.jpeg';

$breadcrumbSchema = [
    '@type' => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl . '/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Service Areas', 'item' => $siteUrl . '/service-areas/'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Barling, AR', 'item' => $canonicalUrl]
    ]
];

$localBusinessSchema = [
    '@type' => 'RoofingContractor',
    '@id' => $siteUrl . '#organization',
    'name' => $siteName,
    'url' => $siteUrl,
    'telephone' => $phone,
    'email' => $email,
    'description' => $siteName . ' provides licensed roofing contractor services in Barling, AR including emergency roof repair, roof replacement, and storm damage restoration.',
    'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => $address['street'],
        'addressLocality' => $address['city'],
        'addressRegion' => $address['state'],
        'postalCode' => $address['zip'],
        'addressCountry' => 'US'
    ],
    'areaServed' => [
        '@type' => 'City',
        'name' => 'Barling',
        'containedInPlace' => ['@type' => 'State', 'name' => 'Arkansas']
    ],
    'openingHours' => 'Mo-Su 00:00-23:59',
    'priceRange' => '$$'
];

$schemaMarkup = '<script type="application/ld+json">' . json_encode(['@context' => 'https://schema.org', '@graph' => [$localBusinessSchema, $breadcrumbSchema]], JSON_UNESCAPED_SLASHES) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>

<header class="site-header" role="banner">
  <div class="container">
    <div class="header-content">
      <a href="/" class="site-logo"><img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/jbl-roofing-llc/logo/1785370857501-nxseph-Logo.png" alt="<?php echo $siteName; ?>" width="180" height="54"></a>
      <nav class="site-nav">
        <ul class="nav-links">
          <li><a href="/">Home</a></li>
          <li class="nav-dropdown">
            <a href="/services/">Services</a>
            <ul class="nav-dropdown-menu" style="display:none">
              <?php foreach ($serviceGroups as $group): ?>
                <li><a href="/services/<?php echo $group['slug']; ?>/"><?php echo $group['page']; ?></a></li>
              <?php endforeach; ?>
            </ul>
          </li>
          <li><a href="/about/">About</a></li>
          <li><a href="/service-areas/" aria-current="page">Service Areas</a></li>
          <li><a href="/contact/">Contact</a></li>
        </ul>
        <a href="/contact/" class="btn btn-accent nav-cta">Free Estimate</a>
        <button class="hamburger" aria-label="Toggle menu"><span></span><span></span><span></span></button>
      </nav>
    </div>
  </div>
</header>

<div class="mobile-menu" aria-hidden="true">
  <nav>
    <a href="/">Home</a>
    <a href="/services/">Services</a>
    <?php foreach ($serviceGroups as $group): ?>
      <a href="/services/<?php echo $group['slug']; ?>/" style="padding-left:var(--space-6);font-size:var(--font-size-sm);"><?php echo $group['page']; ?></a>
    <?php endforeach; ?>
    <a href="/about/">About</a>
    <a href="/service-areas/" aria-current="page">Service Areas</a>
    <a href="/contact/">Contact</a>
  </nav>
</div>

<main id="main-content">
  <section class="hero hero--area">
    <div class="hero__bg"></div>
    <div class="hero__content container">
      <nav class="breadcrumb"><a href="/">Home</a><span class="breadcrumb-sep">/</span><a href="/service-areas/">Service Areas</a><span class="breadcrumb-sep">/</span><span aria-current="page">Barling</span></nav>
      <h1>Barling Roofing Services — <span class="text-accent">Sebastian County's Local Contractor</span></h1>
      <p class="hero-answer">JBL Roofing LLC serves Barling, Arkansas with licensed roofing contractor services including emergency roof repair, complete roof replacement, and storm damage restoration. Barling sits just south of Fort Smith in Sebastian County, where proximity to Chaffee Crossing and Barling Air Force Base means homes face consistent exposure to severe spring thunderstorms, large hail, and damaging winds—making professional roofing installation and regular maintenance essential for protecting your property.</p>
      <div class="hero__cta">
        <a href="/contact/" class="btn btn-accent btn-lg">Get Free Barling Roof Inspection</a>
        <?php if (!empty($phone)): ?>
          <a href="tel:<?php echo $phone; ?>" class="btn btn-outline-white btn-lg"><?php echo icon('phone', 20); ?> Call Now — 24/7 Emergency</a>
        <?php endif; ?>
      </div>
    </div>
    <style>
      .hero--area{position:relative;padding:calc(var(--nav-height) + var(--space-10)) 0 var(--space-10);background:linear-gradient(135deg,var(--color-primary),var(--color-primary-dark,#041209));color:white;min-height:60vh;display:flex;align-items:center;overflow:hidden}
      .hero__bg{position:absolute;inset:0;background:url('https://db.pageone.cloud/storage/v1/object/public/client-assets/jbl-roofing-llc/photos/1785371124660-vir8wt-IMG_4572.jpeg') center/cover no-repeat;opacity:.18}
      .hero__bg::after{content:'';position:absolute;inset:0;background:linear-gradient(180deg,transparent,rgba(8,37,18,.6))}
      .hero__content{position:relative;z-index:1;max-width:var(--content-width)}
      .hero--area h1{font-size:clamp(2.25rem,6vw,3.5rem);margin-bottom:var(--space-4);text-wrap:balance}
      .hero-answer{font-size:var(--font-size-lg);line-height:1.8;color:rgba(255,255,255,.95);margin-bottom:var(--space-6);max-width:75ch}
      .hero__cta{display:flex;gap:var(--space-4);flex-wrap:wrap}
      @media(max-width:768px){.hero__cta{flex-direction:column}.hero__cta .btn{width:100%;justify-content:center}}
    </style>
  </section>

  <section style="padding:var(--space-10) 0">
    <div class="container">
      <div class="split">
        <div class="split__content">
          <span class="eyebrow-label">Local Expertise</span>
          <h2>Why Barling Homeowners Choose <span class="text-accent">JBL Roofing</span></h2>
          <div class="answer-block">
            <h3>What roofing challenges does Barling face?</h3>
            <p>Barling lies directly south of Fort Smith in Sebastian County, bordered by Chaffee Crossing to the north and more rural areas to the south. Homes here face the same severe weather patterns as Fort Smith—intense spring storms, large hail, damaging winds—but southern Barling properties near open fields experience even higher wind loads and more direct storm exposure. We've worked extensively throughout Barling's residential neighborhoods, from older homes along Highway 59 to newer construction near the Chaffee Crossing development, understanding the distinct structural needs and weather-resistance requirements for properties in this transitional area.</p>
          </div>
          <ul class="feature-list">
            <li>
              <div class="feature-icon"><?php echo icon('target', 24); ?></div>
              <div>
                <h4>Immediate Local Response</h4>
                <p>Closest roofing contractor to Barling from our Fort Smith base—typically on-site within 20-30 minutes for emergency storm damage calls</p>
              </div>
            </li>
            <li>
              <div class="feature-icon"><?php echo icon('home', 24); ?></div>
              <div>
                <h4>Neighborhood-Specific Solutions</h4>
                <p>Tailored roofing systems based on your Barling neighborhood's exposure, home age, and architectural style—not one-size-fits-all installations</p>
              </div>
            </li>
            <li>
              <div class="feature-icon"><?php echo icon('users', 24); ?></div>
              <div>
                <h4>Family-Owned Service</h4>
                <p>Local family business committed to building lasting relationships with Barling homeowners through honest work and fair pricing</p>
              </div>
            </li>
          </ul>
        </div>
        <div class="split__image">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/jbl-roofing-llc/photos/1785371126320-k4kjaq-IMG_4587.jpeg" alt="Roofing work in Barling Arkansas" width="600" height="800" loading="lazy" class="img-diagonal">
        </div>
      </div>
    </div>
    <style>
      .split{display:grid;grid-template-columns:1.1fr .9fr;gap:var(--space-8);align-items:center}
      .split__image img{width:100%;border-radius:var(--radius-lg);box-shadow:var(--shadow-lg)}
      .feature-list{list-style:none;padding:0;margin:var(--space-6) 0 0}
      .feature-list li{display:flex;gap:var(--space-4);margin-bottom:var(--space-5);padding-bottom:var(--space-5);border-bottom:1px solid var(--color-border)}
      .feature-list li:last-child{border:none;margin:0;padding-bottom:0}
      .feature-icon{flex-shrink:0;width:48px;height:48px;display:flex;align-items:center;justify-content:center;background:linear-gradient(135deg,var(--color-secondary),var(--color-primary));color:white;border-radius:var(--radius)}
      .feature-list h4{font-size:var(--font-size-lg);margin-bottom:var(--space-2);color:var(--color-primary)}
      .feature-list p{font-size:var(--font-size-base);color:var(--color-text-light);line-height:1.7;margin:0}
      @media(max-width:768px){.split{grid-template-columns:1fr}}
    </style>
  </section>

  <section style="padding:var(--space-10) 0;background:var(--color-bg-alt)">
    <div class="container">
      <div style="text-align:center;max-width:var(--content-width);margin:0 auto var(--space-8)">
        <span class="eyebrow-label">Coverage Areas</span>
        <h2>Barling Areas We Serve</h2>
      </div>
      <div class="neighborhood-grid">
        <div class="neighborhood-card reveal-up">
          <h3>North Barling & Chaffee Crossing Border</h3>
          <p>Residential roofing for established neighborhoods north of Highway 59, where proximity to Chaffee Crossing development brings updated building codes and opportunities for energy-efficient upgrades.</p>
        </div>
        <div class="neighborhood-card reveal-up">
          <h3>Central Barling Residential Areas</h3>
          <p>Roof repair and replacement for mid-century homes in central Barling, addressing common issues from outdated ventilation, deteriorated flashing, and asphalt shingles nearing end-of-life.</p>
        </div>
        <div class="neighborhood-card reveal-up">
          <h3>South Barling & Rural Properties</h3>
          <p>Storm-resistant roofing solutions for homes in southern Barling's more exposed areas, where open terrain means higher wind loads and more direct hail impact during severe weather events.</p>
        </div>
      </div>
    </div>
    <style>
      .neighborhood-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(320px,1fr));gap:var(--space-6);margin-top:var(--space-8)}
      .neighborhood-card{padding:var(--space-6);background:white;border-left:4px solid var(--color-secondary);border-radius:var(--radius);box-shadow:var(--shadow-sm);transition:all var(--transition)}
      .neighborhood-card:hover{transform:translateX(4px);box-shadow:var(--shadow)}
      .neighborhood-card h3{font-size:var(--font-size-lg);color:var(--color-primary);margin-bottom:var(--space-3)}
      .neighborhood-card p{font-size:var(--font-size-base);color:var(--color-text-light);line-height:1.7;margin:0}
      @media(max-width:768px){.neighborhood-grid{grid-template-columns:1fr}}
    </style>
  </section>

  <section style="padding:var(--space-10) 0;background:linear-gradient(135deg,var(--color-primary),var(--color-primary-dark,#041209));color:white">
    <div class="container" style="text-align:center">
      <h2 style="font-size:clamp(1.75rem,4vw,2.5rem);margin-bottom:var(--space-4)">Barling's Trusted Roofing Contractor</h2>
      <p style="font-size:var(--font-size-lg);margin-bottom:var(--space-6);max-width:60ch;margin-left:auto;margin-right:auto;color:rgba(255,255,255,.9)">Free roof inspections for Barling homeowners. Emergency storm damage response available 24/7. Licensed Arkansas roofing contractor serving Sebastian County.</p>
      <div style="display:flex;gap:var(--space-4);justify-content:center;flex-wrap:wrap">
        <a href="/contact/" class="btn btn-accent btn-lg">Get Your Free Estimate</a>
        <?php if (!empty($phone)): ?>
          <a href="tel:<?php echo $phone; ?>" class="btn btn-outline-white btn-lg"><?php echo icon('phone', 20); ?> <?php echo formatPhone($phone); ?></a>
        <?php endif; ?>
      </div>
      <p style="margin-top:var(--space-6);font-size:var(--font-size-sm);color:rgba(255,255,255,.7)"><strong>Last Updated:</strong> <?php echo date('F Y'); ?></p>
    </div>
  </section>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
