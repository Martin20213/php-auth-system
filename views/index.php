<?php
if (!empty($_SESSION['flash'])) {
    echo '<div class="flash success">' . htmlspecialchars($_SESSION['flash']) . '</div>';
    unset($_SESSION['flash']);
}
?>
<h1>Welcome</h1>
<p>Use the buttons below to sign in or register a new account.</p>
<nav>
    <a class="button-link" href="login.php">Login</a>
    <a class="button-link" href="register.php">Register</a>
</nav>
<p class="footer-text">Simple PHP auth system with jQuery, HTML5, and CSS.</p>
