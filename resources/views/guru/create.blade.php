@extends('layouts/app')

@section('title','Add Data Guru')

@section('content')
<section id="multiple-column-form">
     <div class="row match-height">
         <div class="col-12">
             <div class="card">
                 <div class="card-header">
                     <h4 class="card-title">Add Data Guru</h4>
                 </div>
                 <div class="card-content">
                     <div class="card-body">
                         <form class="form" action="/table-guru/add_data" method="POST">
                              @csrf
                             <div class="row">
                                 <div class="col-md-6 col-12">
                                     <div class="form-group">
                                         <label for="first-name-column">Nama</label>
                                         <input type="text" id="first-name-column" class="form-control"
                                             placeholder="Masukan Nama" name="nama">
                                     </div>
                                 </div>
                                 <div class="col-md-6 col-12">
                                   <div class="form-group">
                                       <label for="city-column">NIPD</label>
                                       <input type="text" id="city-column" class="form-control" placeholder="Masukan NIPD"
                                           name="nipd">
                                   </div>
                               </div>
                                 <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="last-name-column">Mata Pelajaran</label>
                                        <select class="form-select" name="mapel_id" aria-label="Default select example">
                                            @foreach ($mapel as $item)
                                                 <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                            @endforeach
                                          </select>
                                    </div>
                                </div>
                                 <div class="col-md-6 col-12">
                                     <div class="form-group">
                                         <label for="country-floating">Nomor Telepon</label>
                                         <input type="text" id="country-floating" class="form-control"
                                             name="nomor_telepon" placeholder="Masukan Nomor Telepon">
                                     </div>
                                 </div>
                                 <div class="col-md-6 col-12">
                                     <div class="form-group">
                                         <label for="company-column">Alamat</label>
                                         <input type="text" id="country-floating" class="form-control"
                                             name="alamat" placeholder="Masukan Alamat">
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
                                 <div class="col-12 d-flex justify-content-end">
                                     <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                     <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
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
