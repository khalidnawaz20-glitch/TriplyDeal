<?php
// index.php - Home page for TriplyDeal
error_reporting(E_ALL);
ini_set('display_errors', 1);

$pageTitle = 'Home - TriplyDeal';
require_once __DIR__ . '/header.php';
?>

<main class="homepage">

  <!-- Hero / Search Section -->
  <section class="search-form">
    <h1>Search Flights & Hotels</h1>

    <!-- Flight Form -->
    <form id="flight-form" action="search_results.php" method="get">
      <input type="hidden" name="type" value="flights" />

      <div class="trip-type">
        <label><input type="radio" name="trip" value="oneway" checked> One-way</label>
        <label><input type="radio" name="trip" value="roundtrip"> Round-trip</label>
        <label><input type="radio" name="trip" value="multi"> Multi-city</label>
      </div>

      <div id="flight-legs">
        <div class="flight-leg">
          <input type="text" name="origin[]" placeholder="Origin (e.g., JFK)" required>
          <input type="text" name="destination[]" placeholder="Destination (e.g., LAX)" required>
          <input type="date" name="depart_date[]" required>
        </div>
      </div>

      <button type="button" id="add-leg" class="btn hidden">+ Add Leg</button>

      <div id="return-date" class="hidden">
        <label>Return:</label>
        <input type="date" name="return_date">
      </div>

      <label for="class">Class:</label>
      <select name="class" id="class">
        <option value="economy">Economy</option>
        <option value="business">Business</option>
        <option value="first">First Class</option>
      </select>

      <button type="submit" class="btn">Search Flights</button>
    </form>

    <!-- Hotel Form -->
    <form id="hotel-form" class="hidden" action="search_results.php" method="get">
      <input type="hidden" name="type" value="hotels">
      <input type="text" name="city" placeholder="City (e.g., New York)" required>
      <input type="date" name="checkin" required>
      <input type="date" name="checkout" required>
      <button type="submit" class="btn">Search Hotels</button>
    </form>

    <p class="toggle-link">
      <a href="#" id="toggle-search-type">Looking for hotels?</a>
    </p>
  </section>

  <!-- Banner Slider -->
  <section class="banner-slider">
    <div class="banner-slide">
      <img src="assets/images/banners/banner1.jpg" alt="Travel Banner 1">
    </div>
    <div class="banner-slide">
      <img src="assets/images/banners/banner2.jpg" alt="Travel Banner 2">
    </div>
    <div class="banner-slide">
      <img src="assets/images/banners/banner3.jpg" alt="Travel Banner 3">
    </div>
  </section>

  <!-- Promo Section -->
  <section class="promo">
    <h2>Why TriplyDeal.com?</h2>
    <ul>
      <li>🌍 Global coverage of flights and hotels</li>
      <li>💸 Transparent pricing with no hidden fees</li>
      <li>📅 Flexible multi-city planning</li>
      <li>📲 Mobile-friendly and easy to use</li>
    </ul>
  </section>

</main>

<?php require_once __DIR__ . '/footer.php'; ?>

<!-- External JS -->
<script src="assets/js/app.js"></script>
<script src="assets/js/search.js"></script>
<script src="assets/js/results.js"></script>

<!-- Banner Slider JS -->
<script>
document.addEventListener('DOMContentLoaded', () => {
  const slides = document.querySelectorAll('.banner-slide');
  let current = 0;
  
  if (slides.length > 0) {
    slides[current].classList.add('active');
  
    setInterval(() => {
      slides[current].classList.remove('active');
      current = (current + 1) % slides.length;
      slides[current].classList.add('active');
    }, 5000); // 5 seconds per slide
  }
});
</script>
