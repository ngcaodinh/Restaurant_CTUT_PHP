<?php
// Entry point for CTUT Restaurant
require_once __DIR__ . '/core/Router.php';
require_once __DIR__ . '/core/Session.php';

use Core\Router;

$router = new Router();
$router->dispatch();
//Cao Đỉnh test 
//MT
