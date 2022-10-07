<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ProfileController extends Controller {
    public function index() {
        echo view('profile');
    }
}
