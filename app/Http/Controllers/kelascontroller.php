<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\kelas;
use Illuminate\Http\Request;

class kelascontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = guru::all();
        $kelas = kelas::all();
        return view('kelas.kelas',['kelas' => $kelas,'guru' => $guru,"title"=>"table"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guru = guru::all();
        $kelas = kelas::all();
        return view('kelas.create', ['guru' => $guru,'kelas' => $kelas,"title"=>"table"]);
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
            'guru_id' => 'required',
        ]);

        $input = $request->all();
        kelas::create($input);

        return redirect('/table-kelas')->with('success', 'Data Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show($id, kelas $kelas)
    {
        $kelas = kelas::findOrFail($id);
        $guru = guru::all();
        return view('kelas.show', ['kelas' => $kelas,'guru' => $guru,"title"=>"table"]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit($id, kelas $kelas)
    {
        $kelas = kelas::findOrFail($id);
        $guru = guru::all();
        return view('kelas.edit',compact(['kelas','guru']),["title"=>"table"]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, kelas $kelas)
    {
        $kelas = kelas::findOrFail($id);
        $kelas->update($request->all());

        return redirect('/table-kelas')->with('success','Data Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, kelas $kelas)
    {
        $kelas = kelas::findOrFail($id);
        $kelas -> delete();

        return redirect('/table-kelas')->with('success', 'Data Delete successfully');
    }
}
