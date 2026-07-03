<?php

require_once __DIR__ . '/bootstrap.php';

$dashboardController = new DashboardController($db);
$user = $dashboardController->showDashboard();
$view = __DIR__ . '/../views/dashboard.php';
include __DIR__ . '/../views/layout.php';