<?php

namespace App\Controllers;

use App\Models\ModelUser;

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

    public function admin()
    {
        $model = new ModelUser;
        $data = [
            'judul' => 'Admin List',
            'users' => $model->getUser(),
        ];

        echo view('templates/header', $data);
        echo view('admin/admin', $data);
        echo view('templates/footer');
    }
}