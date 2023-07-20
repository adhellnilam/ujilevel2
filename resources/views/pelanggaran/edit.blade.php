@extends('layouts/app')

@section('title','Edit Table Pelanggaran')

@section('content')
<section id="multiple-column-form">
     <div class="row match-height">
         <div class="col-12">
             <div class="card">
                 <div class="card-header">
                     <h4 class="card-title">Edit Form</h4>
                 </div>
                 <div class="card-content">
                     <div class="card-body">
                         <form class="form" action="{{ url('/pelanggaran/update_data',$pelanggaran->id) }}" method="POST">
                              @csrf
                             <div class="row">
                                 <div class="col-md-6 col-12">
                                     <div class="form-group">
                                         <label for="first-name-column">Jenis Pelanggaran</label>
                                         <input type="text" id="first-name-column" class="form-control"
                                             placeholder="Masukan Jenis Pelanggaran" value="{{ $pelanggaran->jenis_pelanggaran }}" name="jenis_pelanggaran">
                                     </div>
                                 </div>
                                 <div class="col-md-6 col-12">
                                   <div class="form-group">
                                       <label for="first-name-column">Jumlah Point</label>
                                       <input type="text" id="first-name-column" class="form-control"
                                           placeholder="Masukan Jumlah Point" value="{{ $pelanggaran->jumlah_point }}" name="jumlah_point">
                                   </div>
                               </div>
                               <div class="col-md-6 col-12">
                                   <div class="form-group">
                                       <label for="first-name-column">Tindak Lanjut</label>
                                       <input type="text" id="first-name-column" class="form-control"
                                           placeholder="Masukan Tindak Lanjut" value="{{ $pelanggaran->tindak_lanjut }}" name="tindak_lanjut">
                                   </div>
                               </div>
                                 <div class="col-12 d-flex justify-content-end">
                                     <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                     <a href="/table-pelanggaran"><button type="button" class="btn btn-light-secondary me-1 mb-1">Back</button></a>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
@endsection