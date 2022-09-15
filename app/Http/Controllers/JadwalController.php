<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\Trainer;
use App\Models\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['app'] = App::latest();
        $data['trainer'] = Trainer::latest();
        $data['jadwal'] = Jadwal::orderBy('id','desc')->paginate(10);
        return view('Jadwal.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['jadwal'] = Jadwal::latest()->paginate(10);
        $data['app'] = DB::table('apps')
                        ->where('category', 'gym_attr')
                        ->where('type', 'training_type')
                        ->get();
        $data['trainer'] = DB::table('trainers')
                        ->get();
        return view('Jadwal.index_create', $data);
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
            'day' => 'required',
            'str_value' => 'required',
            'trainer' => 'required',
        ]);
        $jadwal = new Jadwal;
        $jadwal->day = $request->day;
        $jadwal->str_value = $request->str_value;
        $jadwal->trainer = $request->trainer;
        $jadwal->save();
        return redirect('jadwal');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show(Jadwal $jadwal)
    {
        return redirect('jadwal');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit($jadwal)
    {
        $app = DB::table('apps')
            ->get();
        $trainer = DB::table('trainers')
            ->get();
        return view('Jadwal.index_edit', compact('jadwal', 'app', 'trainer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        $request->validate([
            'day' => 'required',
            'str_value' => 'required',
            'trainer' => 'required',
        ]);
        $jadwal = Jadwal::find($jadwal->id);
        $jadwal->day = $request->day;
        $jadwal->str_value = $request->str_value;
        $jadwal->trainer = $request->trainer;
        $jadwal->save();
        return redirect('jadwal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jadwal $jadwal)
    {
        $jadwal->delete();
        return redirect('jadwal');
    }
}
