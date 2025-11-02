<?php
// header.php
if (!headers_sent()) {
    header('Content-Type: text/html; charset=UTF-8');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= isset($pageTitle) ? htmlspecialchars($pageTitle) : 'TriplyDeal' ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="TriplyDeal - Compare flights, hotels, and travel deals worldwide. Find the best prices and plan your trip easily.">

  <!-- Main CSS -->
  <link rel="stylesheet" href="assets/css/style.css?v=1.0">

  <!-- Favicon -->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
</head>
<body>

<header class="site-header">
  <div class="container">
    <a href="index.php" class="logo">
      <img src="assets/images/logo.png" alt="TriplyDeal Logo" class="logo-img">
      <span>TriplyDeal</span>
    </a>

    <nav class="main-nav" id="mainNav" aria-label="Primary Navigation">
      <ul>
        <li><a href="search_results.php?type=flights">Flights</a></li>
        <li><a href="search_results.php?type=hotels">Hotels</a></li>
        <li><a href="packages.php">Packages</a></li>
        <li><a href="deals.php">Deals</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>

    <div class="header-actions">
      <a href="login.php" class="btn login-btn">Login</a>
      <a href="signup.php" class="btn signup-btn">Sign Up</a>
    </div>

    <button class="menu-toggle" aria-label="Toggle navigation menu">&#9776;</button>
    <button id="dark-mode-toggle" class="dark-toggle" aria-label="Toggle dark mode">&#x1F319;</button>
  </div>
</header>
