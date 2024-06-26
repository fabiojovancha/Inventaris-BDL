<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class HomeController extends Controller
{
    public function index(){
        $user = User::all(); 
        return view('home.home',[
            "title" => "Home",
            "user" => $user
        ]);
    }

}
