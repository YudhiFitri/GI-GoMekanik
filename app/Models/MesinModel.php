<?php
namespace App\Models;

use CodeIgniter\Model;

class MesinModel extends Model{
    protected $DBGroup = 'db1';
    protected $table = 'viewbarang';
    protected $allowedFields = [
        'id_barang', 'barcode', 'kategori_barang', 'jenis_barang',
        'merk', 'type', 'no_seri'
    ];
    
    public function countByBarcode($barcode){
        $this->where('barcode', $barcode);

        return $this->countAllResults();
    }
    
    public function getByBarcode($barcode){
        $rst = $this->where('barcode', $barcode)->first();
        return $rst;
    }

    
}