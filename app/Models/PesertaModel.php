<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class PesertaModel extends Model{
    protected $table = 'peserta';
    protected $allowedFields = [
        'no_ktp',
        'id_regis',
        'id_invoice',
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
        'ukuran_jersey'
    ];
}