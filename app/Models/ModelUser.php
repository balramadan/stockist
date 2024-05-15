<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUser extends Model{
    protected $table = "users";
    protected $allowedFields = ['user_name', 'user_email', 'user_password',  'user_job', 'user_created_at'];

    public function getUser()
    {
        return $this->db->table('users')->get()->getResultArray();
    }

}