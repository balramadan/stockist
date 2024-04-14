<?php

namespace App\Controllers;

use App\Models\ModelUser;

class Register extends BaseController
{
    public function index()
    {
        helper(['form']);
        $data = [
            'judul' => 'Register'
        ];
        echo view('templates/header', $data);
        echo view('auth/register');
        echo view('templates/footer');
    }

    public function save()
    {
        helper(['form']);

        // rules
        $rules = [
            'name' => 'required|min_length[3]|max_length[20]',
            'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.user_email]',
            'password' => 'required|min_length[6]|max_length[200]',
            'confirm-password' => 'matches[password]'
        ];

        if($this->validate($rules)){
            $model = new ModelUser();
            $data = [
                'user_name' => $this->request->getVar('name'),
                'user_email' => $this->request->getVar('email'),
                'user_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ];

            $model->save($data);
            return redirect()->to(base_url('/login'));
        } else {
            $data['validation'] = $this->validator;
            $data['judul'] = "Register";
            
            echo view('templates/header', $data);
            echo view('auth/register', $data);
            echo view('templates/footer');
        }
    }
}
