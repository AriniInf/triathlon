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

     public function uploadBukti(){
        $invoice = new InvoiceModel();
        $session = session();
        $user = $session->get('no_ktp');
        $id = $this->request->getVar('id_invoice');
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
			session()->setFlashdata('error', $this->validator->listErrors());
			return redirect()->back()->withInput();
		}

		$dataBerkas = $this->request->getFile('berkas');
		$fileName = $dataBerkas->getName();
		$data = [
			'berkas' => $fileName,
			'keterangan' => $this->request->getPost('keterangan')
        ];

        $data->update($id,$data);
		$dataBerkas->move('uploads/bukti_bayar/', $fileName);
		session()->setFlashdata('success', 'Berkas Berhasil diupload');
		return redirect()->to(base_url('berkas'));
     }
    
}