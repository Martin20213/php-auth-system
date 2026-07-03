<?php
if (!empty($_SESSION['flash'])) {
    echo '<div class="flash error">' . htmlspecialchars($_SESSION['flash']) . '</div>';
    unset($_SESSION['flash']);
}
?>
<h1>Login</h1>
<form method="post" action="login_process.php">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
    </div>
    <button type="submit">Login</button>
</form>
<nav>
    <a class="button-link" href="register.php">Register instead</a>
</nav>
