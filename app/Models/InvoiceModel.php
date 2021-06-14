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

    public function get_user($id){
        $builder = $this->db->table($this->table);
        $builder->select('akun_user.email, akun_user.nama_panjang, invoice.tanggal_bayar, invoice.id_invoice, sub_paket.nama_sub');
        $builder->join('akun_user', 'invoice.email = akun_user.email');
        $builder->join('sub_paket', 'invoice.id_sub = sub_paket.id_sub');
        $builder->where('invoice.id_invoice', $id);
        $query = $builder->get();
        return $query->getResult();
    }

    public function get_member($id){
        $builder = $this->db->table($this->table);
        $builder->select('peserta.nama_panjang, peserta.id_regis, peserta.nama_panggilan, peserta.nama_bib, peserta.id_regis, peserta.no_ktp, peserta.kewarganegaraan, peserta.tanggal_lahir, peserta.no_hp, peserta.alamat, peserta.sex, peserta.gol_darah, peserta.nama_komunitas, peserta.swim_time_750,  peserta.ukuran_jersey');
        $builder->join('peserta', 'invoice.id_invoice = peserta.id_invoice');
        $builder->where('invoice.id_invoice', $id);
        $query = $builder->get();
        return $query->getResultArray();

    }
}
