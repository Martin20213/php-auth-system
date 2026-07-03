<?php
if (!empty($_SESSION['flash'])) {
    echo '<div class="flash success">' . htmlspecialchars($_SESSION['flash']) . '</div>';
    unset($_SESSION['flash']);
}
?>
<h1>Kijelentkezés</h1>
<p>A munkamenet sikeresen befejeződött.</p>
<nav>
    <a class="button-link" href="login.php">Bejelentkezés</a>
</nav>
