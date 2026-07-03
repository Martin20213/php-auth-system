<?php
if (!empty($_SESSION['flash'])) {
    echo '<div class="flash success">' . htmlspecialchars($_SESSION['flash']) . '</div>';
    unset($_SESSION['flash']);
}
?>
<h1>Welcome, <?php echo htmlspecialchars($user['name']); ?>!</h1>
<p>You are logged in with <?php echo htmlspecialchars($user['email']); ?>.</p>
<nav>
    <a class="button-link" href="logout.php">Logout</a>
</nav>