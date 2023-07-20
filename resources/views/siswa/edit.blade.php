@extends('layouts/app')

@section('title','Edit Table Siswa')

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
                         <form class="form" action="{{ url('/siswa/update_data',$siswa->id) }}" method="POST">
                              @csrf
                             <div class="row">
                                 <div class="col-md-6 col-12">
                                     <div class="form-group">
                                         <label for="first-name-column">Nama</label>
                                         <input type="text" id="first-name-column" class="form-control"
                                             placeholder="Masukan Nama" value="{{ $siswa->nama }}" name="nama">
                                     </div>
                                 </div>
                                 <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="city-column">NIS</label>
                                        <input type="text" id="city-column" class="form-control" placeholder="Input NIS"
                                            name="nis" value="{{ $siswa->nis }}">
                                    </div>
                                </div>
                                
                                 <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">Alamat</label>
                                        <input type="text" id="country-floating" class="form-control"
                                            name="alamat" value="{{ $siswa->alamat }}" placeholder="Masukan Alamat">
                                    </div>
                                </div>
                                 <div class="col-md-6 col-12">
                                     <div class="form-group">
                                         <label for="country-floating">Nomor Telepon</label>
                                         <input type="text" id="country-floating" class="form-control"
                                             name="nomor_telepon" value="{{ $siswa->nomor_telepon }}" placeholder="Masukan Nomor Telepon">
                                     </div>
                                 </div>
                               <div class="col-md-6 col-12">
                                   <div class="form-group">
                                       <label for="company-column">Jenis Kelamin</label>
                                       <select class="form-select" name="jenis_kelamin" id="basicSelect">
                                           <option>Perempuan</option>
                                           <option>Laki-Laki</option>
                                       </select>
                                   </div>
                               </div>
                               <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="country-floating">Point</label>
                                    <input type="text" id="country-floating" class="form-control"
                                        name="point" value="{{ $siswa->point }}" placeholder="Masukan Nomor Point">
                                </div>
                            </div>
                                 <div class="col-12 d-flex justify-content-end">
                                     <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                     <a href="/table-siswa"><button type="button" class="btn btn-light-secondary me-1 mb-1">Back</button></a>
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