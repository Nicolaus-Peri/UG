<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function index (){
        return view('Login.index');
    }

    public function actionlogin(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        if ($data) {
            if (Auth::Attempt($data)) {
                return redirect('/dashboard');
            }else{
                Session::flash('error', 'Email atau Password Salah');
                return redirect('/');
            }
        }
    }
    
}
