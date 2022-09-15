<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Visit;
use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function ___construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data['visits'] = DB::table('visits')->get();
        $data['member_active'] = Member::where('isActive', 1)
                                        ->where('isAdmin', null)
                                        ->get();
        $data['total_member_active'] = $data['member_active']->count();

        $data['member_inactive'] = Member::where('isActive', 0)
                                        ->where('isAdmin', null)
                                        ->get();
        $data['total_member_inactive'] = $data['member_inactive']->count();

        $data['member_onsite'] = Attendance::where('time_out', null)
                                        ->whereDate('created_at', Carbon::today())
                                        ->get();
        $data['total_member_onsite'] = $data['member_onsite']->count();

        $data['visitor_onsite'] = Visit::whereDate('created_at', Carbon::today())
                                        ->get();
        $data['total_visitor_onsite'] = $data['visitor_onsite']->count();

        // grafik
        $data['member_arr'] = [];
        $data['visitor_arr'] = [];
        for ($x = 1; $x <= 12; $x++) {
            $member_act = Attendance::whereMonth('created_at', $x)
                                    ->whereYear('created_at', Carbon::now()->year)
                                    ->get();
            array_push($data['member_arr'], $member_act->count());

            $visitor_act = Visit::whereMonth('created_at', $x)
                        ->whereYear('created_at', Carbon::now()->year)
                        ->get();
            array_push($data['visitor_arr'], $visitor_act->count());
        }

        return view('Dashboard.index', $data);
    }
    public function create()
    {
        return view('Dashboard.index_create');
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
            'nama' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);
        $visit = new Visit;
        $visit->nama = $request->nama;
        $visit->alamat = $request->alamat;
        $visit->no_telp = $request->no_telp;
        $visit->save();
        return redirect('dashboard');
    }
}
