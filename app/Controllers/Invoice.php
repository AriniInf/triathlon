<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\AkunUserModel;
use App\Models\PesertaModel;
use App\Models\InvoiceModel;
use App\Models\PaketModel;
 
class Invoice extends Controller
{
    public function index(){
        $invoice = new InvoiceModel();
        $users = new PesertaModel();
        $session = session();
        $user = $session->get('email');
        $data['users'] = $users->where('email', $user)->findAll();
        $data['invoice'] = $invoice->where('email', $user)->findAll();
        return view('invoice', $data);
    }
     public function addInvoice(){
        $invoice = new InvoiceModel();
        $pesertamodel = new PesertaModel();
        $session = session();
        $user = $session->get('email');
        $id_invoice = 'TRX-'.uniqid();
        $data = [
            'id_invoice' => $id_invoice,
            'email' => $user,
            'id_sub' => $this->request->getVar('id_sub'),
            'harga' => $this->request->getVar('harga'),
            'age_group' => $this->request->getVar('age_group'),
            'status' => 0,
            'tanggal_beli' => date('d-m-Y')
        ];
        print_r($data);
        $invoice->insert($data);
        $users = array();
        $nama_panggilan = $this->request->getVar('nama_panggilan');

        $index = 0; // Set index array awal dengan 0
    
        foreach($nama_panggilan as $panjangs){ 
            $id = uniqid();
            // echo $nama;// Kita buat perulangan berdasarkan nis sampai data terakhir
            array_push($users, array(
                'id_regis'=>'ID-'.$id,
                'id_invoice'=> $id_invoice,
                'no_ktp'     => $this->request->getVar('no_ktp')[$index],
                'nama_panjang'     => $this->request->getVar('nama_panjang')[$index],
                'nama_panggilan'     => $panjangs,
                'nama_bib'     => $this->request->getVar('nama_bib')[$index],
                'kewarganegaraan'     => $this->request->getVar('kewarganegaraan')[$index],
                'tanggal_lahir'     => $this->request->getVar('tanggal_lahir')[$index],
                'no_hp'     => $this->request->getVar('no_hp')[$index],
                'negara'     => $this->request->getVar('negara')[$index],
                'provinsi'     => $this->request->getVar('provinsi')[$index],
                'kota'     => $this->request->getVar('kota')[$index],
                'kecamatan'     => $this->request->getVar('kecamatan')[$index],
                'kode_pos'     => $this->request->getVar('kode_pos')[$index],
                'alamat'     => $this->request->getVar('alamat')[$index],
                'sex'     => $this->request->getVar('sex')[$index],
                'gol_darah'     => $this->request->getVar('gol_darah')[$index],
                'nama_komunitas'     => $this->request->getVar('nama_komunitas')[$index],
                'swim_time_750' => $this->request->getVar('swim_time_750')[$index],
                'ec_nama'     => $this->request->getVar('ec_nama')[$index],
                'ec_email'     => $this->request->getVar('ec_email')[$index],
                'ec_hp'     => $this->request->getVar('ec_hp')[$index],
                'ukuran_jersey'     => $this->request->getVar('ukuran_jersey')[$index], // Ambil dan set data alamat sesuai index array dari $index
            ));
            $index++;
            }  
        print_r($users);
        $test= $pesertamodel->insertBatch($users);
        echo 'berhasil';
     }

     public function uploadBukti(){
        
        $users = new PesertaModel();
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