<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class InvoiceModel extends Model{
    protected $table = 'invoice';
    protected $allowedFields = [
        'id_invoice',
        'email',
        'id_sub',
        'status',
        'age_group',
        'bukti_bayar',
        'harga',
        'tanggal_bayar',
        'tanggal_beli'
    ];
}