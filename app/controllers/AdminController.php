<?php
namespace App\Controllers;

class AdminController extends BaseController {
    public function dashboard() {
        $this->render('admin/dashboard');
    }
}
