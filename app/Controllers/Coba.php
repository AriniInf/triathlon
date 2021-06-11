<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CobaModel;

 class Coba extends Controller {
  
  public function index() {
   return view('coba'); // Display the page
  }
  
  public function insert_db() {
    $cobaModel = new CobaModel();
    // $id = $this->request->getVar('id');
    $nama = $this->request->getVar('nama');
    $alamat = $this->request->getVar('alamat');
    $data = array();
    $index = 0; // Set index array awal dengan 0
    
    foreach($alamat as $alamats){ 
        $id = uniqid();
        // echo $nama;// Kita buat perulangan berdasarkan nis sampai data terakhir
        array_push($data, array(
            'id'=>'T'.'-'.$id,
            'nama'=>$nama[$index],  // Ambil dan set data telepon sesuai index array dari $index
            'alamat'=>$alamats // Ambil dan set data alamat sesuai index array dari $index
        ));
        $index++;
        }  
    print_r($data);
    $test= $cobaModel->insertBatch($data); // fungsi  untuk menyimpan multi array ke database
    
    if($test){
     echo "nama sukses di input";
    }
   }
  }