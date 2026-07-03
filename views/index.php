<?php
if (!empty($_SESSION['flash'])) {
    echo '<div class="flash success">' . htmlspecialchars($_SESSION['flash']) . '</div>';
    unset($_SESSION['flash']);
}
?>
<h1>Üdvözöljük!</h1>
<p>Használja az alábbi gombokat a bejelentkezéshez vagy új fiók regisztrálásához.</p>
<nav>
    <a class="button-link" href="login.php">Bejelentkezés</a>
    <a class="button-link" href="register.php">Regisztráció</a>
</nav>
<p class="footer-text">Egyszerű PHP authentikációs rendszer jQuery, HTML5 és CSS használatával.</p>
