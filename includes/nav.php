<header class="site-header" data-header>
  <div class="container">
    <div class="header-inner">
      <!-- Logo -->
      <div class="site-logo">
        <a href="/" aria-label="<?php echo htmlspecialchars($siteName); ?> Home">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/jbl-roofing-llc/logo/1785370857501-nxseph-Logo.png" alt="<?php echo htmlspecialchars($siteName); ?> Logo" width="160" height="48">
        </a>
      </div>

      <!-- Desktop Navigation -->
      <nav class="nav-links" aria-label="Main navigation">
        <a href="/" <?php echo (isset($currentPage) && $currentPage === 'home') ? 'aria-current="page"' : ''; ?>>Home</a>

        <!-- Services Dropdown -->
        <div class="nav-dropdown">
          <a href="/services/" <?php echo (isset($currentPage) && $currentPage === 'services') ? 'aria-current="page"' : ''; ?>>Services</a>
          <div class="nav-dropdown-menu" role="menu" style="display:none">
            <?php foreach ($services as $service): ?>
              <a href="/services/<?php echo htmlspecialchars($service['slug']); ?>/" role="menuitem"><?php echo htmlspecialchars($service['name']); ?></a>
            <?php endforeach; ?>
          </div>
        </div>

        <a href="/about/" <?php echo (isset($currentPage) && $currentPage === 'about') ? 'aria-current="page"' : ''; ?>>About</a>
        <a href="/contact/" <?php echo (isset($currentPage) && $currentPage === 'contact') ? 'aria-current="page"' : ''; ?>>Contact</a>

        <!-- Desktop CTA -->
        <div class="header-cta">
          <?php if (!empty($phone)): ?>
          <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn btn-accent btn-sm">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/>
            </svg>
            Call Now
          </a>
          <?php endif; ?>
        </div>
      </nav>

      <!-- Mobile Hamburger Toggle -->
      <button class="hamburger" aria-label="Toggle navigation menu" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </div>
</header>

<!-- Mobile Full-Screen Menu -->
<div class="mobile-menu" aria-hidden="true">
  <nav class="mobile-menu-nav" aria-label="Mobile navigation">
    <a href="/" <?php echo (isset($currentPage) && $currentPage === 'home') ? 'aria-current="page"' : ''; ?>>Home</a>

    <!-- Services - Expandable Section -->
    <div class="mobile-service-group">
      <span class="mobile-service-label">Services</span>
      <div class="mobile-service-links">
        <?php foreach ($services as $service): ?>
          <a href="/services/<?php echo htmlspecialchars($service['slug']); ?>/"><?php echo htmlspecialchars($service['name']); ?></a>
        <?php endforeach; ?>
      </div>
    </div>

    <a href="/about/" <?php echo (isset($currentPage) && $currentPage === 'about') ? 'aria-current="page"' : ''; ?>>About</a>
    <a href="/contact/" <?php echo (isset($currentPage) && $currentPage === 'contact') ? 'aria-current="page"' : ''; ?>>Contact</a>

    <!-- Mobile CTA -->
    <?php if (!empty($phone)): ?>
    <div class="mobile-menu-cta">
      <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn btn-accent btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/>
        </svg>
        Call Now
      </a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Free Estimate</a>
    </div>
    <?php endif; ?>
  </nav>
</div>

<main id="main-content">
