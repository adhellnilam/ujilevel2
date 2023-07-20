<?php

namespace App\Http\Controllers;

use App\Models\pelanggaran;
use Illuminate\Http\Request;

class pelanggarancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggaran = pelanggaran::all();
        return view('pelanggaran.pelanggaran',['pelanggaran' => $pelanggaran,"title"=>"pelanggaran"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelanggaran = pelanggaran::all();
        return view('pelanggaran.create', ['pelanggaran' => $pelanggaran,"title"=>"pelanggaran"]);
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
            'jenis_pelanggaran' => 'required',
            'jumlah_point' => 'required',
            'tindak_lanjut' => 'required',
        ]);

        $input = $request->all();
        pelanggaran::create($input);

        return redirect('/table-pelanggaran')->with('success', 'Data Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function show($id, pelanggaran $pelanggaran)
    {
        $pelanggaran = pelanggaran::findOrFail($id);
        return view('pelanggaran.show', ['pelanggaran' => $pelanggaran,"title"=>"pelanggaran"]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function edit($id, pelanggaran $pelanggaran)
    {
        $pelanggaran = pelanggaran::findOrFail($id);
        return view('pelanggaran.edit',compact(['pelanggaran']),["title"=>"pelanggaran"]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function update ($id, Request $request, pelanggaran $pelanggaran)
    {
        $pelanggaran = pelanggaran::findOrFail($id);
        $pelanggaran->update($request->all());

        return redirect('/table-pelanggaran')->with('success','Data Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, pelanggaran $pelanggaran)
    {
        $pelanggaran = pelanggaran::findOrFail($id);
        $pelanggaran -> delete();

        return redirect('/table-pelanggaran')->with('success', 'Data Delete successfully');
    }
}
