<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class InvoiceModel extends Model{
    protected $table = 'invoice';
    protected $allowedFields = [
        'id_invoice',
        'no_ktp',
        'id_paket',
        'status'
    ];
}