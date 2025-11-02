<?php
// deals.php - Deals Page
error_reporting(E_ALL);
ini_set('display_errors', 1);

$pageTitle = 'Deals - TriplyDeal';
require_once __DIR__ . '/header.php';
require_once __DIR__ . '/config.php';

// Placeholder deals
$deals = [
    [
        'title' => 'Flight Deal: JFK → Miami',
        'price' => 199,
        'type' => 'flight',
        'details' => 'Non-stop flight, 3h duration',
        'affiliate_link' => '#'
    ],
    [
        'title' => 'Hotel Deal: Grand NYC Hotel',
        'price' => 179,
        'type' => 'hotel',
        'details' => '4-star hotel, includes breakfast',
        'affiliate_link' => '#'
    ],
    [
        'title' => 'Package Deal: Hawaii Adventure',
        'price' => 1199,
        'type' => 'package',
        'details' => '7 nights + flights included',
        'affiliate_link' => '#'
    ],
];
?>

<main class="deals-page">
  <section class="page-header">
    <h1>Deals</h1>
    <p>Check out our best travel deals!</p>
  </section>

  <section class="deals-filters">
    <label for="deal-filter">Filter by Type:</label>
    <select id="deal-filter">
      <option value="all">All</option>
      <option value="flight">Flight</option>
      <option value="hotel">Hotel</option>
      <option value="package">Package</option>
    </select>

    <label for="deal-sort">Sort by Price:</label>
    <select id="deal-sort">
      <option value="asc">Low to High</option>
      <option value="desc">High to Low</option>
    </select>
  </section>

  <section id="deal-list" class="cards-container">
    <?php foreach ($deals as $deal) : ?>
        <div class="deal-card" data-price="<?php echo $deal['price']; ?>" data-type="<?php echo $deal['type']; ?>">
            <h3><?php echo $deal['title']; ?></h3>
            <p><?php echo $deal['details']; ?></p>
            <p class="price">$<?php echo $deal['price']; ?></p>
            <button class="btn deal-toggle">View Details</button>
            <div class="deal-details hidden">
                <ul>
                    <li>Type: <?php echo ucfirst($deal['type']); ?></li>
                    <li>Price: $<?php echo $deal['price']; ?></li>
                </ul>
                <a href="<?php echo $deal['affiliate_link']; ?>" class="btn affiliate-link" target="_blank">Book Now</a>
            </div>
        </div>
    <?php endforeach; ?>
  </section>
</main>

<?php require_once __DIR__ . '/footer.php'; ?>
<script src="assets/js/deals.js"></script>
