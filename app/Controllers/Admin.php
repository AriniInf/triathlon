<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\AdminModel;

class Admin extends Controller
{

    public function index(){
        helper(['form']);
    	return view('admin/login_admin');
    }
 
    public function auth()
    {
        $session = session();
        $model = new AdminModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('email', $email)->first();
        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'nama'     => $data['nama'],
                    'email'    => $data['email'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard-admin');
            }else{
                $session->setFlashdata('msg', 'Wrong Email or Password');
                return redirect()->to('/login-admin');
            }
        }else{
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/login-admin');
        }
    }

    public function dashboard_admin(){
        $session = session();
        $data['admin'] = $session->get('nama');
    	return view('admin/dashboard_admin',$data);
    }
 
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login-admin');
    }

}