<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAuth extends Controller
{
    /**
     * Method index menampilkan halaman awal dari website
     *
     * @return tampilan landing page
     */

    public function index()
    {

        return view('landing');
    }

    /**
     * Method registrationAdmin menampilkan halaman registrasi milik admin/staff IT apotek
     *
     * @return tampilan registrasi akun admin/staff
     */

    public function registrationAdmin()
    {
        return view('adminreg');
    }

    /**
     * postLogin
     * 
     * @param request
     * @return response()
     */


}
