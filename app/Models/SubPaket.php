<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class SubPaketModel extends Model{
    protected $table = 'sub_paket';
    protected $primaryKey = "id_sub";
    protected $allowedFields = [
        'id_sub',
        'id_paket',
        'nama_sub',
        'harga'
    ];

}