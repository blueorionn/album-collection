<?php

namespace AlbumCollection;

class Router
{
    // Private property to store all registered routes.
    private $routes = ['GET' => [], 'POST' => []];

    /**
     * Registers a GET route.
     *
     * @param string $uri     The URI (e.g., '/', '/about', '/products').
     * @param string $handler A string in the format "ClassName@methodName"
     * that will handle this route.
     */
    public function get($uri, $hadler)
    {
        // Adds the given URI and handler to the 'GET' part of the $routes array.
        // Example: $this->routes['GET']['/'] = 'HomeController@index';
        $this->routes['GET'][$uri] = $hadler;
    }

    /**
     * Registers a POST route.
     *
     * @param string $uri     The URI (e.g., '/', '/about', '/products').
     * @param string $handler A string in the format "ClassName@methodName"
     * that will handle this route.
     */
    public function post($uri, $handler)
    {
        // Adds the given URI and handler to the 'POST' part of the $routes array.
        // Example: $this->routes['POST']['/login'] = 'AuthController@login';
        $this->routes['POST'][$uri] = $handler;
    }

    /**
     * Dispatches the incoming request to the appropriate handler.
     */
    public function dispatch()
    {
        // Get the requested URI (path part only)
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        // Get the HTTP request method (e.g., 'GET', 'POST', 'PUT', 'DELETE')
        $method = $_SERVER['REQUEST_METHOD'];

        // Find the handler for the current URI and method.
        $handler = $this->routes[$method][$uri] ?? null;

        // If handler not found throw error
        if (!$handler) {
            http_response_code(404);
            include __DIR__ . '/../views/handlers/404.php';
            return;
        }

        // Execute the handler. 
        // The $handler is expected to be a string like "ControllerName@methodName".
        [$class, $method] = explode('@', $handler);

        // call_user_func is a PHP function that calls a given callback function/method.
        // It takes an array as the first argument for object methods: [object, 'methodName'].
        // 'new $class' dynamically creates an instance of the class whose name is stored in $class.
        // So, if $class is 'HomeController' and $method is 'index', it's effectively doing:
        // (new HomeController())->index();
        call_user_func([new $class, $method]);
    }
}
