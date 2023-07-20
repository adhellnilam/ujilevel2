<?php

namespace App\Http\Controllers;

use App\Models\pelanggaran;
use App\Models\pelanggaransiswa;
use App\Models\siswa;
use Illuminate\Http\Request;

class pelanggaransiswacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = siswa::with('kelas')->get();
        return view ('datapelanggaran.data',['siswa' => $siswa, "title"=>"table"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelanggaran = pelanggaran::all();
        $siswa = siswa::all();
        $pelanggaransiswa = pelanggaransiswa::all();
        return view('datapelanggaran.form', ['pelanggaransiswa' => $pelanggaransiswa,'siswa' => $siswa,'pelanggaran' => $pelanggaran,"title"=>"table"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siswa_id = $request->siswa_id;
        $pelanggaran_id = $request->pelanggaran_id;
        $data = $request->all();
        $siswa = siswa::findOrFail($siswa_id);
        $pelanggaran = pelanggaran::findOrFail($pelanggaran_id);
        $poinS = $siswa->point;
        $poinP = $pelanggaran->jumlah_point;
        $poinS+= $poinP;
        if($data){
            $siswa->update([
                'point'=>$poinS
            ]);
        }
        pelanggaransiswa::create($data);

        return redirect('/table-datapelanggaran')->with('success', 'Data Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pelanggaransiswa  $pelanggaransiswa
     * @return \Illuminate\Http\Response
     */
    public function show(pelanggaransiswa $pelanggaransiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pelanggaransiswa  $pelanggaransiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id, pelanggaransiswa $pelanggaransiswa)
    {
        $pelanggaransiswa = pelanggaransiswa::findOrFail($id);
        $pelanggaran = pelanggaran::all();
        $siswa = siswa::all();
        return view('pelanggaransiswa.edit',compact(['pelanggaransiswa','pelanggaran','siswa']),["title"=>"table"]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pelanggaransiswa  $pelanggaransiswa
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, pelanggaransiswa $pelanggaransiswa)
    {
        $pelanggaransiswa = pelanggaransiswa::findOrFail($id);
        $pelanggaransiswa->update($request->all());

        return redirect('/table-pelanggaransiswa')->with('success','Data Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pelanggaransiswa  $pelanggaransiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, pelanggaransiswa $pelanggaransiswa)
    {
        $pelanggaransiswa = pelanggaransiswa::findOrFail($id);
        $pelanggaransiswa -> delete();

        return redirect('/table-siswa')->with('success', 'Data Delete successfully');
    }
}
