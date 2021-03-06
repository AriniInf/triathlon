<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\AkunUserModel;
use App\Models\InvoiceModel;
use App\Models\PaketModel;
use App\Models\SubModel;
use App\Models\CompetitionModel;

class Dashboard extends Controller
{
    public function dashboard(){
        $users = new AkunUserModel();
        $invoiceModel = new InvoiceModel();
        $paket = new PaketModel();
        $subpaket = new SubModel();
        $competition = new CompetitionModel();
        $user = session()->get('email');
        $data['users'] = $users->where('email', $user)->first();
        $invoice = $invoiceModel->where('email', $user)->first();
        
        if($invoice){

            $data['subpaket'] =  $subpaket->where('id_sub',$invoice['id_sub'])->first();
            $data['paket'] = $paket->where('id_paket',$data['subpaket']['id_paket'])->first();
            $data['competition'] =  $competition->where('id_competition', $data['paket']['id_competition'])->first();
            $data['invoice'] = $invoice;
            if($invoice['status'] == 2){
                $data['peserta'] = $invoiceModel->get_member($invoice['id_invoice']);
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
        return view('haha');
    }
    
}