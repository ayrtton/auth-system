<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class SignUpController extends Controller {
    public function index() {
        helper(['form']);

        $data = [];

        echo view('signup', $data);
    }

    public function store() {
        helper(['form']);
        
        $rules = [
            'name'             => 'required|min_length[3]|max_length[30]',
            'email'            => 'required|min_length[8]|max_length[20]|valid_email|is_unique[users.email]',
            'password'         => 'required|min_length[8]|max_length[20]',
            'confirmpassword'  => 'matches[password]'
        ];

        if($this->validate($rules)) {
            $userModel = new UserModel();
            $data = [
                'name'     => $this->request->getVar('name'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $userModel->save($data);

            return redirect()->to('/login');
        } else{
            $data['validation'] = $this->validator;
            
            echo view('signup', $data);
        }
    }
}