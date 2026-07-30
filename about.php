<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ---------------------------------------------------------------------------
 * PAGE-LEVEL SETUP — About Page
 * ------------------------------------------------------------------------- */
$currentPage = 'about';

$pageTitle       = 'About JBL Roofing LLC | Locally Focused Roofers in Fort Smith, AR';
$pageDescription = 'JBL Roofing LLC brings 20+ years of combined roofing experience to Fort Smith, AR. Meet the local team putting homeowners first with honest work, fair pricing, and quality craftsmanship.';
$canonicalUrl    = $siteUrl . '/about/';
$ogType          = 'website';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/jbl-roofing-llc/photos/1785371124660-vir8wt-IMG_4572.jpeg';

/* Breadcrumb Schema */
$breadcrumbs = generateBreadcrumbSchema([
    ['name' => 'Home', 'url' => $siteUrl . '/'],
    ['name' => 'About', 'url' => $canonicalUrl],
]);

/* WebPage Schema (references organization) */
$webPageSchema = [
    '@type'       => 'WebPage',
    '@id'         => $canonicalUrl . '#webpage',
    'url'         => $canonicalUrl,
    'name'        => $pageTitle,
    'description' => $pageDescription,
    'isPartOf'    => ['@id' => $siteUrl . '#website'],
    'about'       => ['@id' => $siteUrl . '#organization'],
    'provider'    => ['@id' => $siteUrl . '#organization'],
];

unset($breadcrumbs['@context']);
$schemaMarkup = generateGraphSchema([$breadcrumbs, $webPageSchema]);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<style>
/* =========================================================================
   ABOUT PAGE — Premium asymmetric composition
   ========================================================================= */
.about-hero {
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%);
  min-height: 50vh;
  display: flex;
  align-items: center;
  padding: calc(var(--space-16) + var(--nav-height, 80px)) var(--space-8) var(--space-16);
  position: relative;
  overflow: hidden;
}
.about-hero::after {
  content: "";
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='3'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.5'/%3E%3C/svg%3E");
  opacity: 0.06;
  mix-blend-mode: overlay;
  pointer-events: none;
}
.about-hero .container { position: relative; z-index: 1; text-align: center; }
.about-hero h1 {
  color: var(--color-white);
  font-size: var(--font-size-5xl);
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.about-hero .hero-subtitle {
  color: rgba(255, 255, 255, 0.88);
  font-size: var(--font-size-lg);
  line-height: 1.7;
  max-width: 60ch;
  margin: 0 auto;
}

/* Story section — asymmetric split */
.story-section { background: var(--color-white); }
.story-grid {
  display: grid;
  grid-template-columns: 2fr 3fr;
  gap: var(--space-16);
  align-items: center;
}
.story-figure {
  position: relative;
  border-radius: var(--radius-xl);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
}
.story-figure img {
  width: 100%;
  aspect-ratio: 4 / 5;
  object-fit: cover;
}
.story-content h2 {
  font-size: var(--font-size-4xl);
  color: var(--color-primary);
  margin-bottom: var(--space-4);
}
.story-content h2 .text-accent { color: var(--color-secondary); }
.story-content p {
  color: var(--color-gray-dark);
  line-height: 1.8;
  margin-bottom: var(--space-4);
  font-size: var(--font-size-base);
}

/* Values grid */
.values-section { background: var(--color-light); }
.values-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-8);
  margin-top: var(--space-12);
}
.value-card {
  background: var(--color-white);
  border-radius: var(--radius-lg);
  padding: var(--space-8);
  box-shadow: var(--shadow-sm);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.value-card:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow-lg);
}
.value-icon {
  width: 64px;
  height: 64px;
  border-radius: var(--radius-md);
  background: linear-gradient(135deg, var(--color-primary), var(--color-secondary));
  color: var(--color-white);
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: var(--space-4);
}
.value-card h3 {
  color: var(--color-primary);
  font-size: var(--font-size-xl);
  margin-bottom: var(--space-2);
}
.value-card p {
  color: var(--color-gray-dark);
  line-height: 1.7;
  font-size: var(--font-size-sm);
  margin: 0;
}

