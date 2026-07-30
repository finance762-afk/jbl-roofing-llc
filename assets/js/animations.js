/**
 * animations.js — Scroll reveal animations & stat counters
 * v6.1 — Fail-open animation system (visible if JS fails)
 */

// FIRST STATEMENT: Add js-anim class to enable reveal animations
document.documentElement.classList.add('js-anim');

(function() {
  'use strict';

  // Intersection Observer for scroll reveals
  if ('IntersectionObserver' in window) {
    const revealObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('revealed');
          revealObserver.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.15,
      rootMargin: '0px 0px -50px 0px'
    });

    // Observe all reveal elements
    document.querySelectorAll('[class*="reveal-"]').forEach(el => {
      revealObserver.observe(el);
    });
  }

  // Stat counter animation
  function animateCounter(element) {
    const target = parseInt(element.getAttribute('data-target'), 10);
    const duration = 2000; // 2 seconds
    const start = 0;
    const increment = target / (duration / 16); // 60fps
    let current = start;

    const timer = setInterval(() => {
      current += increment;
      if (current >= target) {
        element.textContent = target.toLocaleString();
        clearInterval(timer);
      } else {
        element.textContent = Math.floor(current).toLocaleString();
      }
    }, 16);
  }

  // Observe stat numbers
  if ('IntersectionObserver' in window) {
    const statObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          statObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });

    document.querySelectorAll('.stat-number[data-target]').forEach(stat => {
      statObserver.observe(stat);
    });
  }

  // Safety-net timeout: force reveal after 2s if still hidden
  setTimeout(() => {
    document.querySelectorAll('[class*="reveal-"]:not(.revealed)').forEach(el => {
      el.classList.add('revealed');
    });
  }, 2000);

})();
