<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/blog-data.php';

/* ---------------------------------------------------------------------------
 * PAGE-LEVEL SETUP — Blog Index
 * ------------------------------------------------------------------------- */
$currentPage = 'blog';

$pageTitle       = 'Roofing Tips & Advice | ' . $siteName;
$pageDescription = 'Expert roofing advice, maintenance tips, and industry insights from JBL Roofing LLC serving Fort Smith, AR.';
$canonicalUrl    = $siteUrl . '/blog/';
$ogType          = 'website';
$ogImage         = !empty($blogPosts) ? $blogPosts[0]['image'] : '';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<main id="main-content">

<!-- Hero -->
<section class="hero hero--legal">
  <div class="container">
    <h1>Roofing Insights & Advice</h1>
    <p style="font-size: var(--font-size-lg); max-width: 60ch; margin: var(--space-6) auto 0;">Expert tips, maintenance guides, and roofing insights from the team at <?php echo htmlspecialchars($siteName); ?>.</p>
  </div>
</section>

<!-- Blog Grid -->
<section style="padding: var(--space-16) 0; background: var(--color-bg);">
  <div class="container">
    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: var(--space-8);">
      <?php foreach ($blogPosts as $post): ?>
        <article class="card" style="overflow: hidden;">
          <a href="/blog/<?php echo htmlspecialchars($post['slug']); ?>/" style="display: block; text-decoration: none; color: inherit;">
            <div style="aspect-ratio: 16/9; overflow: hidden;">
              <img src="<?php echo htmlspecialchars($post['image']); ?>"
                   alt="<?php echo htmlspecialchars($post['alt']); ?>"
                   loading="lazy"
                   width="800" height="450"
                   style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div style="padding: var(--space-6);">
              <div style="display: flex; gap: var(--space-3); margin-bottom: var(--space-3); font-size: var(--font-size-sm); color: var(--color-text-light);">
                <span class="eyebrow-label"><?php echo htmlspecialchars($post['category']); ?></span>
                <span><?php echo htmlspecialchars($post['readtime']); ?></span>
              </div>
              <h2 style="font-size: var(--font-size-xl); margin-bottom: var(--space-3); line-height: 1.3; text-wrap: balance;">
                <?php echo htmlspecialchars($post['title']); ?>
              </h2>
              <p style="color: var(--color-text-light); margin-bottom: var(--space-4);">
                <?php echo htmlspecialchars($post['excerpt']); ?>
              </p>
              <div style="color: var(--color-primary); font-weight: 600;">
                Read More →
              </div>
            </div>
          </a>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-banner">
  <div class="container">
    <h2>Need Roofing Help?</h2>
    <p>Get a free inspection and estimate from Fort Smith's trusted roofing contractor.</p>
    <div style="display: flex; flex-wrap: wrap; gap: var(--space-4); justify-content: center;">
      <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn-primary">
          Call <?php echo htmlspecialchars(formatPhone($phone)); ?>
        </a>
      <?php endif; ?>
      <a href="/contact/" class="btn-secondary">Request Estimate</a>
    </div>
  </div>
</section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