/* Experience highlight */
.experience-section {
  background: var(--color-primary);
  color: var(--color-white);
  text-align: center;
}
.experience-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-8);
  margin-top: var(--space-8);
}
.experience-item .num {
  font-family: var(--font-heading);
  font-size: var(--font-size-5xl);
  font-weight: 800;
  line-height: 1;
  color: var(--color-secondary);
}
.experience-item .label {
  font-size: var(--font-size-sm);
  text-transform: uppercase;
  letter-spacing: 1px;
  color: rgba(255, 255, 255, 0.75);
  margin-top: var(--space-2);
}

/* CTA */
.about-cta {
  background: linear-gradient(135deg, var(--color-secondary) 0%, var(--color-primary) 120%);
  text-align: center;
}
.about-cta h2 {
  color: var(--color-white);
  font-size: var(--font-size-4xl);
  margin-bottom: var(--space-4);
}
.about-cta p {
  color: rgba(255, 255, 255, 0.9);
  max-width: 52ch;
  margin: 0 auto var(--space-8);
  font-size: var(--font-size-lg);
}

@media (max-width: 1024px) {
  .story-grid { grid-template-columns: 1fr; gap: var(--space-12); }
  .values-grid { grid-template-columns: repeat(2, 1fr); }
  .experience-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 600px) {
  .about-hero h1 { font-size: var(--font-size-3xl); }
  .values-grid { grid-template-columns: 1fr; }
  .experience-grid { grid-template-columns: 1fr; }
}
</style>

<!-- Breadcrumb -->
<nav class="breadcrumb" aria-label="Breadcrumb">
  <div class="container">
    <ol>
      <li><a href="/">Home</a></li>
      <li aria-hidden="true" class="breadcrumb-sep">/</li>
      <li aria-current="page">About</li>
    </ol>
  </div>
</nav>

<!-- Hero -->
<section class="about-hero" aria-label="About JBL Roofing LLC">
  <div class="container">
    <h1>Locally Focused Roofers Who Put <span class="text-accent">Homeowners First</span></h1>
    <p class="hero-subtitle">JBL Roofing LLC is a licensed, insured roofing contractor serving Fort Smith, AR and surrounding communities. With 20+ years of combined experience, we bring honest work, fair pricing, and genuine customer care to every roof we touch.</p>
  </div>
</section>

<!-- Story Section -->
<section class="story-section" aria-label="Our story">
  <div class="container">
    <div class="story-grid">
      <div class="story-figure reveal-left">
        <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/jbl-roofing-llc/photos/1785371124660-vir8wt-IMG_4572.jpeg"
             sizes="(max-width: 1024px) 100vw, 500px"
             alt="JBL Roofing LLC team working on residential roofing project in Fort Smith, Arkansas"
             width="600" height="750" loading="lazy">
      </div>
      <div class="story-content reveal-right">
        <h2>We decided to do things <span class="text-accent">differently</span></h2>
        <p>At JBL Roofing LLC, we believe in putting homeowners first. With over 20 years of combined roofing experience, our team understands what it takes to deliver quality work and earn your trust. Having spent years working for larger corporations, we decided to do things differently—building a company that prioritizes honest work, fair pricing, and genuine customer care over quick profits.</p>
        <p>We're a small, locally-focused team dedicated to serving our communities in Arkansas, Oklahoma, and Missouri. Whether you need minor repairs or a complete roof replacement, we approach every project with the same level of integrity and attention to detail. Our commitment is simple: treat your home and family the way we'd want ours treated, delivering the quality and reliability you deserve at prices you can trust.</p>
        <p>When you call JBL Roofing LLC, you're calling a local Fort Smith business—not a call center, not a franchise, and not a salesperson who disappears after the contract is signed. You're calling experienced roofers who live in this region, understand Arkansas weather, and stand behind every single job we do.</p>
      </div>
    </div>
  </div>
