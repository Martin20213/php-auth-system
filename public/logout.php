<?php

require_once __DIR__ . '/bootstrap.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: login.php');
    exit();
}

$csrfToken = $_POST['csrf_token'] ?? '';
if (!verify_csrf_token($csrfToken)) {
    $_SESSION['flash'] = 'Érvénytelen űrlap beküldés.';
    header('Location: login.php');
    exit();
}

$authController = new AuthController($db);
$authController->logout();
$_SESSION['flash'] = 'A munkamenet sikeresen befejeződött.';
header('Location: logout.php');
exit();