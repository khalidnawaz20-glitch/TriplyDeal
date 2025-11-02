<?php
// packages.php - Packages Page
error_reporting(E_ALL);
ini_set('display_errors', 1);

$pageTitle = 'Packages - TriplyDeal';
require_once __DIR__ . '/header.php';
require_once __DIR__ . '/config.php';

// Placeholder packages
$packages = [
    [
        'title' => 'New York Weekend Package',
        'description' => '2 nights + flight included',
        'price' => 499,
        'category' => 'city',
        'affiliate_link' => '#'
    ],
    [
        'title' => 'Hawaii Adventure',
        'description' => '7 nights + flight included',
        'price' => 1299,
        'category' => 'beach',
        'affiliate_link' => '#'
    ],
    [
        'title' => 'European Explorer',
        'description' => '10 nights + flights included',
        'price' => 2299,
        'category' => 'adventure',
        'affiliate_link' => '#'
    ],
];
?>

<main class="packages-page">
  <section class="page-header">
    <h1>Packages</h1>
    <p>Explore our exclusive travel packages!</p>
  </section>

  <section class="packages-filters">
    <label for="package-filter">Filter by Category:</label>
    <select id="package-filter">
      <option value="all">All</option>
      <option value="city">City</option>
      <option value="beach">Beach</option>
      <option value="adventure">Adventure</option>
    </select>

    <label for="package-sort">Sort by Price:</label>
    <select id="package-sort">
      <option value="asc">Low to High</option>
      <option value="desc">High to Low</option>
    </select>
  </section>

  <section id="package-list" class="cards-container">
    <?php foreach ($packages as $pkg) : ?>
        <div class="package-card" data-price="<?php echo $pkg['price']; ?>" data-category="<?php echo $pkg['category']; ?>">
            <h3><?php echo $pkg['title']; ?></h3>
            <p><?php echo $pkg['description']; ?></p>
            <p class="price">$<?php echo $pkg['price']; ?></p>
            <button class="btn package-toggle">View Details</button>
            <div class="package-details hidden">
                <ul>
                    <li>Category: <?php echo $pkg['category']; ?></li>
                    <li>Price: $<?php echo $pkg['price']; ?></li>
                </ul>
                <a href="<?php echo $pkg['affiliate_link']; ?>" class="btn affiliate-link" target="_blank">Book Now</a>
            </div>
        </div>
    <?php endforeach; ?>
  </section>
</main>

<?php require_once __DIR__ . '/footer.php'; ?>
<script src="assets/js/packages.js"></script>
