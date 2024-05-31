<?php

namespace App\Controllers;

class Material extends BaseController
{
    public function index()
    {
        if (!session()->get('logged_in')) {
            echo "Login required";
            return redirect()->to(base_url('/login'));
        }

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://stockis.vercel.app/api/material',
            CURLOPT_RETURNTRANSFER => true
        ]);

        $response = curl_exec($curl);
        curl_close($curl);
        $data = json_decode($response, true);
        $res = $data['data'];
        $active = [];
        $non = [];

        foreach ($res as $item) {
            if ($item['amount'] >= 1) {
                $active[] = $item;
            } else {
                $non[] = $item;
            }
        }
        $data = [
            'judul' => 'Bahan',
            'material' => $active,
            'non' => $non
        ];
        echo view('templates/header', $data);
        echo view('admin/material', $data);
        echo view('templates/footer');
    }

    public function edit($editMaterial = null, $editMaterial2 = null)
    {
        if (!session()->get('logged_in')) {
            echo "Login required";
            return redirect()->to(base_url('/login'));
        }

        $amounttoInt = (int)$editMaterial2;

        $client = \Config\Services::curlrequest();
        $r = $client->post('https://stockis.vercel.app/api/materials', [
            'json' => [
                "material_id" => $editMaterial,
                "id" => $amounttoInt
            ],
        ]);
        // Get the status code
        $body = $r->getBody();

        $databody = json_decode($body, true);

        $reuslt = $databody['data'];

        $data['judul'] = 'Edit';
        $data['id'] = $editMaterial;
        $data['result'] = $reuslt;
        echo view('templates/header', $data);
        echo view('admin/edit_material', $data);
        echo view('templates/footer');
    }

    public function updated()
    {
        if (!session()->get('logged_in')) {
            echo "Login required";
            return redirect()->to(base_url('/login'));
        }

        $name = $this->request->getVar("bahan");
        $amount = $this->request->getVar("amount");
        $supplier = $this->request->getVar("supplier");
        $id_material = $this->request->getVar("id");

        $amounttoInt = (int)$amount;

        $client = \Config\Services::curlrequest();
        $r = $client->post('https://stockis.vercel.app/api/material/up', [
            'json' => [
                "material" => $name,
                "amount" => $amounttoInt,
                "id" => $id_material,
                "supplier" => $supplier
            ],
        ]);
        // Get the status code
        $statusCode = $r->getStatusCode();
        $bollehh = $statusCode == 202;
        if ($bollehh) {
            return redirect()->to("/bahan");
        } else {
            return redirect()->to("/");
        }
    }

    public function save()
    {
        if (!session()->get('logged_in')) {
            echo "Login required";
            return redirect()->to(base_url('/login'));
        }

        $dataPost = [
            'name' => $this->request->getVar('bahan'),
            'amount' => $this->request->getVar('amount'),
            'supplier' => $this->request->getVar('supplier')
        ];
        $amounttoInt = (int)$dataPost['amount'];

        $client = \Config\Services::curlrequest();
        $r = $client->post('https://stockis.vercel.app/api/material/add', [
            'json' => [
                "material" => $dataPost['name'],
                "amount" => $amounttoInt,
                "supplier" => $dataPost['supplier']
            ],
        ]);
        // Get the status code
        $statusCode = $r->getStatusCode();
        $bollehh = $statusCode == 200;
        if ($bollehh) {
            return redirect()->to("/bahan");
        } else {
            return redirect()->to("/");
        }
    }

    public function delete($supplierId = null, $id_material = null)
    {
        if (!session()->get('logged_in')) {
            echo "Login required";
            return redirect()->to(base_url('/login'));
        }
        
        $client = \Config\Services::curlrequest();
        $r = $client->delete('https://stockis.vercel.app/api/materials', [
            'json' => [
                "id" => $id_material,
            ],
        ]);
        // Get the status code
        $statusCode = $r->getStatusCode();
        $bollehh = $statusCode == 202;
        if ($bollehh) {
            return redirect()->to("/bahan");
        } else {
            return redirect()->to("/");
        }
    }
}
