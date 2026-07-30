<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ---------------------------------------------------------------------------
 * PAGE-LEVEL SETUP — Thank You Page (Form Submission Confirmation)
 * ------------------------------------------------------------------------- */
$currentPage = 'thank-you';

$pageTitle       = 'Thank You | ' . $siteName;
$pageDescription = 'Thank you for contacting JBL Roofing LLC. We\'ve received your message and will respond shortly.';
$canonicalUrl    = $siteUrl . '/thank-you/';
$ogType          = 'website';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/jbl-roofing-llc/logo/1785370857501-nxseph-Logo.png';
$noindex         = true; // Do not index thank-you pages

$schemaMarkup = ''; // No schema needed on thank-you

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<style>
/* =========================================================================
   THANK-YOU PAGE — Confirmation with next steps
   ========================================================================= */
.thank-you {
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%);
  min-height: 80vh;
  display: flex;
  align-items: center;
  padding: calc(var(--space-16) + var(--nav-height, 80px)) var(--space-8) var(--space-16);
  position: relative;
  overflow: hidden;
}
.thank-you::after {
  content: "";
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='3'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.5'/%3E%3C/svg%3E");
  opacity: 0.06;
  mix-blend-mode: overlay;
  pointer-events: none;
}
.thank-you .container { position: relative; z-index: 1; text-align: center; max-width: 650px; }
.thank-you .success-icon {
  width: 100px;
  height: 100px;
  border-radius: var(--radius-full);
  background: rgba(255, 255, 255, 0.15);
  color: var(--color-white);
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto var(--space-6);
}
.thank-you h1 {
  color: var(--color-white);
  font-size: var(--font-size-5xl);
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.thank-you p {
  color: rgba(255, 255, 255, 0.88);
  font-size: var(--font-size-lg);
  line-height: 1.7;
  margin-bottom: var(--space-8);
}
.thank-you .next-steps {
  background: rgba(255, 255, 255, 0.1);
  border-radius: var(--radius-lg);
  padding: var(--space-8);
  margin-bottom: var(--space-8);
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
}
.thank-you .next-steps h2 {
  color: var(--color-white);
  font-size: var(--font-size-2xl);
  margin-bottom: var(--space-4);
}
.thank-you .next-steps ul {
  list-style: none;
  text-align: left;
  max-width: 450px;
  margin: 0 auto;
}
.thank-you .next-steps li {
  color: rgba(255, 255, 255, 0.9);
  padding: var(--space-3) 0 var(--space-3) var(--space-8);
  position: relative;
  font-size: var(--font-size-base);
  line-height: 1.6;
}
.thank-you .next-steps li::before {
  content: "✓";
  position: absolute;
  left: 0;
  top: var(--space-3);
  width: 24px;
  height: 24px;
  border-radius: var(--radius-full);
  background: var(--color-secondary);
  color: var(--color-white);
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 700;
  font-size: var(--font-size-sm);
}
.thank-you .actions {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  justify-content: center;
}

@media (max-width: 600px) {
  .thank-you h1 { font-size: var(--font-size-3xl); }
  .thank-you .actions { flex-direction: column; }
}
</style>

<section class="thank-you" aria-label="Thank you for contacting us">
  <div class="container">
    <div class="success-icon">
      <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/>
        <path d="m9 12 2 2 4-4"/>
      </svg>
    </div>

    <h1>Thank You!</h1>
    <p>We've received your message and one of our team members will respond shortly. At JBL Roofing LLC, we pride ourselves on fast, personal service.</p>

    <div class="next-steps">
      <h2>What Happens Next?</h2>
      <ul>
        <li>We'll review your request and contact you within <strong>24 hours</strong> (usually much sooner)</li>
        <li>If you requested an inspection, we'll schedule a convenient time to visit your property</li>
        <li>We'll provide a detailed, no-obligation estimate and answer all your questions</li>
        <li>For <strong>emergencies</strong>, call us directly at <?php if (!empty($phone)): ?><a href="tel:<?php echo htmlspecialchars($phone); ?>" style="color: var(--color-white); text-decoration: underline;"><?php echo htmlspecialchars(formatPhone($phone)); ?></a><?php else: ?>our office<?php endif; ?></li>
      </ul>
    </div>

    <div class="actions">
      <a href="/" class="btn btn-outline-white btn-lg">Back to Home</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn btn-secondary btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/>
        </svg>
        Call Now
      </a>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
