<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

http_response_code(404);
?>
<?php
/* ---------------------------------------------------------------------------
 * PAGE-LEVEL SETUP — 404 Error Page
 * ------------------------------------------------------------------------- */
$currentPage = '404';

$pageTitle       = '404 Page Not Found | ' . $siteName;
$pageDescription = 'The page you\'re looking for doesn\'t exist. Return to our homepage or explore our roofing services in Fort Smith, AR.';
$canonicalUrl    = $siteUrl . '/404/';
$ogType          = 'website';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/jbl-roofing-llc/logo/1785370857501-nxseph-Logo.png';
$noindex         = true; // Do not index 404 pages

$schemaMarkup = ''; // No schema needed on 404

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<style>
/* =========================================================================
   404 PAGE — Friendly error with helpful links
   ========================================================================= */
.error-404 {
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%);
  min-height: 80vh;
  display: flex;
  align-items: center;
  padding: calc(var(--space-16) + var(--nav-height, 80px)) var(--space-8) var(--space-16);
  position: relative;
  overflow: hidden;
}
.error-404::after {
  content: "";
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='3'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.5'/%3E%3C/svg%3E");
  opacity: 0.06;
  mix-blend-mode: overlay;
  pointer-events: none;
}
.error-404 .container { position: relative; z-index: 1; text-align: center; max-width: 700px; }
.error-404 .error-code {
  font-family: var(--font-heading);
  font-size: clamp(6rem, 15vw, 12rem);
  font-weight: 900;
  color: rgba(255, 255, 255, 0.15);
  line-height: 1;
  margin: 0;
}
.error-404 h1 {
  color: var(--color-white);
  font-size: var(--font-size-4xl);
  margin: var(--space-6) 0 var(--space-4);
  text-wrap: balance;
}
.error-404 p {
  color: rgba(255, 255, 255, 0.88);
  font-size: var(--font-size-lg);
  line-height: 1.7;
  margin-bottom: var(--space-8);
}
.error-404 .error-actions {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  justify-content: center;
  margin-bottom: var(--space-12);
}
.error-404 .popular-links {
  background: rgba(255, 255, 255, 0.1);
  border-radius: var(--radius-lg);
  padding: var(--space-8);
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
}
.error-404 .popular-links h2 {
  color: var(--color-white);
  font-size: var(--font-size-xl);
  margin-bottom: var(--space-4);
}
.error-404 .popular-links ul {
  list-style: none;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: var(--space-3);
}
.error-404 .popular-links a {
  color: rgba(255, 255, 255, 0.9);
  text-decoration: none;
  padding: var(--space-3) var(--space-4);
  background: rgba(255, 255, 255, 0.08);
  border-radius: var(--radius-md);
  display: block;
  transition: background var(--transition-base), color var(--transition-base);
}
.error-404 .popular-links a:hover {
  background: var(--color-white);
  color: var(--color-primary);
}

@media (max-width: 600px) {
  .error-404 h1 { font-size: var(--font-size-2xl); }
  .error-404 .error-actions { flex-direction: column; }
  .error-404 .popular-links ul { grid-template-columns: 1fr; }
}
</style>

<section class="error-404" aria-label="Page not found">
  <div class="container">
    <p class="error-code">404</p>
    <h1>Page Not Found</h1>
    <p>The page you're looking for doesn't exist or may have been moved. Let's get you back on track.</p>

    <div class="error-actions">
      <a href="/" class="btn btn-outline-white btn-lg">Back to Home</a>
      <a href="/contact/" class="btn btn-secondary btn-lg">Contact Us</a>
    </div>

    <div class="popular-links">
      <h2>Popular Pages</h2>
      <ul>
        <li><a href="/">Homepage</a></li>
        <li><a href="/services/">All Services</a></li>
        <li><a href="/about/">About Us</a></li>
        <li><a href="/contact/">Contact</a></li>
        <?php foreach (array_slice($serviceGroups, 0, 3) as $group): ?>
          <li><a href="/services/<?php echo htmlspecialchars($group['slug']); ?>/"><?php echo htmlspecialchars($group['page']); ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
