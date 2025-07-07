<?php
namespace App\Middleware;

class AdminMiddleware {
    public static function handle() {
        if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
            header('Location: /ctut-restaurant');
            exit;
        }
    }
}
