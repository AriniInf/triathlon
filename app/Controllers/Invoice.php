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
            'status' => 0,
            'tanggal' => date('Y-m-d')
        ];
        echo $this->request->getVar('age_group');
        $invoice->insert($data);
        echo 'berhasil';
     }

     public function uploadBukti(){
        
        $users = new UserModel();
        $session = session();
        $user = $session->get('no_ktp');
        $users = $users->where('no_ktp', $user)->first();
        $nama = $users['nama_panjang'];
        
        $id = $this->request->getVar('id_invoice');
        $invoiceModel = new InvoiceModel();
        $dataBerkas = $this->request->getFile('berkas');
		$fileName = date('d-m-Y').'-'.$nama.'.'.$dataBerkas->getClientExtension();

        if (!$this->validate([
			'berkas' => [
				'rules' => 'uploaded[berkas]|mime_in[berkas,image/jpg,image/jpeg,image/png]|max_size[berkas,2048]',
				'errors' => [
					'uploaded' => 'Harus Ada File yang diupload',
					'mime_in' => 'File Extention Harus Berupa jpg,jpeg,png',
					'max_size' => 'Ukuran File Maksimal 2 MB'
				]
			]
		])) {
			session()->setFlashdata('msg', $this->validator->listErrors());
			return redirect()->back()->withInput();
		}

        $data = [
			'bukti_bayar' => $fileName,
            'status' => 1
        ];
        echo $id;

        $invoiceModel->update($id, $data);
		$dataBerkas->move(ROOTPATH . 'public/uploads/bukti_bayar/', $fileName);
		session()->setFlashdata('msg', 'Berkas Berhasil diupload');
		return redirect()->back();
     }
    
}