<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\mapel;
use Illuminate\Http\Request;

class gurucontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = guru::all();
        $mapel = mapel::all();
        return view('guru.guru',['guru' => $guru,'mapel' => $mapel,"title"=>"table"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guru = guru::all();
        $mapel = mapel::all();
        return view('guru.create', ['guru' => $guru,'mapel' => $mapel,"title"=>"table"]);
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
            'nipd' => 'required',
            'mapel_id' => 'required',
            'nomor_telepon' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
        ]);

        $input = $request->all();
        guru::create($input);

        return redirect('/table-guru')->with('success', 'Data Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function show($id, guru $guru)
    {
        $guru = guru::findOrFail($id);
        return view('guru.show', ['guru' => $guru,"title"=>"table"]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function edit($id, guru $guru)
    {
        $guru = guru::findOrFail($id);
        $mapel = mapel::all();
        return view('guru.edit',compact(['mapel','guru']),["title"=>"table"]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, guru $guru)
    {
        $guru = guru::findOrFail($id);
        $guru->update($request->all());

        return redirect('/table-guru')->with('success','Data Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, guru $guru)
    {
        $guru = guru::findOrFail($id);
        $guru -> delete();

        return redirect('/table-guru')->with('success', 'Data Delete successfully');
    }
}
