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

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$password = trim($_POST['password'] ?? '');

$authController = new AuthController($db);
$message = $authController->register($name, $email, $password);

if ($message === 'Regisztráció sikeres.' || $message === 'Felhasználó regisztrálva.') {
    $authController->login($email, $password);
    echo json_encode([
        'success'  => true,
        'message'  => 'Regisztráció sikeres. Most már be vagy jelentkezve.',
        'redirect' => 'dashboard.php',
    ]);
    exit();
}

http_response_code(422);
echo json_encode([
    'success' => false,
    'message' => $message,
]);
exit();