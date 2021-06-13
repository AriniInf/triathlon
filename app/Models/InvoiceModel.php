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

    public function update_invoice($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id_invoice' => $id]);
    }

    public function get_invoice()
    {
        // return $this->db->table($this->table)->select('(SELECT sub_paket.nama_sub, akun_user.nama_panjang, invoice.harga FROM `invoice` JOIN sub_paket ON invoice.id_sub = sub_paket.id_sub JOIN akun_user ON invoice.email = akun_user.email)');
        $builder = $this->db->table($this->table);
        $builder->select('invoice.id_invoice, sub_paket.nama_sub,akun_user.email, akun_user.nama_panjang, invoice.harga, invoice.bukti_bayar');
        $builder->join('sub_paket', 'invoice.id_sub = sub_paket.id_sub');
        $builder->join('akun_user', 'invoice.email = akun_user.email');
        $builder->where('invoice.status = 1');
        $query = $builder->get();
        return $query->getResult();
    }
}
