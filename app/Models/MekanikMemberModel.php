<?php 
namespace App\Models;

use Codeigniter\Model;

class MekanikMemberModel extends Model{
    protected $table = "mekanik_member";
    protected $allowedFields = [
        'id_mekanik_member',
        'NIK',
        'Nama',
        'Inisial',
        'Bagian',
        'Shift',
        'nomor_telepon',
        'barcode',
        'isMachineBreakdown',
        'isQuickChange',
        'isMaintenance'
    ];
}