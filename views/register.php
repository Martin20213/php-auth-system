<?php
if (!empty($_SESSION['flash'])) {
    echo '<div class="flash success">' . htmlspecialchars($_SESSION['flash']) . '</div>';
    unset($_SESSION['flash']);
}
?>
<h1>Regisztráció</h1>
<form method="post" action="register_process.php">
    <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars(csrf_token()); ?>">
    <div class="form-group">
        <label for="name">Név</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="password">Jelszó</label>
        <input type="password" id="password" name="password" required>
    </div>
    <button type="submit">Regisztráció</button>
</form>
<nav>
    <div class="auth-footer">
    <p>Már van fiókod? <a href="login.php" class="text-link">Lépj be</a></p>
</div>
</nav>
