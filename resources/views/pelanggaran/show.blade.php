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
                         <li class="breadcrumb-item"><a href="/table-pelanggaran">Pelanggaran</a></li>
                         <li class="breadcrumb-item active" aria-current="page">Detail</li>
                     </ol>
                 </nav>
             </div>
         </div>
     </div>
     <section class="section">
         <div class="card">
             <div class="card-header" >
                 <h4 class="card-title">Detail pelanggaran {{ $pelanggaran->jenis_pelanggaran }}</h4>
             </div>
             <div class="card-body">
                 <p>Jenis Pelanggaran : {{ $pelanggaran->jenis_pelanggaran }}</p>
                 <p>Jumlah Point : {{ $pelanggaran->jumlah_point }}</p>
                 <p>Tindak Lanjut : {{ $pelanggaran->tindak_lanjut }}</p>
             </div>
             <a href="/table-pelanggaran" class="btn btn-outline-primary" style="width: 100px; margin-left: 850px; margin-bottom: 20px;">Back</a>
         </div>
     </section>
 </div>
 @endsection