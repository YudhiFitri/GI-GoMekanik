<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    protected $table='users';
    protected $allowedFields = [
        'id_user', 'role', 
        'user_name', 'password'
    ];

    public function getByUserName($userName){
        $rst = $this->where('user_name', $userName)->first();

        return $rst;
    }
}

