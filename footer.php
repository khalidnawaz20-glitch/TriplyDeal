<?php
// footer.php
?>
<footer class="site-footer">
  <div class="container">
    <div class="footer-container">

      <div class="footer-col brand">
        <img src="/assets/images/logo.png" alt="TriplyDeal Logo" class="footer-logo">
        <p>Your smart way to book affordable flights &amp; hotels worldwide.</p>
      </div>

      <div class="footer-col">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="/search_results.php?type=flights">Flights</a></li>
          <li><a href="/search_results.php?type=hotels">Hotels</a></li>
          <li><a href="/packages.php">Packages</a></li>
          <li><a href="/deals.php">Deals</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Support</h4>
        <ul>
          <li><a href="/about.php">About Us</a></li>
          <li><a href="/contact.php">Contact</a></li>
          <li><a href="/terms.php">Terms & Conditions</a></li>
          <li><a href="/privacy.php">Privacy Policy</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Stay Updated</h4>
        <form class="newsletter-form" action="/subscribe.php" method="post">
          <input type="email" name="email" placeholder="Email address" required>
          <button type="submit" class="btn">Subscribe</button>
        </form>
        <div class="social-links">
          <a href="#"><span>Facebook</span></a>
          <a href="#"><span>Instagram</span></a>
          <a href="#"><span>Twitter</span></a>
          <a href="#"><span>LinkedIn</span></a>
        </div>
      </div>

    </div>

    <div class="footer-bottom">
      &copy; <?= date('Y') ?> TriplyDeal.com. All rights reserved.
      <small>Disclaimer: TriplyDeal partners with third-party travel providers. Prices and availability may change at any time.</small>
    </div>
  </div>
</footer>

<!-- Main JS -->
<script src="/assets/js/app.js?v=1.0"></script>
<script src="/assets/js/search.js"></script>
<script src="/assets/js/results.js"></script>
</body>
</html>
