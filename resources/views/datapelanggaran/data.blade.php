@extends('layouts/app')

@section('title','Table Data Pelanggaran')

@section('content')
@if ($message = Session::get('success'))
    <div class="alert alert-info alert-dismissible show fade">
        <p>{{ $message }}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Data Pelanggaran</h3><br>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data Pelanggaran</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<a href="/table-pelanggaransiswa/add_data" class="btn btn-primary">+ Add</a><br><br>
 <!-- Basic Tables start -->
 <section class="section">
     <div class="card">
         <div class="card-header">
             Table Data Pelanggaran
         </div>
         <div class="card-body">
             <table class="table" id="table1">
                 <thead>
                     <tr>
                         <th>Id</th>
                         <th>Siswa</th>
                         <th>Kelas</th>
                         <th>Wali Kelas</th>
                         <th>Point</th>
                         <th>Action</th>
                     </tr>
                 </thead>
                 <tbody>
                    @foreach ($siswa as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->kelas->nama }}</td>
                            <td>{{ $item->kelas->guru->nama }}</td>
                            <td>{{ $item->point }}</td>
                            <td style="display: flex; column-gap: 7px;">
                                <a href="/siswa/detail/{{ $item->id }}" class="btn icon btn-info"><i class="bi bi-file-earmark"></i></a>
                            </td>
                        </tr>
                    @endforeach
                 </tbody>
             </table>
         </div>
     </div>
 </section>
    
<script src="{{ asset('assets/extensions/jquery/jquery.min.js') }}"></script>
<script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
<script src="{{ asset('assets/js/pages/datatables.js') }}"></script>
 @endsection