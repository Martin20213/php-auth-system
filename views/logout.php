<?php
if (!empty($_SESSION['flash'])) {
    echo '<div class="flash success">' . htmlspecialchars($_SESSION['flash']) . '</div>';
    unset($_SESSION['flash']);
}
?>
<h1>Signed out</h1>
<p>Your session has ended successfully.</p>
<nav>
    <a class="button-link" href="login.php">Login again</a>
</nav>
