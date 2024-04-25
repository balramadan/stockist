<?php

namespace App\Controllers;

use GuzzleHttp\Client;

class Product extends BaseController
{

    public function index()
    {
        $data = [
            'judul' => 'Produk'
        ];
        echo view('templates/header', $data);
        echo view('admin/product');
        echo view('templates/footer');
    }

    public function edit($editProduct = null)
    {
        $data['judul'] = 'Edit';
        $data['id'] = $editProduct;
        echo view('templates/header', $data);
        echo view('admin/edit_product', $data);
        echo view('templates/footer');
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