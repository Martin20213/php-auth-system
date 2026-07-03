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
            return "Regisztráció sikeres.";
        }
        return "Felhasználó már létezik.";
    }

    public function login($email, $password)
    {
        $this->authService->login($email, $password);
        return "Bejelentkezés sikeres.";
    }

    public function changePassword($id, $newPassword)
    {
        if ($this->authService->changePassword($id, $newPassword)) {
            return "Jelszó módosítása sikeres.";
        }
        return "Nem sikerült módosítani a jelszót.";
    }

    public function logout()
    {
        $this->authService->logout();
        return "Kijelentkezés sikeres.";
    }
}