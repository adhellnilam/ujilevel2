<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use App\Models\laporan;
use App\Models\siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class siswacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = siswa::all();
        $kelas = kelas::all();
        return view('siswa.siswa',['kelas' => $kelas,'siswa' => $siswa,"title" => "table"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa = siswa::all();
        $kelas = kelas::all();
        return view('siswa.create', ['siswa' => $siswa,'kelas' => $kelas,"title" => "table"]);
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
            'nis' => 'required',
            'kelas_id' => 'required',
            'nomor_telepon' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
        ]);

        $input = $request->all();
        siswa::create($input);

        return redirect('/table-siswa')->with('success', 'Data Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show($id, siswa $siswa)
    {
        $siswa = siswa::findOrFail($id);
        $langgar = $siswa->violation;
        return view('siswa.show', ['langgar' => $langgar,'siswa' => $siswa,"title"=>"table"]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id, siswa $siswa)
    {
        $siswa = siswa::findOrFail($id);
        $kelas = kelas::all();
        return view('siswa.edit',compact(['kelas','siswa']),["title"=>"table"]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, siswa $siswa)
    {
        $siswa = siswa::findOrFail($id);
        $siswa->update($request->all());

        return redirect('/table-siswa')->with('success','Data Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, siswa $siswa)
    {
        Schema::disableForeignKeyConstraints();
        $siswa = siswa::findOrFail($id);
        $siswa -> delete();
        Schema::enableForeignKeyConstraints();

        return redirect('/table-siswa')->with('success', 'Data Delete successfully');
    }
}
