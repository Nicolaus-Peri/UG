<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['members'] = Member::orderBy('id_member','desc')->paginate(10);
        return view('Member.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Member.index_create');
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
            'email' => 'required',
        ]);
        $member = new Member;
        $member->nama = $request->nama;
        $member->alamat = $request->alamat;
        $member->no_telp = $request->no_telp;
        $member->email = $request->email;
        $member->save();
        return redirect()->route('Member.index')
        ->with('sukses', 'Berhasil Menambahkan Member.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        return view('Member.show', compact('members'));;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        return view('Member.index_edit', compact('Member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'email' => 'required',
        ]);
        $member = Member::find($id_member);
        $member->nama = $request->nama;
        $member->alamat = $request->alamat;
        $member->no_telp = $request->no_telp;
        $member->email = $request->email;
        $member->save();
        return redirect()->route('Member.index')
        ->with('sukses','Berhasil Mengganti Data Member');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        return redirect()->route('Member.index')
        ->with('sukses', 'Berhasil Menghapus Data Member');
    }
}
