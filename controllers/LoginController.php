<?php
class LoginController {
    public function showLoginForm() {
        require_once __DIR__ . '/../views/login.php';
    }

    public function login() {

    }

    public function logout() {
        session_destroy();
        header('Location: /login');
    }
}