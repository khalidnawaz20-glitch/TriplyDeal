<?php
// search_results.php - Search Results Page
error_reporting(E_ALL);
ini_set('display_errors', 1);

$pageTitle = 'Search Results - TriplyDeal';
require_once __DIR__ . '/header.php';
require_once __DIR__ . '/config.php'; // for future API keys

$type = $_GET['type'] ?? 'flights';

// Placeholder data for flights
$flightResults = [
    [
        'title' => 'Flight: JFK → LAX',
        'description' => 'Non-stop flight with Airline A',
        'price' => 299,
        'details' => 'Departure: 10:00 AM, Arrival: 1:00 PM, Duration: 6h',
        'affiliate_link' => '#'
    ],
    [
        'title' => 'Flight: JFK → SFO',
        'description' => '1 stop with Airline B',
        'price' => 349,
        'details' => 'Departure: 11:00 AM, Arrival: 3:00 PM, Duration: 7h',
        'affiliate_link' => '#'
    ],
];

// Placeholder data for hotels
$hotelResults = [
    [
        'title' => 'Grand NYC Hotel',
        'description' => '4-star hotel in Manhattan',
        'price' => 199,
        'stars' => '4',
        'affiliate_link' => '#'
    ],
    [
        'title' => 'Luxury LA Hotel',
        'description' => '5-star hotel near Hollywood',
        'price' => 299,
        'stars' => '5',
        'affiliate_link' => '#'
    ],
];

// Choose results based on search type
$results = $type === 'hotels' ? $hotelResults : $flightResults;
?>

<main class="search-results-page">
  <section class="page-header">
    <h1><?php echo $type === 'hotels' ? 'Hotel Search Results' : 'Flight Search Results'; ?></h1>
    <p>Find the best options for your trip.</p>
  </section>

  <section class="results-filters">
    <label for="results-sort">Sort by Price:</label>
    <select id="results-sort">
      <option value="asc">Low to High</option>
      <option value="desc">High to Low</option>
    </select>

    <?php if ($type === 'hotels') : ?>
      <label for="results-stars">Filter by Stars:</label>
      <select id="results-stars">
        <option value="all">All</option>
        <option value="5">5 Stars</option>
        <option value="4">4 Stars</option>
        <option value="3">3 Stars</option>
      </select>
    <?php endif; ?>
  </section>

  <section id="results-list" class="cards-container">
    <?php foreach ($results as $res) : ?>
        <div class="result-card" 
             data-price="<?php echo $res['price']; ?>" 
             data-stars="<?php echo $res['stars'] ?? ''; ?>">
            <h3><?php echo $res['title']; ?></h3>
            <p><?php echo $res['description']; ?></p>
            <p class="price">$<?php echo $res['price']; ?></p>
            <button class="btn result-toggle">View Details</button>
            <div class="result-details hidden">
                <ul>
                    <li><?php echo $res['details'] ?? 'Details not available'; ?></li>
                </ul>
                <a href="<?php echo $res['affiliate_link']; ?>" class="btn affiliate-link" target="_blank">Book Now</a>
            </div>
        </div>
    <?php endforeach; ?>
  </section>
</main>

<?php require_once __DIR__ . '/footer.php'; ?>
<script src="assets/js/results.js"></script>
