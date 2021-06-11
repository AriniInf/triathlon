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

	public function rank_men(){
		return view('utama/rank-men');
	}
	public function rank_women(){
		return view('utama/rank-women');
	}
	public function profil(){
		return view('member/profil_member');
	}

	public function comp_member(){
		return view ('member/comp_member');
	}

}
