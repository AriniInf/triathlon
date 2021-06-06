<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\PaketModel;
 
class Paket extends Controller
{

    public function index(){
        $session = session();
        $data['user'] = $session->get('no_ktp');
        $paket = new PaketModel();
        $data['paket'] = $paket->findAll();
        return view('paket', $data);
    }

}