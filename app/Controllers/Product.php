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
        $data['judul'] = 'Edit';
        $data['id'] = $editProduct;
        echo view('templates/header', $data);
        echo view('admin/edit_product', $data);
        echo view('templates/footer');
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
    // public function getApi()
    // {
    //     $client = \Config\Services::curlrequest();

    //     $responseGet = $client->request('GET', 'https://rgz5qk5s-5000.asse.devtunnels.ms/', ['headers' => ['Accept' => 'aplication/json']]);

    //     if($responseGet) {
    //         foreach($this->$responseGet as $item){
    //             echo "Sukses" . $item['nama'];
    //         }
    //     } else {
    //         echo "Error";
    //     }

    //     $curl = curl_init();

    //     curl_setopt_array($curl, [
    //         CURLOPT_URL => 'https://rgz5qk5s-5000.asse.devtunnels.ms/',
    //         CURLOPT_RETURNTRANSFER => true,
    //     ]);

    //     $response = curl_exec($curl);
    //     curl_close($curl);

    //     $data = json_decode($response, true);

    //     if($data) {
    //         foreach ($data as $item) {
    //             echo "Sukses: " .  $item['nama'];
    //         }
    //     } else {
    //         echo "Error";
    //     }
    // }

    // public function postApi()
    // {
    //     $client = new Client([
    //         'base_uri' => 'https://rgz5qk5s-5000.asse.devtunnels.ms/',
    //         'timeout' => 5,
    //     ]);

    //     $r = $client->post('https://rgz5qk5s-5000.asse.devtunnels.ms/', [
    //         'json' => [
    //             "nip" => 245,
    //             "nama" => "furinahitam",
    //             "password" => "furinamodehitam",
    //         ],
    //     ]);

    //     $r->then(
    //         function (ResponseInterface $res) {
    //             echo $res->getStatusCode() . "\n";
    //         },
    //         function (RequestException $e) {
    //             echo $e->getMessage() . "\n";
    //             echo $e->getRequest()->getMethod();
    //         }
    //     );
    // }
}
