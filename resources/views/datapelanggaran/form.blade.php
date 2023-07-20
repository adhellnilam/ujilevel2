@extends('layouts/app')

@section('title','Add Data Pelanggaran Siswa')

@section('content')
@if ($message = Session::get('success'))
    <div class="alert alert-info alert-dismissible show fade">
        <p>{{ $message }}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<section id="multiple-column-form">
     <div class="row match-height">
         <div class="col-12">
             <div class="card">
                 <div class="card-header">
                     <h4 class="card-title">Add Data Pelanggaran Siswa</h4>
                 </div>
                 <div class="card-content">
                     <div class="card-body">
                         <form class="form" action="/table-pelanggaransiswa/add_data" method="POST">
                              @csrf
                             <div class="row">
                              <div class="col-md-6 col-12">
                                   <div class="form-group">
                                        <label for="last-name-column">Siswa</label>
                                        <select class="form-select" name="siswa_id" aria-label="Default select example">
                                             @foreach ($siswa as $item)
                                                  <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                             @endforeach
                                        </select>
                                   </div>
                              </div>
                              <div class="col-md-6 col-12">
                                   <div class="form-group">
                                        <label for="last-name-column">Jenis Pelanggaran</label>
                                        <select class="form-select" name="pelanggaran_id" aria-label="Default select example">
                                             @foreach ($pelanggaran as $item)
                                                  <option value="{{ $item->id }}">{{ $item->jenis_pelanggaran }}</option>
                                             @endforeach
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