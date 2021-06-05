<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class PaketModel extends Model{
    protected $table = 'paket';
    protected $primaryKey = "id_paket";
    protected $allowedFields = [
        'id_paket',
        'id_competition',
        'nama_paket',
        'harga',
        'desk1',
        'desk2'
    ];

}