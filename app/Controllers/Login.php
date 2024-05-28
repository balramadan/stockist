<?php

namespace App\Controllers;


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
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $client = \Config\Services::curlrequest();
            $r = $client->post('https://stockis.vercel.app/api/admin/login', [
                'json' => [
                    "email" => $email,
                    "password" => $password,
                ],
            ]);
            // Get the status code
            $statusCode = $r->getStatusCode();
            $body = $r->getBody();
            $result = json_decode($body, true);
            
            $bolehhh = $statusCode == 202;
            
            // Output the response body and status code
        if ($bolehhh) {
            $ses_data = [
                'user_id' => $result['data']['user_id'],
                'user_name' => $result['data']['user_name'],
                'user_email' => $result['data']['user_email'],
                'user_job' => $result['data']['user_job'],
                'logged_in' => true
            ];
            $session->set($ses_data);
            return redirect()->to(base_url('/'));
        }
        else {
            $session->setFlashdata('msg', "failed login");
            return redirect()->to(base_url('/login'));
        }
    }

    public function logout()
    {
        $session = session();
        if(session()->get('logged_in')){
            $session->destroy();
            return redirect()->to(base_url('/login'));
        }
        else {
            $session->setFlashdata('msg', 'Please login first');
            return redirect()->to(base_url('/login'));
        }
    }
}
