<?php
namespace App\Middleware;

class AuthMiddleware {
    public static function handle() {
        if (!isset($_SESSION['user'])) {
            header('Location: /ctut-restaurant/auth/login');
            exit;
        }
    }
}
