<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class AkunUserModel extends Model{
    protected $table = 'akun_user';
    protected $allowedFields = [
        'email',
        'password'
    ];
}