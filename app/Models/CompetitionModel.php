<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class CompetitionModel extends Model{
    protected $table = 'competition';
    protected $primaryKey = "id_competition";
    protected $allowedFields = [
        'id_competition',
        'nama_competition'
    ];

}