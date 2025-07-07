<?php
namespace App\Controllers;

class UserController extends BaseController {
    public function home() {
        $this->render('user/home');
    }
}
