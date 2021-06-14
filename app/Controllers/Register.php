<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\AkunUserModel;
 
class Register extends Controller
{
    public function index()
    {
        //include helper form
        helper(['form']);
        $data = [];
        echo view('register', $data);
    }
 
    public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'nama_panjang' => 'required',
            'email'         => 'required|is_unique[akun_user.email]',
            'password'      => 'required|min_length[6]'
        ];
         
        if($this->validate($rules)){
            $model = new AkunUserModel();
            $data = [
                'nama_panjang'    => $this->request->getVar('nama_panjang'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->insert($data);
            return redirect()->to('/login');
        }else{
            $data['validation'] = $this->validator;
            // echo 'ga masuk';
            echo view('register', $data);
        }
         
    }
 
}