</main>

<footer class="site-footer">
  <div class="container">
    <!-- Footer Grid -->
    <div class="footer-grid">
      <!-- Column 1: Brand & Info -->
      <div class="footer-col">
        <div class="site-logo" style="margin-bottom: var(--space-4);">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/jbl-roofing-llc/logo/1785370857501-nxseph-Logo.png" alt="<?php echo htmlspecialchars($siteName); ?> Logo" width="140" height="42">
        </div>
        <p style="font-size: var(--font-size-sm); margin-bottom: var(--space-3);"><?php echo htmlspecialchars($tagline); ?></p>
        <p style="font-size: var(--font-size-sm); line-height: 1.7; color: rgba(255,255,255,0.7); margin-bottom: var(--space-4);">Licensed roofing contractor serving <?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?> and surrounding areas. Expert roof repair, replacement, and storm damage restoration.</p>

        <!-- Trust Badges -->
        <div class="footer-trust">
          <span class="trust-badge">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M8 10 V4 a1 1 0 0 1 1-1 h6 a1 1 0 0 1 1 1 v6" />
              <path d="M6 9h12l.5 11H5.5Z" />
            </svg>
            Licensed
          </span>
          <span class="trust-badge">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/>
            </svg>
            Insured
          </span>
          <span class="trust-badge">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275Z"/>
            </svg>
            Free Estimates
          </span>
        </div>
      </div>

      <!-- Column 2: Services -->
      <div class="footer-col">
        <h4>Services</h4>
        <ul>
          <?php
          $footerServices = array_slice($services, 0, 8);
          foreach ($footerServices as $service):
          ?>
            <li><a href="/services/<?php echo htmlspecialchars($service['slug']); ?>/"><?php echo htmlspecialchars($service['name']); ?></a></li>
          <?php endforeach; ?>
          <?php if (count($services) > 8): ?>
            <li><a href="/services/" style="font-weight: 600; color: var(--color-accent);">View All Services →</a></li>
          <?php endif; ?>
        </ul>
      </div>

      <!-- Column 3: Quick Links -->
      <div class="footer-col">
        <h4>Company</h4>
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/about/">About Us</a></li>
          <li><a href="/services/">Services</a></li>
          <li><a href="/contact/">Contact</a></li>
          <?php if (!empty($serviceAreas) && count($serviceAreas) > 0): ?>
            <li><a href="/service-areas/">Service Areas</a></li>
          <?php endif; ?>
        </ul>
      </div>

      <!-- Column 4: Contact Info -->
      <div class="footer-col">
        <h4>Contact</h4>
        <?php if (!empty($phone)): ?>
        <div class="contact-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/>
          </svg>
          <a href="tel:<?php echo htmlspecialchars($phone); ?>"><?php echo htmlspecialchars(formatPhone($phone)); ?></a>
        </div>
        <?php endif; ?>

        <?php if (!empty($email)): ?>
        <div class="contact-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"/>
            <rect x="2" y="4" width="20" height="16" rx="2"/>
          </svg>
          <a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a>
        </div>
        <?php endif; ?>

        <div class="contact-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/>
            <circle cx="12" cy="10" r="3"/>
          </svg>
          <span><?php echo htmlspecialchars($address['street']); ?><br><?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?> <?php echo htmlspecialchars($address['zip']); ?></span>
        </div>

        <div class="contact-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <circle cx="12" cy="12" r="10"/>
            <path d="M12 6v6l4 2"/>
          </svg>
          <span><?php echo htmlspecialchars($businessHours); ?></span>
        </div>

        <a href="/contact/" class="btn btn-accent" style="margin-top: var(--space-4); display: inline-flex;">Get Free Estimate</a>
      </div>
    </div>

    <!-- AEO Entity Block -->
    <div class="aeo-entity" itemscope itemtype="https://schema.org/LocalBusiness">
      <meta itemprop="name" content="<?php echo htmlspecialchars($siteName); ?>">
      <meta itemprop="url" content="<?php echo htmlspecialchars($siteUrl); ?>">
      <?php if (!empty($phone)): ?>
      <meta itemprop="telephone" content="<?php echo htmlspecialchars($phone); ?>">
      <?php endif; ?>

      <h4><?php echo htmlspecialchars($siteName); ?></h4>
      <p style="font-size: var(--font-size-sm); line-height: 1.7; color: rgba(255,255,255,0.7); margin: 0;">
        <?php echo htmlspecialchars($siteName); ?> is a licensed roofing contractor based in <?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?>, serving homeowners and businesses throughout the region. We specialize in roof repair, roof replacement, storm damage restoration, and emergency roofing services. With expert craftsmanship and <?php echo $yearsInBusiness > 1 ? $yearsInBusiness . ' years' : 'trusted'; ?> service, we protect your property with quality materials and reliable workmanship.
      </p>
    </div>

    <!-- Footer Legal Row (v6.1 REQUIRED) -->
    <div class="footer-legal-row">
      <a href="/privacy-policy/">Privacy Policy</a>
      <span class="footer-legal-divider">|</span>
      <a href="/terms/">Terms of Service</a>
      <span class="footer-legal-divider">|</span>
      <a href="/cookie-policy/">Cookie Policy</a>
      <span class="footer-legal-divider">|</span>
      <a href="/accessibility/">Accessibility</a>
      <span class="footer-legal-divider">|</span>
      <a href="/privacy-policy/#ccpa-rights">Do Not Sell or Share My Personal Information</a>
      <span class="footer-legal-divider">|</span>
      <a href="/sitemap.xml">Sitemap</a>
    </div>

    <!-- Footer Bottom Bar -->
    <div class="footer-bottom">
      <p>&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($siteName); ?>. All rights reserved.</p>
      <p class="footer-credit">
        <a href="https://pageoneinsights.com" rel="dofollow" target="_blank">Web Design &amp; Hosting by Page One Insights, LLC</a>
      </p>
    </div>
  </div>
