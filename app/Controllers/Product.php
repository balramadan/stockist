<?php

namespace App\Controllers;

class Product extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Product'
        ];
        echo view('templates/header', $data);
        echo view('admin/product');
        echo view('templates/footer');
    }
}