<?php
if (!empty($_SESSION['flash'])) {
    echo '<div class="flash error">' . htmlspecialchars($_SESSION['flash']) . '</div>';
    unset($_SESSION['flash']);
}
?>
<h1>Bejelentkezés</h1>
<form method="post" action="login_process.php">
    <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars(csrf_token()); ?>">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="password">Jelszó</label>
        <input type="password" id="password" name="password" required>
    </div>
    <button type="submit">Bejelentkezés</button>
</form>
<nav>
    <div class="auth-footer">
    <p>Nincs még fiókod? <a href="register.php" class="text-link">Regisztrálj itt</a></p>
</div>
</nav>
