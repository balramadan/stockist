<?php

namespace App\Controllers;

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
}
