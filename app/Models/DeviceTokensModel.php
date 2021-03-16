<?php
namespace App\Models;

use CodeIgniter\Model;

class DeviceTokensModel extends Model{
	protected $table = "user_mekanik";
    protected $allowedFields = [
        'id_user_mekanik',
        'token'
    ];

	// public function getAllDeviceIds(){
	// 	$this->db->select('device_id');
	// 	$this->db->from($this->table);
	// 	$rst = $this->db->get();

	// 	return $rst->result_array();
	// }

	public function getAllTokens(){
        $rst = $this->select('token')->findAll();
		// $this->select('token');

		// $rst = $this->get()->getResult();

		return $rst;
		// return $rst->result();
	}	

    public function getToken($idUserMekanik){
        $rst = $this->find($idUserMekanik);

        return $rst;
    }    
}