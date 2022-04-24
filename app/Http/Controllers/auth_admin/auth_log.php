<?php

namespace App\Http\Controllers\auth_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class auth_log extends Controller
{

    /**
     * Method showRegister 
     * 
     * @return view register
     **/
    public function showRegister(){
        return view('adminreg');
    }

    public function showLogin(){
        if (Auth::check()) {
            return redirect('home');
        }else{
            return view('adminlog');
        }
    }

    /**
     * 
     * 
     * 
     **/
    public function actionLogin(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect()->intenced('home');
        }

        return back()->with('LoginError', 'Login Failed!');
    }

    public function actionRegister(Request $request){
        return $request()->all();
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
