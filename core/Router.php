<?php
namespace Core;

class Router {
    public function dispatch() {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri = str_replace('/ctut-restaurant', '', $uri);
        if ($uri === '' || $uri === '/') {
            require_once __DIR__ . '/../app/controllers/UserController.php';
            $controller = new \App\Controllers\UserController();
            $controller->home();
            return;
        }
        // Add more routing logic here
        require_once __DIR__ . '/../app/views/errors/404.php';
    }
}
