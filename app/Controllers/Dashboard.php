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
        $data['users'] = $users->where('no_ktp', $user)->first();
        $invoice = $invoice->where('no_ktp', $user)->first();
        $data['invoice'] = $invoice;
        if($invoice){
            if($invoice['status'] == 2){
                return view('member/dash_lunas', $data);

            }
            else if($invoice['status']==3){
                return view('member/dash_tolakupload',$data);
            }
            else{
                return view('member/dash_pembayaran',$data);
            }
        }
        else{
            return view('member/dash_tidakaktif',$data);
        }
    }

    public function pembayaran()
    {
    	// return view('member/dash_pembayaran');
        return view('member/dash_lunas');
        // return view('member/dash_tidakaktif');
        // return view('member/dash_tolakupload');
    }

}