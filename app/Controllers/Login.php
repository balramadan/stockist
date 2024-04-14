<?php

namespace App\Controllers;

use App\Models\ModelUser;

class Login extends BaseController
{
    public function index()
    {
        helper(['form']);
        $data = [
            'judul' => 'Login'
        ];
        
        echo view('templates/header', $data);
        echo view('auth/login');
        echo view('templates/footer');
    }

    public function auth()
    {
        $session = session();
        $model = new ModelUser();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('user_email', $email)->first();

        if($data){
            $pass = $data['user_password'];
            $verify_pass = password_verify($password, $pass);

            if($verify_pass){
                $ses_data = [
                    'user_id' => $data['user_id'],
                    'user_name' => $data['user_name'],
                    'user_email' => $data['user_email'],
                    'logged_in' => true
                ];
                $session->set($ses_data);
                return redirect()->to(base_url('/'));
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to(base_url('/login'));
            }
        } else {
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to(base_url('/login'));
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/login'));
    }
}