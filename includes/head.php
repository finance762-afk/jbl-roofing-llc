<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- SEO Meta Tags -->
  <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : htmlspecialchars($siteName) . ' | ' . ucwords($primaryKeyword) . ' | ' . $address['city'] . ', ' . $address['state']; ?></title>
  <meta name="description" content="<?php echo isset($pageDescription) ? htmlspecialchars($pageDescription) : htmlspecialchars($siteName) . ' provides expert ' . $primaryKeyword . ' in ' . $address['city'] . ', ' . $address['state'] . '. Licensed, insured roofing contractor serving Fort Smith and surrounding areas.'; ?>">
  <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl ?? $siteUrl); ?>">

  <!-- Open Graph Tags -->
  <meta property="og:type" content="<?php echo $ogType ?? 'website'; ?>">
  <meta property="og:title" content="<?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : htmlspecialchars($siteName) . ' | ' . $address['city'] . ', ' . $address['state']; ?>">
  <meta property="og:description" content="<?php echo isset($pageDescription) ? htmlspecialchars($pageDescription) : 'Expert roofing services in ' . $address['city'] . ', ' . $address['state'] . '. Licensed contractor specializing in roof repair, replacement, and storm damage restoration.'; ?>">
  <meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl ?? $siteUrl); ?>">
  <meta property="og:image" content="<?php echo htmlspecialchars($ogImage ?? 'https://db.pageone.cloud/storage/v1/object/public/client-assets/jbl-roofing-llc/logo/1785370857501-nxseph-Logo.png'); ?>">
  <meta property="og:site_name" content="<?php echo htmlspecialchars($siteName); ?>">
  <meta property="og:locale" content="en_US">

  <!-- Favicon -->
  <link rel="icon" type="image/svg+xml" href="/assets/images/favicon.svg">
  <link rel="icon" type="image/png" href="/assets/images/favicon.png">

  <!-- Font Preload (v6.2 — self-hosted, preload only above-fold heading font) -->
  <link rel="preload" href="/assets/fonts/bricolage-grotesque.woff2" as="font" type="font/woff2" crossorigin>

  <!-- CSS -->
  <link rel="stylesheet" href="/assets/css/framework.css?v=<?php echo $cssVersion ?? '1'; ?>">

  <!-- DNS Prefetch for External Resources -->
  <link rel="dns-prefetch" href="https://i.imgur.com">
  <link rel="dns-prefetch" href="https://db.pageone.cloud">

  <?php if (isset($heroImagePreload) && $heroImagePreload): ?>
  <!-- Hero Image Preload -->
  <link rel="preload" href="<?php echo htmlspecialchars($heroImagePreload); ?>" as="image" fetchpriority="high">
  <?php endif; ?>

  <!-- Google Analytics (Placeholder — Replace Post-Launch) -->
  <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $googleAnalyticsId; ?>"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', '<?php echo $googleAnalyticsId; ?>');
  </script> -->

  <?php if (isset($schemaMarkup) && $schemaMarkup): ?>
  <!-- JSON-LD Schema Markup -->
  <?php echo $schemaMarkup; ?>
  <?php else: ?>
  <!-- Default LocalBusiness Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "RoofingContractor",
    "@id": "<?php echo htmlspecialchars($siteUrl); ?>#organization",
    "name": "<?php echo htmlspecialchars($siteName); ?>",
    "url": "<?php echo htmlspecialchars($siteUrl); ?>",
    "telephone": "<?php echo htmlspecialchars($phone); ?>",
    "email": "<?php echo htmlspecialchars($email); ?>",
    "description": "<?php echo htmlspecialchars($siteName); ?> provides expert roofing services including roof repair, replacement, storm damage restoration, and emergency roofing in <?php echo $address['city']; ?>, <?php echo $address['state']; ?>.",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "<?php echo htmlspecialchars($address['street']); ?>",
      "addressLocality": "<?php echo htmlspecialchars($address['city']); ?>",
      "addressRegion": "<?php echo htmlspecialchars($address['state']); ?>",
      "postalCode": "<?php echo htmlspecialchars($address['zip']); ?>",
      "addressCountry": "US"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": "<?php echo $geo['lat']; ?>",
      "longitude": "<?php echo $geo['lng']; ?>"
    },
    "hasMap": "<?php echo htmlspecialchars($gbpMapEmbed); ?>",
    "openingHours": "<?php echo $businessHours === '24/7' ? 'Mo-Su 00:00-23:59' : $businessHours; ?>",
    "image": "<?php echo htmlspecialchars($ogImage ?? 'https://db.pageone.cloud/storage/v1/object/public/client-assets/jbl-roofing-llc/logo/1785370857501-nxseph-Logo.png'); ?>",
    "areaServed": {
      "@type": "City",
      "name": "<?php echo htmlspecialchars($address['city']); ?>",
      "containedInPlace": {
        "@type": "State",
        "name": "<?php echo htmlspecialchars($address['state']); ?>"
      }
    },
    "priceRange": "$$",
    "slogan": "<?php echo htmlspecialchars($tagline); ?>"
  }
  </script>
  <?php endif; ?>

  <?php if (isset($noindex) && $noindex): ?>
  <!-- No Index (Thank You Page, etc.) -->
  <meta name="robots" content="noindex, follow">
  <?php endif; ?>
</head>
<body>
  <!-- Skip to Content Link (Accessibility) -->
  <a href="#main-content" class="skip-link">Skip to main content</a>
