<?php

require_once __DIR__ . '/bootstrap.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: register.php');
    exit();
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$password = trim($_POST['password'] ?? '');

$authController = new AuthController($db);
$message = $authController->register($name, $email, $password);

if ($message === 'User registered successfully.') {
    // Automatically log in the user after successful registration.
    $authController->login($email, $password);
    $_SESSION['flash'] = 'Registration successful. You are now logged in.';
    header('Location: dashboard.php');
    exit();
}

$_SESSION['flash'] = $message;
header('Location: register.php');
exit();
