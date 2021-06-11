<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\PaketModel;
 
class Subpaket extends Controller
{

    public function elite1_tri(){
        return view('form_paket/elite1_tri');
    }

    public function elite2_tri(){
        return view('form_paket/elite2_tri');
    }

    public function elite3_tri(){
        return view('form_paket/elite3_tri');
    }

    public function elite4_tri(){
        return view('form_paket/elite4_tri');
    }

    public function ag_tri()
    {
        return view('form_paket/ag_tri');
    }

    public function kids_tri()
    {
        return view('form_paket/kids_tri');
    }

    public function elite1_dua(){
        return view('form_paket/elite1_dua');
    }

    public function elite2_dua(){
        return view('form_paket/elite2_dua');
    }

    public function elite3_dua(){
        return view('form_paket/elite3_dua');
    }

    public function elite4_dua(){
        return view('form_paket/elite4_dua');
    }
}