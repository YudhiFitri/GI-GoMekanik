<?php
namespace App\Models;

use CodeIgniter\Model;

class RuleModel extends Model{
    protected $table = 'rules';
    protected $primaryKey = 'id_role';
    protected $allowedFileds = [
        'id_rule',
        'id_role',
        'menu',
        'sub_menu',
        'controller'
    ];

    public function getRulesByRole($idRole){
        $rst = $this->where('id_role', $idRole)->findAll();

        return $rst;
    }
}