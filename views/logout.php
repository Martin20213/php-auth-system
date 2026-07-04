<?php
if (!empty($_SESSION['flash'])) {
    echo '<div class="flash success">' . htmlspecialchars($_SESSION['flash']) . '</div>';
    unset($_SESSION['flash']);
}
?>
<h1>Kijelentkezés</h1>
<p>A munkamenet sikeresen befejeződött.</p>
<form method="post" action="logout.php" id="logout-form" style="display:inline;">
    <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars(csrf_token()); ?>">
    <button type="submit" class="button-link">Kijelentkezés</button>
</form>
