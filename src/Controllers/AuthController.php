<?php

namespace AlbumCollection\Controllers;

class AuthController
{
    public function loginForm()
    {
        include __DIR__ . '/../../views/auth/login.php';
    }

    public function login()
    {
        $username = trim($_POST['username'] ?? '');
        $password = $_POST['password'] ?? '';

        // fetch user with given username
        $stmt = $GLOBALS['pdo']->prepare('SELECT * FROM users WHERE username = ? LIMIT 1');
        $stmt->execute([$username]);
        $user = $stmt->fetch();

        // check if user exists. If does redirect to homepage and store session
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user['id'];
            header('Location: /');
            exit;
        } else {
            $error = 'Invalid username or password';
            include __DIR__ . '/../../views/auth/login.php';
        }
    }
}
