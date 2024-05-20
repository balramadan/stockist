<?php

namespace App\Controllers;

use App\Models\ModelUser;

class Dashboard extends BaseController
{
    public function index()
    {
        if(!session()->get('logged_in')){
            echo "Login required";
            return redirect()->to(base_url('/login'));
        }
        $data = [
            'judul' => 'Dashboard'
        ];
        echo view('templates/header', $data);
        echo view('admin/dashboard');
        echo view('templates/footer');
    }

    public function admin()
    {
        if(!session()->get('logged_in')){
            echo "Login required";
            return redirect()->to(base_url('/login'));
        }

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://stockis.vercel.app/api/admin',
            CURLOPT_RETURNTRANSFER => true
        ]);

        $response = curl_exec($curl);
        curl_close($curl);
        $data = json_decode($response, true);
        $res = $data['data'];
        $data = [
            'judul' => 'Admin List',
            'users' => $res
        ];

        echo view('templates/header', $data);
        echo view('admin/admin', $data);
        echo view('templates/footer');
    }
}