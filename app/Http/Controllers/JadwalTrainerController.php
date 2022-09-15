<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JadwalTrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['jadwals'] = DB::table('jadwals')
            ->get();
        return view('JadwalTrainer.index', $data);
    }
}
