<?php

require_once __DIR__ . '/bootstrap.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Érvénytelen kérés.']);
    exit();
}

$csrfToken = $_POST['csrf_token'] ?? '';
if (!verify_csrf_token($csrfToken)) {
    http_response_code(419);
    echo json_encode(['success' => false, 'message' => 'Érvénytelen űrlap beküldés.']);
    exit();
}

$email = trim($_POST['email'] ?? '');
$password = trim($_POST['password'] ?? '');

$authController = new AuthController($db);

try {
    $authController->login($email, $password);
    echo json_encode([
        'success'  => true,
        'message'  => 'Bejelentkezés sikeres.',
        'redirect' => 'dashboard.php',
    ]);
    exit();
} catch (AuthenticationException $ex) {
    http_response_code(401);
    echo json_encode([
        'success' => false,
        'message' => $ex->getMessage(),
    ]);
    exit();
}