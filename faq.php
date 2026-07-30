<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ---------------------------------------------------------------------------
 * PAGE-LEVEL SETUP — FAQ Page
 * ------------------------------------------------------------------------- */
$currentPage = 'faq';

$pageTitle       = 'Roofing FAQ | Answers to Common Fort Smith Roofing Questions';
$pageDescription = 'Get answers to common roofing questions from JBL Roofing LLC. Learn about costs, timelines, materials, insurance claims, financing, and more from Fort Smith\'s trusted roofers.';
$canonicalUrl    = $siteUrl . '/faq/';
$ogType          = 'website';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/jbl-roofing-llc/logo/1785370857501-nxseph-Logo.png';

/* FAQ data — organized by category */
$faqCategories = [
    'General' => [
        ['q' => 'How much does a roof replacement cost in Fort Smith?', 'a' => 'Costs range from $8,000–$18,000 depending on size, materials, and roof complexity. JBL Roofing LLC provides free inspections and detailed estimates with no obligation to decide.'],
        ['q' => 'How long does a roof replacement take?', 'a' => 'Most residential roofs are completed in 1–3 days. We work efficiently, protect your property, and leave everything clean — no surprise timeline extensions.'],
        ['q' => 'How often should I get my roof inspected?', 'a' => 'Annual inspections catch problems early and extend roof life. After storms, inspections are critical — especially hail events common to our area. We offer free post-storm assessments.'],
        ['q' => 'Does JBL Roofing LLC serve areas outside Fort Smith?', 'a' => 'Yes. We serve homeowners and businesses across Arkansas, Oklahoma, and Missouri within a 100-mile radius of Fort Smith. Contact us to confirm coverage for your location.'],
    ],
    'Services & Materials' => [
        ['q' => 'What\'s the best roofing material for Arkansas weather?', 'a' => 'Asphalt shingles are affordable and proven in our climate. Metal roofing resists hail and wind better. We recommend based on your budget, home style, and exposure to Fort Smith\'s severe weather.'],
        ['q' => 'Do you offer emergency roofing services?', 'a' => 'Yes. JBL Roofing LLC offers 24/7 emergency response for storm damage, leaks, and urgent repairs across Fort Smith and the surrounding region. Call us immediately for emergency tarping and stabilization.'],
        ['q' => 'What types of roofing materials do you install?', 'a' => 'We install asphalt shingles, metal roofing, tile, slate, TPO, EPDM, cedar shake, and flat roofing systems. Every material is backed by manufacturer warranties and our workmanship guarantee.'],
        ['q' => 'Can you repair my roof or does it need a full replacement?', 'a' => 'It depends on the damage, age, and condition. During your free inspection, we\'ll assess whether a repair or replacement is the better long-term investment and explain our recommendation clearly.'],
    ],
    'Insurance & Financing' => [
        ['q' => 'Does homeowners insurance cover roof damage?', 'a' => 'Most policies cover hail and wind damage. JBL Roofing LLC documents the damage, works directly with adjusters, and handles the process so you don\'t have to — ask about our insurance claim assistance.'],
        ['q' => 'Do you offer financing for roof repairs and replacement?', 'a' => 'Yes. JBL Roofing LLC offers flexible, low-interest financing plans that make roof repairs and full replacements affordable for Fort Smith homeowners. Ask about options during your free estimate.'],
        ['q' => 'Will you help me file an insurance claim for storm damage?', 'a' => 'Absolutely. We document the damage, photograph evidence, and work directly with your adjuster to streamline the claim process and help maximize your settlement.'],
    ],
    'Process & Expectations' => [
        ['q' => 'What should I expect during a roof replacement?', 'a' => 'After a free inspection and estimate, we schedule the work at your convenience. Most jobs are completed in 1–3 days. We protect your property, work efficiently, clean up completely, and conduct a final walkthrough with you before we call it done.'],
        ['q' => 'How do I schedule a free roofing estimate?', 'a' => 'Call us, fill out the contact form on our website, or email us. We\'ll schedule a convenient time to inspect your roof and provide a detailed, no-obligation estimate.'],
        ['q' => 'What makes JBL Roofing LLC different from other roofers?', 'a' => 'We\'re a locally-focused team with 20+ years of combined experience. We prioritize honest work, transparent pricing, and customer care over quick profits. You\'ll work directly with our team — not subcontractors or call centers.'],
        ['q' => 'Are you licensed and insured?', 'a' => 'Yes. JBL Roofing LLC is fully licensed, insured, and bonded. We meet all Arkansas state requirements and carry liability insurance for your protection.'],
        ['q' => 'Do you provide warranties on your work?', 'a' => 'Yes. Every installation is backed by manufacturer material warranties and our workmanship warranty. We stand behind the roofs we build long after the final nail is driven.'],
    ],
];

/* Flatten all FAQs for FAQPage schema */
$allFaqs = [];
foreach ($faqCategories as $cat => $faqs) {
    $allFaqs = array_merge($allFaqs, $faqs);
}

/* Breadcrumb + FAQPage Schema */
$breadcrumbs = generateBreadcrumbSchema([
    ['name' => 'Home', 'url' => $siteUrl . '/'],
    ['name' => 'FAQ', 'url' => $canonicalUrl],
]);

