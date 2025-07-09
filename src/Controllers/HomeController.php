<?php

namespace AlbumCollection\Controllers;

class HomeController
{
    public function show()
    {
        // fetching data from home page
        $stmt = $GLOBALS['pdo']->query("SELECT * FROM music");
        $albums = $stmt->fetchAll();
        require_once __DIR__ . '/../../views/home.php';
    }
}
