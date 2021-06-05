<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
 
class Dashboard extends Controller
{
    public function index()
    {
        $session = session();
        // echo "Welcome back, ".$session->get('nama_panjang');
        return view('member/profil_member');
    }

    public function pembayaran()
    {
    	return view('member/dash_pembayaran');
    }

}