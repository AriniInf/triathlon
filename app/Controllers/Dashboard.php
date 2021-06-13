<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\AkunUserModel;
use App\Models\InvoiceModel;
use App\Models\PaketModel;
use App\Models\SubPaketModel;
use App\Models\CompetitionModel;

class Dashboard extends Controller
{
    public function index()
    {
        $users = new AkunUserModel();
        $invoice = new InvoiceModel();
        $paket = new PaketModel();
        $subpaket = new SubPaketModel();
        $competition = new CompetitionModel();
        $session = session();
        $user = $session->get('email');
        $data['users'] = $users->where('email', $user)->first();
        $invoice = $invoice->where('email', $user)->first();
        
        if($invoice){

            $subpaket =  $subpaket->where('id_sub',$invoice['id_sub'])->first();
            $data['paket'] = $paket->where('id_paket',$subpaket['id_paket'])->first();
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