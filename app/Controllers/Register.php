<?php

namespace App\Controllers;

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
            'email' => 'required|min_length[6]|max_length[50]|valid_email',
            'password' => 'required|min_length[6]|max_length[200]',
            'confirm-password' => 'matches[password]'
        ];

        if ($this->validate($rules)) {
            $session = session();
            $client = \Config\Services::curlrequest();

            $data = [
                'user_name' => $this->request->getVar('name'),
                'user_email' => $this->request->getVar('email'),
                'user_password' => $this->request->getVar('password'),
            ];


            $r = $client->post('https://stockis.vercel.app/api/admin/register', [
                'json' => [
                    "email" => $data['user_email'],
                    "password" => $data['user_password'],
                    "name" => $data['user_name'],
                ],
            ]);
            
            // Get the status code
            $statusCode = $r->getStatusCode();
            $bollehh = $statusCode == 202;

            if ($bollehh) {
                $session->setFlashdata("msg", "success registered");
                return redirect()->to(base_url('/login'));
            } else {
                $session->setFlashdata("msg", "email found");
                return redirect()->to(base_url('/regadmin'));
            }
        } else {
            $data['validation'] = $this->validator;
            $data['judul'] = "Register";

            echo view('templates/header', $data);
            echo view('auth/register', $data);
            echo view('templates/footer');
        }
    }
}
