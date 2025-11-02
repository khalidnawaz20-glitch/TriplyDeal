<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$pageTitle = 'Sign Up - TriplyDeal';
require_once __DIR__ . '/header.php';
?>

<main class="auth-page">

  <h1>Create a TriplyDeal Account</h1>

  <section class="signup-form">
    <form action="/signup.php" method="post">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" placeholder="Your Name" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Your Email" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Your Password" required>

      <button type="submit" class="btn">Sign Up</button>
    </form>

    <p>Already have an account? <a href="/login.php">Login</a></p>
  </section>

</main>

<?php require_once __DIR__ . '/footer.php'; ?>
