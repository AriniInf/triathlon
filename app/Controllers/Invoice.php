<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\InvoiceModel;
use App\Models\PaketModel;
 
class Invoice extends Controller
{
    public function index(){
        $invoice = new InvoiceModel();
        $users = new UserModel();
        $session = session();
        $user = $session->get('no_ktp');
        $data['users'] = $users->where('no_ktp', $user)->findAll();
        $data['invoice'] = $invoice->where('no_ktp', $user)->findAll();
        return view('invoice', $data);
    }
     public function addInvoice(){
        $invoice = new InvoiceModel();
        $session = session();
        $user = $session->get('no_ktp');
        $id_invoice = uniqid();
        $data = [
            'id_invoice' => $id_invoice,
            'no_ktp' => $user,
            'id_paket' => $this->request->getVar('id_paket'),
            'harga' => $this->request->getVar('harga'),
            'age_group' => $this->request->getVar('age_group'),
            'status' => 0
        ];
        echo $this->request->getVar('age_group');
        $invoice->insert($data);
        echo 'berhasil';
     }
    
}