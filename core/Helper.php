<?php
namespace Core;

class Helper {
    public static function redirect($url) {
        header('Location: ' . $url);
        exit;
    }
}
