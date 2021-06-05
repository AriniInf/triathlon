<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class UserModel extends Model{
    protected $table = 'users';
    protected $allowedFields = [
        'no_ktp',
        'nama_panjang',
        'nama_panggilan',
        'nama_bib',
        'email',
        'kewarganegaraan',
        'tanggal_lahir',
        'no_hp',
        'negara',
        'provinsi',
        'kota',
        'kecamatan',
        'kode_pos',
        'alamat',
        'sex',
        'gol_darah',
        'nama_komunitas',
        'swim_time_750',
        'ec_nama',
        'ec_email',
        'ec_hp',
        'ukuran_jersey',
        'password'
    ];
}