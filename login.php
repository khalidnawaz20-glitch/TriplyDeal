<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$pageTitle = 'Login - TriplyDeal';
require_once __DIR__ . '/header.php';
?>

<main class="auth-page">

  <h1>Login to TriplyDeal</h1>

  <section class="login-form">
    <form action="/login.php" method="post">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Your Email" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Your Password" required>

      <button type="submit" class="btn">Login</button>
    </form>

    <p>Don't have an account? <a href="/signup.php">Sign Up</a></p>
  </section>

</main>

<?php require_once __DIR__ . '/footer.php'; ?>
