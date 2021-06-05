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
}
