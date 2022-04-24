<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class main_activity extends Controller
{
	/**
	 * Method strukView 
	 * 
	 * @return view Struk
	 **/
	public function strukView(){
		return view('Struk', [
        "title" => "Struk"
    ]);
	}

	/**
	 * Method productView 
	 * 
	 * @return view Produk
	 **/
	public function productView(){
		return view('Produk', [
        "title" =>'Produk'
    ]);
	}

	/**
	 * Method homeView
	 * 
	 * @return view  home 
	 **/
	public function homeView(){
		return view('home',[
        "title" => 'home'
    ]);
	}

	public function landing(){
		return view('landing');
	}
}