$faqPageSchema = generateFAQSchema($allFaqs);

unset($breadcrumbs['@context']);
unset($faqPageSchema['@context']);
$schemaMarkup = generateGraphSchema([$breadcrumbs, $faqPageSchema]);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<style>
/* =========================================================================
   FAQ PAGE — Accordion-style layout by category
   ========================================================================= */
.faq-hero {
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%);
  min-height: 40vh;
  display: flex;
  align-items: center;
  padding: calc(var(--space-16) + var(--nav-height, 80px)) var(--space-8) var(--space-12);
  position: relative;
  overflow: hidden;
}
.faq-hero::after {
  content: "";
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='3'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.5'/%3E%3C/svg%3E");
  opacity: 0.06;
  mix-blend-mode: overlay;
  pointer-events: none;
}
.faq-hero .container { position: relative; z-index: 1; text-align: center; }
.faq-hero h1 {
  color: var(--color-white);
  font-size: var(--font-size-5xl);
  margin-bottom: var(--space-3);
  text-wrap: balance;
}
.faq-hero .hero-subtitle {
  color: rgba(255, 255, 255, 0.88);
  font-size: var(--font-size-lg);
  line-height: 1.7;
  max-width: 60ch;
  margin: 0 auto;
}

/* FAQ Section */
.faq-main { background: var(--color-white); }
.faq-category { margin-bottom: var(--space-12); }
.faq-category h2 {
  font-size: var(--font-size-2xl);
  color: var(--color-primary);
  margin-bottom: var(--space-6);
  padding-bottom: var(--space-3);
  border-bottom: 3px solid var(--color-secondary);
}
.faq-list { display: flex; flex-direction: column; gap: var(--space-4); }
.faq-item {
  background: var(--color-light);
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  box-shadow: var(--shadow-sm);
  transition: box-shadow var(--transition-base);
}
.faq-item:hover { box-shadow: var(--shadow-md); }
.faq-question {
  display: flex;
  align-items: flex-start;
  gap: var(--space-4);
}
.faq-icon {
  width: 40px;
  height: 40px;
  border-radius: var(--radius-md);
  background: linear-gradient(135deg, var(--color-primary), var(--color-secondary));
  color: var(--color-white);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}
.faq-item h3 {
  color: var(--color-primary);
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-3);
  flex: 1;
}
.faq-answer {
  color: var(--color-gray-dark);
  line-height: 1.7;
  font-size: var(--font-size-base);
  padding-left: calc(40px + var(--space-4));
  margin: 0;
}

/* CTA */
.faq-cta {
  background: linear-gradient(135deg, var(--color-secondary) 0%, var(--color-primary) 120%);
  text-align: center;
}
.faq-cta h2 {
  color: var(--color-white);
  font-size: var(--font-size-4xl);
  margin-bottom: var(--space-4);
}
.faq-cta p {
  color: rgba(255, 255, 255, 0.9);
  max-width: 52ch;
  margin: 0 auto var(--space-8);
  font-size: var(--font-size-lg);
}

@media (max-width: 600px) {
  .faq-hero h1 { font-size: var(--font-size-3xl); }
  .faq-answer { padding-left: 0; margin-top: var(--space-3); }
}
</style>

<!-- Breadcrumb -->
<nav class="breadcrumb" aria-label="Breadcrumb">
  <div class="container">
    <ol>
      <li><a href="/">Home</a></li>
      <li aria-hidden="true" class="breadcrumb-sep">/</li>
      <li aria-current="page">FAQ</li>
    </ol>
  </div>
</nav>

<!-- Hero -->
<section class="faq-hero" aria-label="Frequently asked roofing questions">
  <div class="container">
    <h1>Roofing <span class="text-accent">Questions, Answered</span></h1>
    <p class="hero-subtitle">Get straight answers from JBL Roofing LLC on costs, timelines, materials, insurance, and everything else you need to know about roofing in Fort Smith, AR.</p>
  </div>
</section>

<!-- FAQ Main -->
<section class="faq-main" aria-label="FAQ categories">
  <div class="container">
    <?php foreach ($faqCategories as $category => $faqs): ?>
    <div class="faq-category reveal-up">
      <h2><?php echo htmlspecialchars($category); ?></h2>
      <div class="faq-list">
        <?php foreach ($faqs as $faq): ?>
        <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <div class="faq-question">
            <div class="faq-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <circle cx="12" cy="12" r="10"/>
                <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/>
                <path d="M12 17h.01"/>
              </svg>
            </div>
            <h3 itemprop="name"><?php echo htmlspecialchars($faq['q']); ?></h3>
          </div>
          <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text"><?php echo htmlspecialchars($faq['a']); ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- CTA -->
<section class="faq-cta" aria-label="Still have questions">
  <div class="container">
    <h2 class="reveal-up">Didn't Find What You Were Looking For?</h2>
    <p class="reveal-up reveal-delay-1">Contact JBL Roofing LLC directly and we\'ll answer any questions you have about your roof, our services, or the roofing process.</p>
    <a href="/contact/" class="btn btn-outline-white btn-lg reveal-up reveal-delay-2">Ask Us a Question</a>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
