<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
 
class Admin extends Controller
{

    public function index(){
    	return view('admin/login_admin');
    }

    public function dashboard_admin(){
    	return view('admin/dashboard_admin');
    }

}