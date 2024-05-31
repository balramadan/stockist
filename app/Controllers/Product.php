<?php

namespace App\Controllers;

use GuzzleHttp\Client;

class Product extends BaseController
{

    public function index()
    {
        if (!session()->get('logged_in')) {
            echo "Login required";
            return redirect()->to(base_url('/login'));
        }

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://stockis.vercel.app/api/product',
            CURLOPT_RETURNTRANSFER => true
        ]);

        $response = curl_exec($curl);
        curl_close($curl);
        $data = json_decode($response, true);
        $res = $data['data'];

        $active = [];
        $non = [];

        foreach ($res as $item) {
            if ($item['active'] != 'true') {
                $non[] = $item;
            } else {
                $active[] = $item;
            }
        }

        $data = [
            'judul' => 'Produk',
            'products' => $non,
            'products_active' => $active,
        ];
        echo view('templates/header', $data);
        echo view('admin/product', $data);
        echo view('templates/footer');
    }

    public function edit($editProduct = null)
    {
        if (!session()->get('logged_in')) {
            echo "Login required";
            return redirect()->to(base_url('/login'));
        }
        $client = \Config\Services::curlrequest();
        $r = $client->post('https://stockis.vercel.app/api/products', [
            'json' => [
                "uuid" => $editProduct
            ],
        ]);
        // Get the status code
        $statusCode = $r->getStatusCode();
        $bollehh = $statusCode == 202;
        $body = $r->getBody();

        $data = json_decode($body, true);

        $reuslt = $data['data'];
        $data['judul'] = 'Edit';
        $data['id'] = $editProduct;
        $data['product'] = $reuslt;
        echo view('templates/header', $data);
        echo view('admin/edit_product', $data);
        echo view('templates/footer');
    }

    public function update() {
        if (!session()->get('logged_in')) {
            echo "Login required";
            return redirect()->to(base_url('/login'));
        }
        $name = $this->request->getVar('name');
        $price = $this->request->getVar('price');
        $stock = $this->request->getVar('amount');
        $description = $this->request->getVar('description');
        $image = $this->request->getVar('image');
        $category = $this->request->getVar('category');
        $uuid = $this->request->getVar('productid');

        $testingint = (int)$price;
        $testingintharga = (int)$stock;

        $client = \Config\Services::curlrequest();
        $r = $client->post('https://stockis.vercel.app/api/product/up', [
            'json' => [
                "name" => $name,
                "price" => $testingint,
                "amount" => $testingintharga,
                "description" => $description,
                "category" => $category,
                "image" => $image,
                "pid" => $uuid
            ],
        ]);
        // Get the status code
        $statusCode = $r->getStatusCode();
        $bollehh = $statusCode == 202;

        if ($bollehh) {
            return redirect()->to(base_url('/produk'));
        } else {
            return redirect()->to(base_url('/'));
        }
        
    }

    public function save()
    {
        if (!session()->get('logged_in')) {
            echo "Login required";
            return redirect()->to(base_url('/login'));
        }

        $data = [
            'name' => $this->request->getVar('Name'),
            'price' => $this->request->getVar('Harga'),
            'stock' => $this->request->getVar('Jumlah'),
            'description' => $this->request->getVar('Desk'),
            'image' => $this->request->getVar('Gambar'),
            'category' => $this->request->getVar('Kategori')
        ];
        $testing = $this->request->getPost('Jumlah');
        $testingharga = $this->request->getPost('Harga');
        $testingint = (int)$testing;
        $testingintharga = (int)$testingharga;

        $client = \Config\Services::curlrequest();
        $r = $client->post('https://stockis.vercel.app/api/product/add', [
            'json' => [
                "name" => $data['name'],
                "price" => $testingintharga,
                "amount" => $testingint,
                "description" => $data['description'],
                "category" => $data['category'],
            ],
        ]);
        // Get the status code
        $statusCode = $r->getStatusCode();
        $bollehh = $statusCode == 202;

        if ($bollehh) {
            return redirect()->to(base_url('/produk'));
        } else {
            return redirect()->to(base_url('/'));
        }
    }
    
    public function delete($deleteId = null){
        echo "Delete success";
    }
}
