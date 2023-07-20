@extends('layouts/app')

@section('title','Add Data Kelas')

@section('content')
<section id="multiple-column-form">
     <div class="row match-height">
         <div class="col-12">
             <div class="card">
                 <div class="card-header">
                     <h4 class="card-title">Add Data Kelas</h4>
                 </div>
                 <div class="card-content">
                     <div class="card-body">
                         <form class="form" action="/table-kelas/add_data" method="POST">
                              @csrf
                             <div class="row">
                                 <div class="col-md-6 col-12">
                                     <div class="form-group">
                                         <label for="first-name-column">Kelas</label>
                                         <input type="text" id="first-name-column" class="form-control"
                                             placeholder="Masukan Nama" name="nama">
                                     </div>
                                 </div>
                                 <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="last-name-column">Wali Kelas</label>
                                        <select class="form-select" name="guru_id" aria-label="Default select example">
                                            @foreach ($guru as $item)
                                                 <option value="{{ $item->id }}">{{ $item->nama }}</option>
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