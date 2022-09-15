<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Validation\RegisterRequest;
use App\Mail\VerificationEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Register.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'alamat'=>'required',
            'no_telp'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);
        $member = new Member;
        $member->nama = $request->nama;
        $member->alamat = $request->alamat;
        $member->no_telp = $request->no_telp;
        $member->email = $request->email;
        $member->password = Hash::make($request->password);
        $member->isActive = false;
        $member->join_date = date('Y-m-d H:i:s');
        $member->exit_date = date('Y-m-d H:i:s');
        $member->remember_token = Str::random(32);
        $member->isAdmin = false;
        $member->save();

        return redirect('/login');
    }
}
