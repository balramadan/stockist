<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Dashboard'
        ];
        echo view('templates/header', $data);
        echo view('admin/dashboard');
        echo view('templates/footer');
    }
}