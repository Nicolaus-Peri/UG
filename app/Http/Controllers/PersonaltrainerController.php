<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonaltrainerController extends Controller
{
    public function index(){
        return view('PersonalTrainer.index');
    }
}
