<?php

namespace App\Controllers;
use Exception;

class Profile extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Profile'
        ];

        echo view('templates/header', $data);
        echo view('profile/index');
        echo view('templates/footer');
    }

    public function Updated() {

        $session = session();
        $email = $this->request->getVar("editemail");
        $password = $this->request->getVar("editpassword");
        try {
            $client = \Config\Services::curlrequest();
            $r = $client->post('https://stockis.vercel.app/api/admin/up', [
                'json' => [
                    "email" => $email,
                    "password" => $password,
                    "old_email" => $session->get('user_email'),
                ],
            ]);
            // Get the status code
            $statusCode = $r->getStatusCode();
            
            $bolehhh = $statusCode == 202;
            // Output the response body and status code
        if ($bolehhh) {
            return redirect()->to('/logout');
        }
        else {
            $session->setFlashdata('msg', "failed login");
            return redirect()->to(base_url('/profile'));
        }
            }
            catch(Exception $e) {
                $session->setFlashdata('msg', "failed login");
                return redirect()->to(base_url('/profile'));
            }

        
    }
}