</footer>

<!-- Back to Top Button -->
<button class="back-to-top" aria-label="Back to top">
  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="transform: rotate(-90deg);">
    <path d="m9 18 6-6-6-6"/>
  </svg>
</button>

<!-- Mobile Floating CTA Bar -->
<div class="mobile-cta-bar">
  <div style="display: flex; gap: var(--space-2);">
    <?php if (!empty($phone)): ?>
    <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn btn-accent" style="flex: 1;">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/>
      </svg>
      Call Now
    </a>
    <?php endif; ?>
    <a href="/contact/" class="btn btn-outline-white" style="flex: 1;">Free Estimate</a>
  </div>
</div>

<!-- JavaScript -->
<script src="/assets/js/main.js" defer></script>
<script src="/assets/js/animations.js" defer></script>

<!-- Inline Scripts -->
<script>
  // Back to Top
  const backToTop = document.querySelector('.back-to-top');
  window.addEventListener('scroll', () => {
    if (window.pageYOffset > 300) {
      backToTop.classList.add('visible');
    } else {
      backToTop.classList.remove('visible');
    }
  });
  backToTop.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });

  // Mobile Menu Toggle
  const hamburger = document.querySelector('.hamburger');
  const mobileMenu = document.querySelector('.mobile-menu');
  const navLinks = document.querySelector('.nav-links');

  hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    mobileMenu.classList.toggle('active');
    navLinks.classList.toggle('active');
    hamburger.setAttribute('aria-expanded', hamburger.classList.contains('active'));
    mobileMenu.setAttribute('aria-hidden', !hamburger.classList.contains('active'));
    document.body.style.overflow = hamburger.classList.contains('active') ? 'hidden' : '';
  });

  // Close mobile menu when clicking a link
  document.querySelectorAll('.mobile-menu a').forEach(link => {
    link.addEventListener('click', () => {
      hamburger.classList.remove('active');
      mobileMenu.classList.remove('active');
      navLinks.classList.remove('active');
      hamburger.setAttribute('aria-expanded', 'false');
      mobileMenu.setAttribute('aria-hidden', 'true');
      document.body.style.overflow = '';
    });
  });

  // Navbar Scroll Effect
  const header = document.querySelector('.site-header');
  window.addEventListener('scroll', () => {
    if (window.pageYOffset > 50) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  });

  // Desktop Dropdown Hover
  const navDropdown = document.querySelector('.nav-dropdown');
  if (navDropdown) {
    const dropdownMenu = navDropdown.querySelector('.nav-dropdown-menu');
    navDropdown.addEventListener('mouseenter', () => {
      dropdownMenu.style.display = 'block';
    });
    navDropdown.addEventListener('mouseleave', () => {
      dropdownMenu.style.display = 'none';
    });
  }
</script>

</body>
</html>
