<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/blog-data.php';

/* ---------------------------------------------------------------------------
 * PAGE-LEVEL SETUP — Blog Post
 * ------------------------------------------------------------------------- */
$currentPage = 'blog';
$postSlug = 'signs-you-need-roof-replacement';

// Find this post in the registry
$post = null;
foreach ($blogPosts as $p) {
    if ($p['slug'] === $postSlug) {
        $post = $p;
        break;
    }
}

if (!$post) {
    http_response_code(404);
    header('Location: /404');
    exit;
}

$pageTitle       = $post['title'] . ' | ' . $siteName;
$pageDescription = $post['excerpt'];
$canonicalUrl    = $siteUrl . '/blog/' . $postSlug . '/';
$ogType          = 'article';
$ogImage         = $post['image'];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<main id="main-content">

<!-- Hero -->
<section class="hero hero--legal">
  <div class="container" style="max-width: 800px;">
    <p class="eyebrow-label" style="margin-bottom: var(--space-3);"><?php echo htmlspecialchars($post['category']); ?></p>
    <h1><?php echo htmlspecialchars($post['title']); ?></h1>
    <div style="display: flex; gap: var(--space-4); margin-top: var(--space-4); font-size: var(--font-size-sm); color: var(--color-text-light);">
      <span><?php echo htmlspecialchars($post['date']); ?></span>
      <span><?php echo htmlspecialchars($post['readtime']); ?></span>
    </div>
  </div>
</section>

<!-- Article Content -->
<article style="padding: var(--space-16) 0; background: var(--color-bg);">
  <div class="container" style="max-width: 800px;">

    <div style="margin-bottom: var(--space-12);">
      <img src="<?php echo htmlspecialchars($post['image']); ?>"
           alt="<?php echo htmlspecialchars($post['alt']); ?>"
           loading="eager" fetchpriority="high"
           width="1600" height="900"
           srcset="<?php echo htmlspecialchars($post['image']); ?> 1600w"
           sizes="(max-width: 768px) 100vw, 800px"
           style="width: 100%; height: auto; border-radius: var(--radius-lg);">
    </div>

    <div class="prose">
      <p style="font-size: var(--font-size-lg); font-weight: 500; margin-bottom: var(--space-8);">
        Your roof protects everything inside your Fort Smith home. Knowing when to replace it—before small problems become expensive disasters—can save thousands. Here are seven clear warning signs that it's time for a new roof.
      </p>

      <h2>1. Your Roof Is Over 20 Years Old</h2>
      <p>Asphalt shingle roofs typically last 20–25 years. If your roof is approaching or past this age, replacement should be on your radar even if there's no visible damage. Age alone reduces your roof's ability to protect your home from Arkansas storms.</p>

      <h2>2. Curling or Missing Shingles</h2>
      <p>Shingles that curl at the edges or are missing entirely signal that your roof has reached the end of its lifespan. Fort Smith's temperature swings and UV exposure accelerate this process. A few missing shingles can be replaced, but widespread curling means it's time for a full replacement.</p>

      <h2>3. Granule Loss in Gutters</h2>
      <p>Check your gutters after a storm. If you see shingle granules collecting—they look like coarse black sand—your shingles are deteriorating. This exposes the asphalt layer to UV rays and weather, accelerating failure.</p>

      <h2>4. Interior Water Stains or Leaks</h2>
      <p>Water stains on ceilings or walls indicate roof leaks. While a single leak might be repairable, multiple leaks or persistent water intrusion after repairs suggest widespread roof failure. Don't wait—water damage compounds quickly.</p>

      <h2>5. Sagging Roof Deck</h2>
      <p>A sagging or uneven roofline indicates structural damage to the decking beneath your shingles. This is often caused by prolonged water intrusion or inadequate ventilation. Sagging requires immediate professional assessment and usually full replacement.</p>

      <h2>6. Daylight Through Roof Boards</h2>
      <p>Go into your attic on a sunny day. If you see daylight coming through the roof boards, you have gaps that allow water intrusion. This is a clear sign your roof's integrity is compromised.</p>

      <h2>7. Widespread Storm Damage</h2>
      <p>Arkansas experiences severe hail and wind events. After a major storm, have your roof inspected. If an adjuster finds widespread damage across multiple sections, replacement is often more cost-effective than patchwork repairs—and may be covered by insurance.</p>

      <h2>When to Call a Professional</h2>
      <p>If you notice any of these signs, contact JBL Roofing LLC for a free inspection. We'll assess your roof honestly, recommend repair when possible, and provide a detailed replacement estimate when necessary. Don't wait until a small problem becomes a costly emergency.</p>

      <div style="background: var(--color-bg-alt); padding: var(--space-8); border-radius: var(--radius-lg); border-left: 4px solid var(--color-secondary); margin-top: var(--space-12);">
        <p style="font-weight: 700; font-size: var(--font-size-lg); margin-bottom: var(--space-4);">Need a Roof Inspection?</p>
        <p>JBL Roofing LLC offers free, no-obligation roof inspections in Fort Smith and surrounding areas. We'll give you an honest assessment and clear recommendations.</p>
        <?php if (!empty($phone)): ?>
          <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn-primary" style="margin-top: var(--space-4); display: inline-block;">
            Call <?php echo htmlspecialchars(formatPhone($phone)); ?>
          </a>
        <?php endif; ?>
      </div>
    </div>

  </div>
</article>

<!-- CTA -->
<section class="cta-banner">
  <div class="container">
    <h2>Protect Your Fort Smith Home</h2>
    <p>Get a free roof inspection and honest assessment from local experts.</p>
    <a href="/contact/" class="btn-primary">Request Free Inspection</a>
  </div>
</section>

</main>

<?php
// Blog post schema
$blogSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'BlogPosting',
    'headline' => $post['title'],
    'description' => $post['excerpt'],
    'image' => $post['image'],
    'datePublished' => $post['dateISO'],
    'dateModified' => $post['dateISO'],
    'author' => [
        '@type' => 'Organization',
        '@id' => $siteUrl . '/#organization',
    ],
    'publisher' => [
        '@type' => 'Organization',
        '@id' => $siteUrl . '/#organization',
    ],
];

echo "\n<script type=\"application/ld+json\">\n";
echo json_encode($blogSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
echo "\n</script>\n";
?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
