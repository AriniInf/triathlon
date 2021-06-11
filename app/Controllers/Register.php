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
            'email'         => 'required',
            'password'      => 'required|min_length[6]'
        ];
         
        if($this->validate($rules)){
            $model = new AkunUserModel();
            $data = [
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