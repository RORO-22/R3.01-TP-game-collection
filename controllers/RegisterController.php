<?php
class RegisterController {
    public function showRegisterForm() {
        require_once __DIR__ . '/../views/register.php';
    }

    public function register() {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConfirmation = $_POST['password-confirmation'];

        if ($password !== $passwordConfirmation) {
            echo 'Les mots de passe ne correspondent pas';
            return;
        }

        $user = new User();
        $user->setEmail($email);
        $user->setPassword(password_hash($password, PASSWORD_DEFAULT));
        $user->save();

        header('Location: /login');
    }
}