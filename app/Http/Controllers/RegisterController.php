<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RegisterController extends Controller
{
    public function getRegisterDalaliForm()
    {
        return view('auth.dalali.register');
    }
    public function getRegisterLoanForm()
    {
        return view('auth.loan.register');
    }
    public function getLoanForm()
    {
        return view('auth.loan.home');
    }
    public function getChoice()
    {
        return view('posts.categoryregister');
    }
}
