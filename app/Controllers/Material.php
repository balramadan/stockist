<?php

namespace App\Controllers;

class Material extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Bahan'
        ];

        echo view('templates/header', $data);
        echo view('admin/material');
        echo view('templates/footer');
    }

    public function edit($editMaterial = null)
    {
        $data['judul'] = 'Edit';
        $data['id'] = $editMaterial;
        echo view('templates/header', $data);
        echo view('admin/edit_material', $data);
        echo view('templates/footer');
    }

}
