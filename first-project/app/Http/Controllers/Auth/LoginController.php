<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function index(){

       

        return view('auth.login');
    }
    public function store(Request $Request){
        $this->validate($Request,[
            'email'=>'required|email|max:255',
            'password'=>'required',
        ]);

        if (!auth()->attempt($Request->only('email', 'password'),$Request->remember)){
            return back()->with('status','Invalid Login Details');
        }

        return redirect()->route('dashboard');
    }
    public function logout(){
        auth()->logout();

        return redirect()->route('home');
    }

}
