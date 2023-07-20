@extends('layouts/app')

@section('title','Table Kelas')

@section('content')
<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Kelas</h3><br>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kelas</li>
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
<a href="/table-kelas/add_data" class="btn btn-primary">+ Add</a><br><br>
 <!-- Basic Tables start -->
 <section class="section">
     <div class="card">
         <div class="card-header">
             Table Kelas
         </div>
         <div class="card-body">
             <table class="table" id="table1">
                 <thead>
                     <tr>
                         <th>Id</th>
                         <th>Kelas</th>
                         <th>Wali Kelas</th>
                         <th>Action</th>
                     </tr>
                 </thead>
                 <tbody>
                    @foreach ($kelas as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->guru->nama }}</td>
                            <td style="display: flex; column-gap: 7px;">
                                <a href="/kelas/update_data/{{ $item->id }}" class="btn icon btn-primary"><i class="bi bi-pencil"></i></a>

                                <form action="/kelas/destroy/{{ $item->id }}" method="POST" onsubmit="return confirm('Are You Sure?')">
                                    @csrf
                                    @method('DELETE')
                                <button type="submit" class="btn icon btn-danger"><i class="bi bi-x"></i></button>
                                </form>

                                <a href="/kelas/detail/{{ $item->id }}" class="btn icon btn-info"><i class="bi bi-file-earmark"></i></a>
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