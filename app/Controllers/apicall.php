<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;

class Api extends BaseController
{
    use ResponseTrait;

    public function fetchData()
    {
        // URL API yang akan di-fetch
        $apiUrl = 'URL_API_ANDA';

        // Lakukan API call
        $response = file_get_contents($apiUrl);

        // Ubah response menjadi array atau objek JSON
        $responseData = json_decode($response);

        // Kirim response ke klien
        return $this->respond($responseData);
    }
}