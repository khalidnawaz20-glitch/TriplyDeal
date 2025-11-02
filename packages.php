<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$pageTitle = 'Travel Packages - TriplyDeal';
require_once __DIR__ . '/header.php';
?>

<main class="packages-page">

  <h1>Our Travel Packages</h1>
  <section class="packages-list">
    <div class="package">
      <img src="/assets/images/packages/package1.jpg" alt="Tropical Paradise Package">
      <h2>Tropical Paradise</h2>
      <p>5 nights in Maldives with flights included. Starting at $1,200 per person.</p>
      <a href="/packages.php#book" class="btn">Book Now</a>
    </div>
    <div class="package">
      <img src="/assets/images/packages/package2.jpg" alt="European Explorer Package">
      <h2>European Explorer</h2>
      <p>10-day tour across major European cities. Starting at $2,500 per person.</p>
      <a href="/packages.php#book" class="btn">Book Now</a>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/footer.php'; ?>
