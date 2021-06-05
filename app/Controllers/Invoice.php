<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\InvoiceModel;
use App\Models\PaketModel;
 
class Invoice extends Controller
{
    public function index(){
        $invoice = new InvoiceModel();
        $data['invoice'] = $invoice->findAll();
        return view('invoice', $data);
    }
     public function addInvoice(){
        $invoice = new InvoiceModel();
        $no_ktp = $session->get('no_ktp');
        $data = [
            'id_invoice' = 1,
            'no_ktp' = $no_ktp,
            'id_paket' = $this->request->getVar('id_paket'),
            'status' = 0
        ];
        $invoice->insert($data);
        echo 'berhasil';
     }
    
}