<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$pageTitle = 'Contact Us - TriplyDeal';
require_once __DIR__ . '/header.php';
?>

<main class="contact-page">

  <h1>Contact TriplyDeal</h1>

  <section class="contact-form-section">
    <form action="/contact.php" method="post">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" placeholder="Your Name" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Your Email" required>

      <label for="message">Message</label>
      <textarea id="message" name="message" placeholder="Your Message" required></textarea>

      <button type="submit" class="btn">Send Message</button>
    </form>
  </section>

</main>

<?php require_once __DIR__ . '/footer.php'; ?>
