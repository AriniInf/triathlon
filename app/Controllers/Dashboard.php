<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\InvoiceModel;

class Dashboard extends Controller
{
    public function index()
    {
        $users = new UserModel();
        $invoice = new InvoiceModel();
        $session = session();
        $user = $session->get('no_ktp');
        $data['users'] = $users->where('no_ktp', $user)->findAll();
        $data['invoice'] = $invoice->where('no_ktp', $user)->first();
        // if($data){
        //     $status = $data['status'];
        // }
        // else{
        //     echo 'Tidak Aktif';
        // }
        return view('member/profil_member', $data);
    }

    public function pembayaran()
    {
    	// return view('member/dash_pembayaran');
        return view('member/dash_lunas');
        // return view('member/dash_tidakaktif');
        // return view('member/dash_tolakupload');
    }

}