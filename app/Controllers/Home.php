<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('utama/dashboard');

	}

	public function register(){
		return view('log_user/register');
	}

	public function login(){
		return view('log_user/login');
	}

	public function triathlon_unesa(){
		return view('utama/comp_triathlon');
	}

	public function duathlon_unesa(){
		return view('utama/comp_duathlon');
	}

	public function gallery(){
		return view('utama/unesa_gallery');
	}

}
