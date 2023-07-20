@extends('layouts/app')

@section('title','Table Siswa')

@section('content')
<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Siswa</h3><br>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Siswa</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
    <div class="alert alert-info alert-dismissible show fade">
        <p>{{ $message }}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<a href="/table-siswa/add_data" class="btn btn-primary">+ Add</a><br><br>
 <!-- Basic Tables start -->
 <section class="section">
     <div class="card">
         <div class="card-header">
             Table Siswa
         </div>
         <div class="card-body">
             <table class="table" id="table1">
                 <thead>
                     <tr>
                        <th>No</th>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>NIS</th>
                        <th>Action</th>
                     </tr>
                 </thead>
                 <tbody>
                    @foreach ($siswa as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->kelas->nama }}</td>
                            <td>{{ $item->nis }}</td>
                            <td style="display: flex; column-gap: 7px;">
                                <a href="/siswa/update_data/{{ $item->id }}" class="btn icon btn-primary"><i class="bi bi-pencil"></i></a>

                                <form action="/siswa/destroy/{{ $item->id }}" method="POST" onsubmit="return confirm('Are You Sure?')">
                                    @csrf
                                    @method('DELETE')
                                <button type="submit" class="btn icon btn-danger"><i class="bi bi-x"></i></button>
                                </form>

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