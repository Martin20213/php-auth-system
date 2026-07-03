<?php
if (!empty($_SESSION['flash'])) {
    echo '<div class="flash success">' . htmlspecialchars($_SESSION['flash']) . '</div>';
    unset($_SESSION['flash']);
}
?>
<h1>Üdvözöllek, <?php echo htmlspecialchars($user['name']); ?>!</h1>
<p>Bejelentkezve: <?php echo htmlspecialchars($user['email']); ?>.</p>
<nav>
    <a class="logout-link" href="logout.php">Kijelentkezés</a>
</nav>