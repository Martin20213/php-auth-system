<?php
if (!empty($_SESSION['flash'])) {
    echo '<div class="flash success">' . htmlspecialchars($_SESSION['flash']) . '</div>';
    unset($_SESSION['flash']);
}
?>
<h1>Regisztráció</h1>

<div id="flash-container"></div>

<form method="post" action="register_process.php" id="register-form" class="ajax-form">
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

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
$(function () {
    $('#register-form').on('submit', function (e) {
        e.preventDefault();

        const $form = $(this);
        const $button = $form.find('button[type="submit"]');
        const originalText = $button.text();
        const $flash = $('#flash-container');

        $flash.empty();
        $button.prop('disabled', true).text('Betöltés...');

        $.ajax({
            url: $form.attr('action'),
            method: 'POST',
            data: $form.serialize(),
            dataType: 'json'
        })
        .done(function (response) {
            if (response.success) {
                window.location.href = response.redirect || 'dashboard.php';
            } else {
                $flash.html('<div class="flash error">' + $('<div>').text(response.message).html() + '</div>');
                $button.prop('disabled', false).text(originalText);
            }
        })
        .fail(function (xhr) {
            let message = 'Váratlan hiba történt. Próbáld újra.';
            if (xhr.responseJSON && xhr.responseJSON.message) {
                message = xhr.responseJSON.message;
            }
            $flash.html('<div class="flash error">' + $('<div>').text(message).html() + '</div>');
            $button.prop('disabled', false).text(originalText);
        });
    });
});
</script>