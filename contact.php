<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ---------------------------------------------------------------------------
 * PAGE-LEVEL SETUP — Contact Page
 * ------------------------------------------------------------------------- */
$currentPage = 'contact';

$pageTitle       = 'Contact JBL Roofing LLC | Fort Smith, AR | Free Estimates';
$pageDescription = 'Contact JBL Roofing LLC for a free roofing estimate in Fort Smith, AR. Call us, fill out our form, or visit our office. Licensed, insured, 24/7 emergency response available.';
$canonicalUrl    = $siteUrl . '/contact/';
$ogType          = 'website';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/jbl-roofing-llc/logo/1785370857501-nxseph-Logo.png';

/* Breadcrumb Schema */
$breadcrumbs = generateBreadcrumbSchema([
    ['name' => 'Home', 'url' => $siteUrl . '/'],
    ['name' => 'Contact', 'url' => $canonicalUrl],
]);

/* WebPage Schema + ContactPage */
$contactPageSchema = [
    '@type'       => 'ContactPage',
    '@id'         => $canonicalUrl . '#webpage',
    'url'         => $canonicalUrl,
    'name'        => $pageTitle,
    'description' => $pageDescription,
    'isPartOf'    => ['@id' => $siteUrl . '#website'],
    'provider'    => ['@id' => $siteUrl . '#organization'],
];

unset($breadcrumbs['@context']);
$schemaMarkup = generateGraphSchema([$breadcrumbs, $contactPageSchema]);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<style>
/* =========================================================================
   CONTACT PAGE — Two-column layout with Google Maps embed
   ========================================================================= */
.contact-hero {
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%);
  min-height: 40vh;
  display: flex;
  align-items: center;
  padding: calc(var(--space-16) + var(--nav-height, 80px)) var(--space-8) var(--space-12);
  position: relative;
  overflow: hidden;
}
.contact-hero::after {
  content: "";
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='3'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.5'/%3E%3C/svg%3E");
  opacity: 0.06;
  mix-blend-mode: overlay;
  pointer-events: none;
}
.contact-hero .container { position: relative; z-index: 1; text-align: center; }
.contact-hero h1 {
  color: var(--color-white);
  font-size: var(--font-size-5xl);
  margin-bottom: var(--space-3);
  text-wrap: balance;
}
.contact-hero .hero-subtitle {
  color: rgba(255, 255, 255, 0.88);
  font-size: var(--font-size-lg);
  line-height: 1.7;
  max-width: 60ch;
  margin: 0 auto;
}

/* Contact Section */
.contact-section { background: var(--color-white); }
.contact-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-16);
  align-items: start;
}
.contact-info h2 {
  font-size: var(--font-size-3xl);
  color: var(--color-primary);
  margin-bottom: var(--space-6);
}
.contact-info h2 .text-accent { color: var(--color-secondary); }
.contact-details { display: flex; flex-direction: column; gap: var(--space-6); }
.contact-item {
  display: flex;
  align-items: flex-start;
  gap: var(--space-4);
}
.contact-item-icon {
  width: 48px;
  height: 48px;
  border-radius: var(--radius-md);
  background: linear-gradient(135deg, var(--color-primary), var(--color-secondary));
  color: var(--color-white);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}
.contact-item-content h3 {
  font-size: var(--font-size-base);
  color: var(--color-primary);
  margin-bottom: var(--space-1);
}
.contact-item-content p,
.contact-item-content a {
  color: var(--color-gray-dark);
  font-size: var(--font-size-sm);
  line-height: 1.6;
  margin: 0;
}
.contact-item-content a {
  color: var(--color-secondary);
  text-decoration: none;
  transition: color var(--transition-base);
}
.contact-item-content a:hover { color: var(--color-primary); }

/* Contact Form Card */
.contact-form-card {
  background: var(--color-light);
  border-radius: var(--radius-xl);
  padding: var(--space-10);
  box-shadow: var(--shadow-lg);
}
.contact-form-card h2 {
  font-size: var(--font-size-2xl);
  color: var(--color-primary);
  margin-bottom: var(--space-6);
}
.form-group {
  margin-bottom: var(--space-5);
}
.form-group label {
  display: block;
  font-weight: 600;
  color: var(--color-primary);
  margin-bottom: var(--space-2);
  font-size: var(--font-size-sm);
}
.form-group input,
.form-group select,
.form-group textarea {
  width: 100%;
  padding: var(--space-4);
  font-family: var(--font-body);
  font-size: var(--font-size-base);
  color: var(--color-black);
  background: var(--color-white);
  border: 2px solid var(--color-border);
  border-radius: var(--radius-md);
  transition: border-color var(--transition-fast), box-shadow var(--transition-fast);
}
.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
  outline: none;
  border-color: var(--color-secondary);
  box-shadow: 0 0 0 3px rgba(var(--color-secondary-rgb), 0.15);
}
.form-group textarea {
  min-height: 120px;
  resize: vertical;
}

