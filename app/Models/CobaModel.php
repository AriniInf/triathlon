<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class CobaModel extends Model{
    protected $table = 'coba';
    protected $primaryKey = "id";
    protected $allowedFields = [
        'id',
        'nama',
        'alamat'
    ];

}