<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ProfileController extends Controller {
    public function index() {
        $name = session()->get('name');
        $message =  'Welcome, %s!';

        echo sprintf($message, $name);
    }
}