</section>

<!-- Values Section -->
<section class="values-section" aria-label="Our values">
  <div class="container">
    <div class="section-header reveal-up">
      <span class="section-subtitle">What Drives Us</span>
      <h2>Values That Guide Every <span class="text-accent">Job We Do</span></h2>
      <p class="hero-answer">Five principles that define how JBL Roofing LLC approaches every project, every homeowner, and every roof.</p>
    </div>

    <div class="values-grid">
      <div class="value-card reveal-up reveal-delay-1">
        <div class="value-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/>
          </svg>
        </div>
        <h3>Honesty & Transparency</h3>
        <p>Clear estimates, realistic timelines, and no hidden fees. We tell you exactly what your roof needs and what it will cost — no pressure, no upselling.</p>
      </div>

      <div class="value-card reveal-up reveal-delay-2">
        <div class="value-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275Z"/>
          </svg>
        </div>
        <h3>Quality Craftsmanship</h3>
        <p>Every roof built to last, using proven materials and installation methods that meet or exceed manufacturer specifications and local building codes.</p>
      </div>

      <div class="value-card reveal-up reveal-delay-3">
        <div class="value-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/>
            <circle cx="12" cy="10" r="3"/>
          </svg>
        </div>
        <h3>Local Commitment</h3>
        <p>We live here, work here, and raise our families here. Fort Smith isn't just a market — it's our home, and we protect our neighbors' homes like our own.</p>
      </div>

      <div class="value-card reveal-up reveal-delay-1">
        <div class="value-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <circle cx="12" cy="12" r="10"/>
            <path d="M12 6v6l4 2"/>
          </svg>
        </div>
        <h3>Fast Response</h3>
        <p>Roofing emergencies don't wait. We offer 24/7 availability for storm damage and emergency repairs across Fort Smith and the surrounding region.</p>
      </div>

      <div class="value-card reveal-up reveal-delay-2">
        <div class="value-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"/>
          </svg>
        </div>
        <h3>Clear Communication</h3>
        <p>You'll speak directly with our team — no subcontractors, no phone tag. We keep you informed at every step from inspection to final walkthrough.</p>
      </div>

      <div class="value-card reveal-up reveal-delay-3">
        <div class="value-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="m7.5 4.27 9 5.15"/>
            <path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"/>
            <path d="m3.3 7 8.7 5 8.7-5"/>
            <path d="M12 22V12"/>
          </svg>
        </div>
        <h3>Warranty Backed</h3>
        <p>Strong material and workmanship warranties on every installation. We stand behind the roofs we build long after the final nail is driven.</p>
      </div>
    </div>
  </div>
</section>

<!-- Experience Stats -->
<section class="experience-section" aria-label="JBL Roofing experience highlights">
  <div class="container">
    <h2 class="reveal-up">The Numbers Behind Our Commitment</h2>
    <div class="experience-grid">
      <div class="experience-item reveal-scale reveal-delay-1">
        <div class="num">20+</div>
        <div class="label">Years Combined Experience</div>
      </div>
      <div class="experience-item reveal-scale reveal-delay-2">
        <div class="num">3</div>
        <div class="label">States Served</div>
      </div>
      <div class="experience-item reveal-scale reveal-delay-3">
        <div class="num">100%</div>
        <div class="label">Licensed & Insured</div>
      </div>
      <div class="experience-item reveal-scale reveal-delay-4">
        <div class="num">24/7</div>
        <div class="label">Emergency Response</div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="about-cta" aria-label="Get your free roofing estimate">
  <div class="container">
    <h2 class="reveal-up">Ready to Work With a Local Roofer You Can Trust?</h2>
    <p class="reveal-up reveal-delay-1">Get a free, no-obligation inspection and estimate from the team that treats your home like our own. Licensed, insured, and proudly serving Fort Smith, AR.</p>
    <a href="/contact/" class="btn btn-outline-white btn-lg reveal-up reveal-delay-2">Get My Free Estimate</a>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
