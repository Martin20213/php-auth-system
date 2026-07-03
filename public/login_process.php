<?php

require_once __DIR__ . '/bootstrap.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: login.php');
    exit();
}

$email = trim($_POST['email'] ?? '');
$password = trim($_POST['password'] ?? '');

$authController = new AuthController($db);

try {
    $authController->login($email, $password);
    $_SESSION['flash'] = 'Login successful.';
    header('Location: dashboard.php');
    exit();
} catch (AuthenticationException $ex) {
    $_SESSION['flash'] = $ex->getMessage();
    header('Location: login.php');
    exit();
}
