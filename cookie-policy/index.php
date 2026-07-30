<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ---------------------------------------------------------------------------
 * PAGE-LEVEL SETUP — Cookie Policy
 * ------------------------------------------------------------------------- */
$currentPage      = 'cookie-policy';
$pageTitle        = 'Cookie Policy | ' . $siteName;
$pageDescription  = 'How ' . $siteName . ' uses cookies and tracking technologies on our website.';
$canonicalUrl     = $siteUrl . '/cookie-policy/';
$ogImage          = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/jbl-roofing-llc/logo/1785370857501-nxseph-Logo.png';

$lastUpdated = date('F j, Y');

$schemaGraph = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'WebPage',
            '@id' => $canonicalUrl . '#webpage',
            'url' => $canonicalUrl,
            'name' => $pageTitle,
            'description' => $pageDescription,
            'provider' => ['@id' => $siteUrl . '#organization'],
        ],
        [
            '@type' => 'BreadcrumbList',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl . '/'],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Cookie Policy', 'item' => $canonicalUrl],
            ],
        ],
    ],
];
$schemaMarkup = '<script type="application/ld+json">' . json_encode($schemaGraph, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<section class="hero hero--legal" aria-label="Cookie Policy">
  <div class="hero__copy">
    <span class="eyebrow-label">Legal</span>
    <h1>Cookie Policy</h1>
    <span class="section-subtitle">how we use cookies</span>
    <p class="hero__phone">Last Updated: <?php echo $lastUpdated; ?></p>
  </div>
</section>

<nav class="breadcrumb" aria-label="Breadcrumb">
  <div class="container">
    <ol>
      <li><a href="/">Home</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">›</li>
      <li aria-current="page">Cookie Policy</li>
    </ol>
  </div>
</nav>

<article class="legal-prose">

  <h2>1. What Are Cookies?</h2>
  <p>Cookies are small text files stored on your device when you visit a website. They are used to make websites work more efficiently and provide information to site owners about how visitors use the site.</p>

  <h2>2. Cookies We Use</h2>

  <h3>Strictly Necessary</h3>
  <p>Essential for site functionality (form submission, security). These cannot be disabled. Example: session cookies during form submission.</p>

  <h3>Analytics (Google Analytics 4)</h3>
  <p>We use Google Analytics 4 to understand how visitors use our site. GA4 sets cookies prefixed with _ga and _gid. Data is anonymized via IP truncation.</p>

  <h3>Third-Party Embeds</h3>
  <p>Our site may embed tools and content from third parties (Google Maps, review widgets, etc.). These services may set their own cookies subject to their own privacy policies.</p>

  <h2>3. How to Control Cookies</h2>
  <p>Most browsers allow you to view, delete, or block cookies. You can block third-party cookies or block all cookies (note: site functionality may break). Browser-specific instructions are available from Google, Mozilla, Apple, and Microsoft.</p>

  <h2>4. Opt Out of Google Analytics</h2>
  <p>You can opt out of GA4 tracking site-wide by installing the Google Analytics Opt-out Browser Add-on at <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">https://tools.google.com/dlpage/gaoptout</a>.</p>

  <h2>5. Our Cookie Notice</h2>
  <p>We display a brief banner notifying visitors of our cookie use. Once dismissed, the banner is suppressed for future visits via localStorage. You can re-enable the banner by clearing your browser's site data.</p>

  <h2>6. Changes to This Policy</h2>
  <p>We may update this Cookie Policy from time to time. The "Last Updated" date at the top will reflect the most recent change.</p>

  <h2>7. Contact Us</h2>
  <p>For questions about this Cookie Policy:</p>
  <p>
    <strong><?php echo htmlspecialchars($siteName); ?></strong><br>
    <?php if (!empty($email)): ?>Email: <a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a><br><?php endif; ?>
    <?php if (!empty($phone)): ?>Phone: <a href="tel:<?php echo htmlspecialchars($phone); ?>"><?php echo htmlspecialchars(formatPhone($phone)); ?></a><?php endif; ?>
  </p>

  <div class="legal-disclaimer">
    This Cookie Policy is provided as a general template. We recommend reviewing this document with a licensed attorney before publication.
  </div>

</article>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
