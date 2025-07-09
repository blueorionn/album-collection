<?php

namespace AlbumCollection\Controllers;

class HomeController
{
    public function show()
    {
        // If not logged in redirect to login page
        if (!isset($_SESSION['user'])) {
            header('Location: /auth/login');
            exit;
        }

        // fetching data from home page
        $stmt = $GLOBALS['pdo']->query("SELECT * FROM music");
        $albums = $stmt->fetchAll();
        include __DIR__ . '/../../views/home.php';
    }
}
