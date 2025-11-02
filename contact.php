<?php
// contact.php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$pageTitle = 'Contact Us - TriplyDeal';
require_once __DIR__ . '/header.php';
?>

<main class="container" style="padding: 20px;">
  <h1>Contact Us</h1>
  <p>Have questions or need help? Send us a message and we’ll get back to you as soon as possible.</p>

  <section class="contact-form-section">
    <form id="contact-form" action="contact_submit.php" method="post">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" placeholder="Your Name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Your Email" required>

      <label for="subject">Subject:</label>
      <input type="text" id="subject" name="subject" placeholder="Subject" required>

      <label for="message">Message:</label>
      <textarea id="message" name="message" rows="6" placeholder="Write your message here..." required></textarea>

      <button type="submit" class="btn">Send Message</button>
    </form>
  </section>

  <section class="contact-info" style="margin-top: 40px;">
    <h2>Our Office</h2>
    <p>Email: support@triplydeal.com</p>
    <p>Phone: +1-234-567-8900</p>
    <p>Address: 123 Travel Street, Your City, Your Country</p>
  </section>
</main>

<!-- Page-specific JS -->
<script src="assets/js/contact.js"></script>

<?php require_once __DIR__ . '/footer.php'; ?>
