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
        // print_r($data);

        $invoice->insert($data);

        $users = array();
        // $nama_panggilan = $this->request->getVar('nama_panggilan');
        $penandas = $this->request->getVar('penanda');

        $index = 0; // Set index array awal dengan 0
        
        foreach($penandas as $penanda){ 
            $id = uniqid();
            // echo $nama;// Kita buat perulangan berdasarkan nis sampai data terakhir
            if ($penanda == 'athlete') {
                $nama_panjang = $this->request->getVar('nama_panjang')[$index];
                $no_ktp = $this->request->getVar('no_ktp')[$index];
                $nama_panggilan = $this->request->getVar('nama_panggilan')[$index];
                $no_hp = $this->request->getVar('no_hp')[$index];
                $nama_bib = $this->request->getVar('nama_bib')[$index];
                $kewarganegaraan = $this->request->getVar('kewarganegaraan')[$index];
                $tanggal_lahir = $this->request->getVar('tanggal_lahir')[$index];
                $negara = $this->request->getVar('negara')[$index];
                $provinsi = $this->request->getVar('provinsi')[$index];
                $kota = $this->request->getVar('kota')[$index];
                $kecamatan     = $this->request->getVar('kecamatan')[$index];
                $kode_pos     = $this->request->getVar('kode_pos')[$index];
                $alamat = $this->request->getVar('alamat')[$index];
                $sex = $this->request->getVar('sex')[$index];
                $gol_darah     = $this->request->getVar('gol_darah')[$index];
                $nama_komunitas     = $this->request->getVar('nama_komunitas')[$index];
                $swim_time_750 = $this->request->getVar('swim_time_750')[$index];
                $ec_nama     = $this->request->getVar('ec_nama')[$index];
                $ec_email     = $this->request->getVar('ec_email')[$index];
                $ec_hp    = $this->request->getVar('ec_hp')[$index];
                $ukuran_jersey = $this->request->getVar('ukuran_jersey')[$index];
            }
            else{
                $nama_panjang = $this->request->getVar('nama_panjang_ofc')[$index];
                $no_hp = $this->request->getVar('no_hp_ofc')[$index];
                $no_ktp = $this->request->getVar('no_ktp_ofc')[$index];
                $nama_panggilan = $this->request->getVar('nama_panggilan_ofc')[$index];
                $nama_bib = $this->request->getVar('nama_bib_ofc')[$index];
                $kewarganegaraan = $this->request->getVar('kewarganegaraan_ofc')[$index];
                $tanggal_lahir = $this->request->getVar('tanggal_lahir_ofc')[$index];
                $negara = $this->request->getVar('negara_ofc')[$index];
                $provinsi = $this->request->getVar('provinsi_ofc')[$index];
                $kota = $this->request->getVar('kota_ofc')[$index];
                $kecamatan     = $this->request->getVar('kecamatan_ofc')[$index];
                $kode_pos     = $this->request->getVar('kode_pos_ofc')[$index];
                $alamat = $this->request->getVar('alamat_ofc')[$index];
                $sex = $this->request->getVar('sex_ofc')[$index];
                $gol_darah     = $this->request->getVar('gol_darah_ofc')[$index];
                $nama_komunitas     = $this->request->getVar('nama_komunitas_ofc')[$index];
                $swim_time_750 = $this->request->getVar('swim_time_750_ofc')[$index];
                $ec_nama     = $this->request->getVar('ec_nama_ofc')[$index];
                $ec_email     = $this->request->getVar('ec_email_ofc')[$index];
                $ec_hp    = $this->request->getVar('ec_hp_ofc')[$index];
                $ukuran_jersey = $this->request->getVar('ukuran_jersey_ofc')[$index];
            }
            array_push($users, array(
                'id_regis'=>'ID-'.$id,
                'id_invoice'=> $id_invoice,
                'no_ktp'     => $no_ktp,
                'nama_panjang'     => $nama_panjang,
                'nama_panggilan'     => $nama_panggilan,
                'no_hp'     => $no_hp,
                'nama_bib'     => $nama_bib,
                'kewarganegaraan'     => $kewarganegaraan,
                'tanggal_lahir'     => $tanggal_lahir,
                'negara'     => $negara,
                'provinsi'     => $provinsi,
                'kota'     => $kota,
                'kecamatan'     => $kecamatan,
                'kode_pos'     => $kode_pos,
                'alamat'     => $alamat,
                'sex'     => $sex,
                'gol_darah'     => $gol_darah,
                'nama_komunitas'     => $nama_komunitas,
                'swim_time_750' => $swim_time_750,
                'ec_nama'     => $ec_nama,
                'ec_email'     => $ec_email,
                'ec_hp'     => $ec_hp,
                'ukuran_jersey'     => $ukuran_jersey, // Ambil dan set data alamat sesuai index array dari $index
            ));
            $index++;
            }  

            // echo "<pre>";
            // print_r($users);
            // echo "</pre>";
        $pesertamodel->insertBatch($users);
        return redirect()->route('dashboard');

           
        
     }

     public function uploadBukti(){
        
        $users = new AkunUserModel();
        $session = session();
        $user = $session->get('email');
        $users = $users->where('email', $user)->first();
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
            'tanggal_bayar' => date('d-m-Y'),

            'bukti_bayar' => $fileName,

            'status' => 1
        ];
        echo $id;

        $invoiceModel->update_invoice($data, $id);

        $dataBerkas->move(ROOTPATH . 'public/uploads/bukti_bayar/', $fileName);
        session()->setFlashdata('msg', 'Berkas Berhasil diupload');
        return redirect()->back();

     }

     public function approve(){
        $id = $this->request->getVar('id_invoice');
        $invoiceModel = new InvoiceModel();
        $data['users'] = $invoiceModel->get_user($id);
        $data['members'] = $invoiceModel->get_member($id);
        print_r($data['members']);
        $receiver = $this->request->getVar('email');
        $receiver_nama = $this->request->getVar('nama_panjang');
        echo $receiver;
        $input = [
            'status' => 2
        ];

        $this->email = \Config\Services::email();
        
        $this->email->setFrom('triathlonunesa2021@gmail.com','UNESA Triathlon');
        $this->email->setTo($receiver);

        // $this->email->attach($attachment);
        $body = view('email_approve', $data);

        $this->email->setSubject('Payment Approval');
        $this->email->setMessage($body);

        if ($this->email->send()) 
        {
            echo 'email terkirim';
            // $invoiceModel->update_invoice($input, $id);
            return redirect()->back();
        } 
        else 
        {
            $data = $this->email->printDebugger(['headers']);
            print_r($input);
        }
     }


     public function reject(){
        $id = $this->request->getVar('id_invoice');
        $invoiceModel = new InvoiceModel();
        $data['users'] = $invoiceModel->get_user($id);
        $data['members'] = $invoiceModel->get_member($id);
        print_r($data['members']);
        $receiver = $this->request->getVar('email');
        $receiver_nama = $this->request->getVar('nama_panjang');
        echo $receiver;
        $input = [
            'status' => 3
        ];

        $this->email = \Config\Services::email();
        
        $this->email->setFrom('triathlonunesa2021@gmail.com','UNESA Triathlon');
        $this->email->setTo($receiver);

        // $this->email->attach($attachment);
        $body = view('email_reject', $data);

        $this->email->setSubject('Payment Rejection');
        $this->email->setMessage($body);

        if ($this->email->send()) 
        {
            $invoiceModel->update_invoice($input, $id);
            return redirect()->back();
        } 
        else 
        {
            $data = $this->email->printDebugger(['headers']);
            print_r($input);
        }
     }
    
}