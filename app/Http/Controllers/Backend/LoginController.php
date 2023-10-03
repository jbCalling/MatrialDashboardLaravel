<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function SignUpPage(){
        return view('Auth.pages.signup');
    }

    public function SignInPage(){
        return view('Auth.pages.signin');
    }
}
