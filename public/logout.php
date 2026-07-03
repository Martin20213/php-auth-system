<?php

require_once __DIR__ . '/bootstrap.php';

$authController = new AuthController($db);
$authController->logout();
$_SESSION['flash'] = 'You have been logged out.';
header('Location: login.php');
exit();