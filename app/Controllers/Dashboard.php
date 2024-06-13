<?php

namespace App\Controllers;

use App\Models\ModelUser;

class Dashboard extends BaseController
{
    public function index()
    {
        $session = session();
        if (!session()->get('logged_in')) {
            echo "Login required";
            return redirect()->to(base_url('/login'));
        }


        $res = session()->get('product');
        $banyak = [];
        $dikit = [];
        $non = [];

        foreach ($res as $item) {
            if ($item['amount'] >= 10) {
                $banyak[] = $item;
            } else if ($item['amount'] < 10 && $item['amount'] > 0) {
                $dikit[] = $item;
            } else {
                $non[] = $item;
            }
        }

        $cou = count($banyak);
        $cou2 = count($dikit);
        $cou3 = count($non);

        $data = [
            'judul' => 'Dashboard',
            'banyak' => $cou,
            'dikit' => $cou2,
            'non' => $cou3,
            'dikitproduct' => $dikit
        ];
        echo view('templates/header', $data);
        echo view('admin/dashboard', $data);
        echo view('templates/footer');
    }

    public function admin()
    {
        if (!session()->get('logged_in')) {
            echo "Login required";
            return redirect()->to(base_url('/login'));
        }
        
        if (session()->has("admin")) {
            $res = session()->get('admin');
            $data = [
                'judul' => 'Admin List',
                'users' => $res
            ];
    
            echo view('templates/header', $data);
            echo view('admin/admin', $data);
            echo view('templates/footer');
        }
        else {
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
}
