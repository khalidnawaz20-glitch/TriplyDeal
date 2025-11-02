<?php
// about.php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$pageTitle = 'About Us - TriplyDeal';
require_once __DIR__ . '/header.php';
?>

<main class="container" style="padding: 20px;">
  <h1>About TriplyDeal</h1>
  <p>TriplyDeal is your ultimate travel comparison platform. We help travelers find the best deals on flights, hotels, and travel packages worldwide.</p>

  <section class="about-mission" style="margin-top: 30px;">
    <h2>Our Mission</h2>
    <p>Our mission is to make travel planning simple, transparent, and affordable. We partner with leading airlines, hotels, and travel providers to bring you the best prices and experiences.</p>
  </section>

  <section class="about-values" style="margin-top: 30px;">
    <h2>Our Values</h2>
    <ul>
      <li><strong>Transparency:</strong> We show real-time prices and options.</li>
      <li><strong>Convenience:</strong> One platform for flights, hotels, and packages.</li>
      <li><strong>Trust:</strong> We partner only with reputable travel providers.</li>
      <li><strong>User Experience:</strong> Mobile-friendly and easy-to-use design.</li>
    </ul>
  </section>

  <section class="about-team" style="margin-top: 30px;">
    <h2>Meet the Team</h2>
    <p>Our team is composed of travel enthusiasts, developers, and designers dedicated to making your travel planning seamless and enjoyable.</p>
  </section>
</main>

<?php require_once __DIR__ . '/footer.php'; ?>
