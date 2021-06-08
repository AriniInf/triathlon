<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\InvoiceModel;
use App\Models\PaketModel;
use App\Models\CompetitionModel;

class Dashboard extends Controller
{
    public function index()
    {
        $users = new UserModel();
        $invoice = new InvoiceModel();
        $paket = new PaketModel();
        $competition = new CompetitionModel();
        $session = session();
        $user = $session->get('no_ktp');
        $data['users'] = $users->where('no_ktp', $user)->first();
        $invoice = $invoice->where('no_ktp', $user)->first();
        
        if($invoice){

            $paket =  $paket->where('id_paket',$invoice['id_paket'])->first();
            $data['competition'] =  $competition->where('id_competition', $paket['id_competition'])->first();
            $data['invoice'] = $invoice;
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
}