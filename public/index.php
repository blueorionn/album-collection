<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/connection.php';

use AlbumCollection\Router;

// start the session
session_start();

// Router instance for controllers.
$router = new Router();
$router->get('/', 'AlbumCollection\Controllers\HomeController@show');
$router->get('/auth/login', 'AlbumCollection\Controllers\AuthController@loginForm');
$router->post('/auth/login', 'AlbumCollection\Controllers\AuthController@login');
$router->dispatch();
