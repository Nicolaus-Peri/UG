<?php

namespace App\Http\Controllers;

use Session;
use Carbon\Carbon;
use App\Models\Member;
use App\Models\News;
use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['news'] = News::latest()->paginate('5');
        $data['member'] = auth()->user();
        return view('Profile.index', $data);
    }

    public function checkIn(Request $request)
    {
        if(Auth::check() && Auth::user()->isActive == '1') {
            $attendance = new Attendance;
            $user_id = auth()->user()->id;
            $attendance->user_id = $request->input('user_id');
            $attendance->day = Carbon::now()->toDateString();
            $attendance->time_in = Carbon::now()->toTimeString();
            $attendance->save();
            Session::flash('success', 'Anda berhasil Check In');
            return redirect('profile');
        } else {
            Session::flash('error', 'Account Anda belum akif');
            return redirect('profile');
        }
    }
    public function checkOut(Request $request)
    {
        return redirect('profile');
    }
}
