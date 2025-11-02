// ===========================
// TriplyDeal - app.js
// Global JS for site
// ===========================

document.addEventListener('DOMContentLoaded', () => {
  // --- Mobile Menu Toggle ---
  const menuToggle = document.getElementById('menu-toggle');
  const navMenu = document.getElementById('nav-menu');

  if (menuToggle && navMenu) {
    menuToggle.addEventListener('click', () => {
      navMenu.classList.toggle('open');
    });
  }

  // --- Dark Mode Toggle ---
  const darkModeToggle = document.getElementById('dark-mode-toggle');

  if (darkModeToggle) {
    // Load preference from localStorage
    if (localStorage.getItem('darkMode') === 'enabled') {
      document.body.classList.add('dark-mode');
    }

    darkModeToggle.addEventListener('click', () => {
      document.body.classList.toggle('dark-mode');

      // Save preference
      if (document.body.classList.contains('dark-mode')) {
        localStorage.setItem('darkMode', 'enabled');
      } else {
        localStorage.setItem('darkMode', 'disabled');
      }
    });
  }

  // --- Back to Top Button ---
  const backToTop = document.getElementById('back-to-top');

  if (backToTop) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 300) {
        backToTop.classList.add('visible');
      } else {
        backToTop.classList.remove('visible');
      }
    });

    backToTop.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  // --- Expandable Cards (Global for any page) ---
  const toggleButtons = document.querySelectorAll('.result-toggle, .package-toggle, .deal-toggle');

  toggleButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      const card = btn.closest('.result-card, .package-card, .deal-card');
      const details = card.querySelector('.result-details, .package-details, .deal-details');
      if (details) {
        details.classList.toggle('hidden');
        card.classList.toggle('expanded');
      }
    });
  });
});
