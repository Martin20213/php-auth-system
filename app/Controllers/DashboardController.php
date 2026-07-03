<?php

class DashboardController
{
    private $authService;

    public function __construct($db)
    {
        $this->authService = new AuthService($db);
    }

    public function showDashboard()
    {
        if (!$this->authService->isLoggedIn()) {
            header("Location: login.php");
            exit();
        }

        return $this->authService->getCurrentUser();
    }
}