<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class SignUpController extends Controller {
    public function index() {
        echo view('signup');
    }
}