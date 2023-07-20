@extends('layouts/app')

@section('title','Detail')

@section('content')
<div class="page-heading">
     <div class="page-title">
         <div class="row">
             <div class="col-12 col-md-6 order-md-1 order-last">
                 <h3>Detail</h3><br>
             </div>
             <div class="col-12 col-md-6 order-md-2 order-first">
                 <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                     <ol class="breadcrumb">
                         <li class="breadcrumb-item"><a href="/table-siswa">Siswa</a></li>
                         <li class="breadcrumb-item"><a href="/table-datapelanggaran">Data Pelanggaran</a></li>
                         <li class="breadcrumb-item active" aria-current="page">Detail</li>
                     </ol>
                 </nav>
             </div>
         </div>
     </div>
     <section class="section">
         <div class="card">
             <div class="card-header">
                 <h4 class="card-title">Detail siswa {{ $siswa->nama }}</h4>
             </div>
             <div class="card-body">
                 <p>Nama : {{ $siswa->nama }}</p>
                 <p>NIS : {{ $siswa->nis }}</p>
                 <p>Kelas : {{ $siswa->kelas['nama'] }}</p>
                 <p>Alamat : {{ $siswa->alamat }}</p>
                 <p>Nomor Telepon : {{ $siswa->nomor_telepon }}</p>
                 <p>Jenis Kelamin : {{ $siswa->jenis_kelamin }}</p>
                 <p>Point : {{ $siswa->point }}</p>
                 <p>Wali Kelas : {{ $siswa->kelas->guru->nama }}</p>
             </div>
            </div>
     </section><br><br>

     <div class="card-body">
        <table class="table" id="table1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Pelanggaran</th>
                    <th>Point</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($langgar as $item)
                   <tr>
                       <td>{{ $loop->iteration }}</td>
                       <td> {{ $item->siswa->nama }}</td>
                       <td> {{ $item->pelanggaran->jenis_pelanggaran }}</td>
                       <td> {{ $item->pelanggaran->jumlah_point }}</td>
                   </tr>
               @endforeach
            </tbody>
        </table>
    </div>
 </div>
 @endsection