<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(){
        return view('login.login',[
            "title" => "Login",
        ]);
    }

    public function login(Request $request){

        Session::flash('email',$request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required'=> 'Email Wajib diisi',
            'password.required' => 'Password Wajib diisi',
        ]);
        
        $infologin = [
            'email' => $request-> email,
            'password' => $request-> password
        ];

        if(Auth::attempt($infologin)){
            return redirect('home');
        } else {
            return redirect()->route('loginPage')->withErrors('Username dan password salah');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('loginPage');
    }
}