/* p1-consent blocks (from legal-compliance.md — self-contained CSS) */
.p1-consent-set {
  border: 2px solid var(--color-border, #ddd);
  border-radius: var(--radius-md, 8px);
  padding: var(--space-6, 24px);
  margin: var(--space-6, 24px) 0;
  background: var(--color-white, #fff);
}
.p1-consent-legend {
  font-weight: 700;
  font-size: var(--font-size-base, 1rem);
  color: var(--color-primary, #000);
  padding: 0 var(--space-2, 8px);
}
.p1-consent-item {
  display: flex;
  align-items: flex-start;
  gap: var(--space-3, 12px);
  margin: var(--space-4, 16px) 0;
  font-size: var(--font-size-sm, 0.92rem);
  line-height: 1.6;
  color: var(--color-gray-dark, #444);
  cursor: pointer;
}
.p1-consent-item input[type="checkbox"] {
  width: 20px;
  height: 20px;
  margin-top: 2px;
  flex-shrink: 0;
  accent-color: var(--color-primary, #000);
  cursor: pointer;
}
.p1-consent-item span {
  flex: 1;
  position: static;
  pointer-events: auto;
  top: auto;
  left: auto;
  background: transparent;
  padding: 0;
}
.p1-consent-item a {
  color: var(--color-secondary, #00f);
  text-decoration: underline;
}

/* Map Section */
.map-section { background: var(--color-light); }
.map-embed {
  width: 100%;
  height: 450px;
  border: none;
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-md);
}
.map-actions {
  display: flex;
  gap: var(--space-4);
  margin-top: var(--space-6);
  justify-content: center;
}

@media (max-width: 1024px) {
  .contact-grid { grid-template-columns: 1fr; gap: var(--space-12); }
}
@media (max-width: 600px) {
  .contact-hero h1 { font-size: var(--font-size-3xl); }
  .contact-form-card { padding: var(--space-6); }
  .map-actions { flex-direction: column; }
}
</style>

<!-- Breadcrumb -->
<nav class="breadcrumb" aria-label="Breadcrumb">
  <div class="container">
    <ol>
      <li><a href="/">Home</a></li>
      <li aria-hidden="true" class="breadcrumb-sep">/</li>
      <li aria-current="page">Contact</li>
    </ol>
  </div>
</nav>

<!-- Hero -->
<section class="contact-hero" aria-label="Contact JBL Roofing">
  <div class="container">
    <h1>Get Your <span class="text-accent">Free Roofing Estimate</span> Today</h1>
    <p class="hero-subtitle">Reach out to JBL Roofing LLC for a no-obligation inspection and quote. We're ready to answer your questions and help you protect your Fort Smith home.</p>
  </div>
</section>

<!-- Contact Section -->
<section class="contact-section" aria-label="Contact information and form">
  <div class="container">
    <div class="contact-grid">
      <!-- Contact Info -->
      <div class="contact-info reveal-left">
        <h2>Let's Talk About <span class="text-accent">Your Roof</span></h2>
        <div class="contact-details">

          <?php if (!empty($phone)): ?>
          <div class="contact-item">
            <div class="contact-item-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/>
              </svg>
            </div>
            <div class="contact-item-content">
              <h3>Phone</h3>
              <p><a href="tel:<?php echo htmlspecialchars($phone); ?>"><?php echo htmlspecialchars(formatPhone($phone)); ?></a></p>
              <p style="font-size: 0.88rem; color: var(--color-gray);"><?php echo htmlspecialchars($businessHours); ?></p>
            </div>
          </div>
          <?php endif; ?>

          <?php if (!empty($email)): ?>
          <div class="contact-item">
            <div class="contact-item-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"/>
                <rect x="2" y="4" width="20" height="16" rx="2"/>
              </svg>
            </div>
            <div class="contact-item-content">
              <h3>Email</h3>
              <p><a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a></p>
            </div>
          </div>
          <?php endif; ?>

          <div class="contact-item">
            <div class="contact-item-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/>
                <circle cx="12" cy="10" r="3"/>
              </svg>
            </div>
            <div class="contact-item-content">
              <h3>Address</h3>
              <p>
                <?php echo htmlspecialchars($address['street']); ?><br>
                <?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?> <?php echo htmlspecialchars($address['zip']); ?>
              </p>
            </div>
          </div>

          <div class="contact-item">
            <div class="contact-item-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <circle cx="12" cy="12" r="10"/>
                <path d="M12 6v6l4 2"/>
              </svg>
            </div>
            <div class="contact-item-content">
              <h3>Business Hours</h3>
              <p><?php echo htmlspecialchars($businessHours); ?></p>
            </div>
          </div>

        </div>
      </div>

      <!-- Contact Form -->
      <div class="contact-form-card reveal-right">
        <h2>Send Us a Message</h2>
        <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST">
          <!-- Honeypot -->
          <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">

          <!-- Formsubmit.co directives -->
          <input type="hidden" name="_next" value="<?php echo htmlspecialchars($siteUrl); ?>/thank-you">
          <input type="hidden" name="_captcha" value="false">
          <input type="hidden" name="_template" value="table">
          <input type="hidden" name="_subject" value="New contact form submission — JBL Roofing LLC">
          <input type="hidden" name="_cc" value="CustomerService@pageoneinsights.com">

          <!-- Consent tracking -->
          <input type="hidden" name="consent_version" value="v2.1">
          <input type="hidden" name="consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'] ?? '/contact/'); ?>">

          <div class="form-group">
            <label for="contact-name">Your Name <span style="color: var(--color-secondary);">*</span></label>
            <input type="text" id="contact-name" name="name" required>
          </div>

          <div class="form-group">
            <label for="contact-email">Email <span style="color: var(--color-secondary);">*</span></label>
            <input type="email" id="contact-email" name="email" required>
          </div>

          <div class="form-group">
            <label for="contact-phone">Phone <span style="color: var(--color-secondary);">*</span></label>
            <input type="tel" id="contact-phone" name="phone" required>
          </div>

          <div class="form-group">
            <label for="contact-service">Service Needed</label>
            <select id="contact-service" name="service">
              <option value="">Select a service</option>
              <?php foreach ($serviceGroups as $group): ?>
                <option value="<?php echo htmlspecialchars($group['page']); ?>"><?php echo htmlspecialchars($group['page']); ?></option>
              <?php endforeach; ?>
              <option value="Not sure / Other">Not sure / Other</option>
            </select>
          </div>

          <div class="form-group">
            <label for="contact-message">Message</label>
            <textarea id="contact-message" name="message" rows="4" placeholder="Tell us about your roofing needs..."></textarea>
          </div>

          <!-- THREE SEPARATE CONSENT CHECKBOXES (TCPA 2025/2026 + v6.1 standard) -->
          <fieldset class="p1-consent-set">
            <legend class="p1-consent-legend">Communication Consent</legend>

            <label class="p1-consent-item">
              <input type="checkbox" name="email_opt_in" value="yes">
              <span>
                <strong>Email updates (optional):</strong> I agree to receive emails from
                <?php echo htmlspecialchars($siteName); ?> about my inquiry, services, promotions, and news. I understand I can unsubscribe anytime via the link in any email. Message frequency varies.
              </span>
            </label>

            <label class="p1-consent-item">
              <input type="checkbox" name="sms_opt_in" value="yes">
              <span>
                <strong>SMS/Text messages (optional):</strong> I agree to receive text messages from
                <?php echo htmlspecialchars($siteName); ?> at the phone number I provided. Message types may include appointment reminders, service updates, and promotional
                offers. Message frequency varies. Message and data rates may apply. Reply STOP to unsubscribe, HELP for help.
                <strong>Consent is not a condition of purchase.</strong>
              </span>
            </label>

            <label class="p1-consent-item">
              <input type="checkbox" name="terms_accepted" value="yes" required>
              <span>
                I have read and agree to the
                <a href="/privacy-policy/">Privacy Policy</a>
                and
                <a href="/terms/">Terms of Service</a>. <span style="color: var(--color-secondary);">*</span>
              </span>
            </label>

          </fieldset>

          <button type="submit" class="btn btn-primary btn-lg" style="width: 100%;">Send Message</button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Map Section -->
<section class="map-section" aria-label="Our location">
  <div class="container">
    <div class="section-header reveal-up">
      <h2>Visit Us in <span class="text-accent">Fort Smith, AR</span></h2>
      <p class="hero-answer">Located at <?php echo htmlspecialchars($address['street']); ?>, <?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?> <?php echo htmlspecialchars($address['zip']); ?>. We serve homeowners and businesses throughout the Fort Smith region and beyond.</p>
    </div>
    <?php echo $gbpMapEmbed; ?>
    <div class="map-actions">
      <a href="https://www.google.com/maps/dir/?api=1&destination=<?php echo urlencode($address['street'] . ', ' . $address['city'] . ', ' . $address['state'] . ' ' . $address['zip']); ?>" class="btn btn-secondary btn-lg" target="_blank" rel="noopener">Get Directions</a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
