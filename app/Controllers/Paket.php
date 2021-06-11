<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\PaketModel;
 
class Paket extends Controller
{

    public function index(){
        $session = session();
        $data['user'] = $session->get('no_ktp');
        $paket = new PaketModel();
        $data['paket'] = $paket->where('id_competition', 1)->findAll();
        return view('paket_duathlon', $data);
    }

    public function triathlon(){
        $session = session();
        $data['user'] = $session->get('no_ktp');
        $paket = new PaketModel();
        $data['paket'] = $paket->where('id_competition', 2)->findAll();
        return view('paket_triathlon', $data);
        // return view('utama/comp_triathlon');
    }

}