<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class LoginController extends Controller {
    public function index() {
        echo view('login');
    }

    public function login() {
        $session = session();
        $userModel = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $userData = $userModel->where('email', $email)->first();

        if($userData) {
            $passwordHash = $userData['password'];
            $passwordAuthentication = password_verify($password, $passwordHash);
        
            if($passwordAuthentication) {
                $sessionData = [
                    'id'           => $userData['id'],
                    'name'         => $userData['name'],
                    'email'        => $userData['email'],
                    'isLoggedIn' => TRUE
                ];

                $session->set($sessionData);

                return redirect()->to('/profile');
            } else {
                $session->setFlashdata('msg', 'The password is incorrect.');

                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'This email does not exist.');

            return redirect()->to('/login');
        }
    }
}
