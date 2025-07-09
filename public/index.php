<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/connection.php';

use AlbumCollection\Router;

// Router instance for controllers.
$router = new Router();
$router->get('/', 'AlbumCollection\Controllers\HomeController@show');
$router->dispatch();
