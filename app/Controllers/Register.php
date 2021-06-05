<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserModel;
 
class Register extends Controller
{
    public function index()
    {
        //include helper form
        helper(['form']);
        $data = [];
        echo view('log_user/register', $data);
    }
 
    public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'nama_panjang'  => 'required',
            'no_ktp'        => 'required|is_unique[users.no_ktp]',
            'nama_panggilan'  => 'required',
            'nama_bib'  => 'required',
            'email'         => 'required|valid_email|is_unique[users.email]',
            'kewarganegaraan' => 'required',
            'tanggal_lahir'  => 'required',
            'no_hp'  => 'required',
            'negara'  => 'required',
            'provinsi'  => 'required',
            'kota'  => 'required',
            'kecamatan' => 'required',
            'kode_pos'  => 'required',
            'alamat'  => 'required',
            'sex'  => 'required',
            'gol_darah'  => 'required',
            'nama_komunitas'  => 'required',
            'ec_nama'  => 'required',
            'ec_email'  => 'required',
            'ec_hp'  => 'required',
            'ukuran_jersey'  => 'required',
            'password'      => 'required|min_length[6]',
            'confpassword'  => 'matches[password]'
        ];
         
        if($this->validate($rules)){
            $model = new UserModel();
            $data = [
                'no_ktp'     => $this->request->getVar('no_ktp'),
                'nama_panjang'     => $this->request->getVar('nama_panjang'),
                'nama_panggilan'     => $this->request->getVar('nama_panggilan'),
                'nama_bib'     => $this->request->getVar('nama_bib'),
                'email'    => $this->request->getVar('email'),
                'kewarganegaraan'     => $this->request->getVar('kewarganegaraan'),
                'tanggal_lahir'     => $this->request->getVar('tanggal_lahir'),
                'no_hp'     => $this->request->getVar('no_hp'),
                'negara'     => $this->request->getVar('negara'),
                'provinsi'     => $this->request->getVar('provinsi'),
                'kota'     => $this->request->getVar('kota'),
                'kecamatan'     => $this->request->getVar('kecamatan'),
                'kode_pos'     => $this->request->getVar('kode_pos'),
                'alamat'     => $this->request->getVar('alamat'),
                'sex'     => $this->request->getVar('sex'),
                'gol_darah'     => $this->request->getVar('gol_darah'),
                'nama_komunitas'     => $this->request->getVar('nama_komunitas'),
                'swim_time_750' => $this->request->getVar('swim_time_750'),
                'ec_nama'     => $this->request->getVar('ec_nama'),
                'ec_email'     => $this->request->getVar('ec_email'),
                'ec_hp'     => $this->request->getVar('ec_hp'),
                'ukuran_jersey'     => $this->request->getVar('ukuran_jersey'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            return redirect()->to('/login');
        }else{
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
         
    }
 
}