<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$pageTitle = 'Special Deals - TriplyDeal';
require_once __DIR__ . '/header.php';
?>

<main class="deals-page">

  <h1>Latest Travel Deals</h1>
  <section class="deals-list">
    <div class="deal">
      <img src="/assets/images/deals/deal1.jpg" alt="Flight Deal to New York">
      <h2>Flight to New York</h2>
      <p>Round-trip from JFK to NYC starting at $299. Limited seats!</p>
      <a href="/search_results.php?type=flights" class="btn">Book Now</a>
    </div>
    <div class="deal">
      <img src="/assets/images/deals/deal2.jpg" alt="Hotel Deal in Paris">
      <h2>Hotel in Paris</h2>
      <p>3-night stay in central Paris starting at $199 per night.</p>
      <a href="/search_results.php?type=hotels" class="btn">Book Now</a>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/footer.php'; ?>
