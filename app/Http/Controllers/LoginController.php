<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Validation\RegisterRequest;
use Illuminate\Support\Str;
use App\Mail\VerificationEmail;
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
                if(Auth::user()->isAdmin == '1'){
                    return redirect('/dashboard');
                } else {
                    return redirect('/profile');
                }
            }else{
                Session::flash('error', 'Email atau Password Salah');
                return redirect('/login');
            }
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
 
        request()->session()->invalidate();
 
        request()->session()->regenerateToken();
 
        return redirect('/login');
    }
}
