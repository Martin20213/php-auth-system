<?php

class AuthController
{
    private $authService;

    public function __construct($db)
    {
        $this->authService = new AuthService($db);
    }

    public function register($name, $email, $password)
    {
        if ($this->authService->register($name, $email, $password)) {
            return "User registered successfully.";
        }
        return "User already exists.";
    }

    public function login($email, $password)
    {
        $this->authService->login($email, $password);
        return "Login successful.";
    }

    public function changePassword($id, $newPassword)
    {
        if ($this->authService->changePassword($id, $newPassword)) {
            return "Password changed successfully.";
        }
        return "Failed to change password.";
    }

    public function logout()
    {
        $this->authService->logout();
        return "Logged out successfully.";
    }
}