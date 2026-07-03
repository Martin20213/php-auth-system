<?php

require_once __DIR__ . '/../Exceptions/AuthenticationException.php';
require_once __DIR__ . '/../Exceptions/UserNotFoundException.php';

class AuthService
{
    private $userModel;

    public function __construct($db)
    {
        $this->userModel = new User($db);
    }

    public function register($name, $email, $password)
    {
        if ($this->userModel->findByEmail($email)) {
            return false; // User already exists
        }
        return $this->userModel->createUser($name, $email, $password);
    }

    public function login($email, $password)
    {
        $user = $this->userModel->findByEmail($email);

        if (!$user) {
            throw new UserNotFoundException('User does not exist.');
        }

        if (!password_verify($password, $user['password'])) {
            throw new AuthenticationException('Invalid credentials.');
        }

        $_SESSION['user_id'] = $user['id'];
        return $user;
    }

    public function changePassword($id, $newPassword)
    {
        return $this->userModel->changePassword($id, $newPassword);
    }

    public function isLoggedIn()
    {
        return isset($_SESSION['user_id']);
    }

    public function getCurrentUser()
    {
        if ($this->isLoggedIn()) {
            return $this->userModel->getUserById($_SESSION['user_id']);
        }

        return null;
    }
    public function logout()
    {
        unset($_SESSION['user_id']);
        session_destroy();
    }
}