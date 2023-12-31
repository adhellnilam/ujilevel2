@extends('layouts/app')

@section('title','Dashboard')

@section('content')
<div class="page-heading">
    <h3>Data Statistik</h3>
</div>
<div class="page-content">
<section class="row">
 <div class="col-12 col-lg-9">
     <div class="row">
         <div class="col-6 col-lg-3 col-md-6">
             <div class="card">
                 <div class="card-body px-4 py-4-5">
                     <div class="row">
                         <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                             <div class="stats-icon purple mb-2">
                                 <i class="iconly-boldShow"></i>
                             </div>
                         </div>
                         <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                             <h6 class="text-muted font-semibold">Total Siswa</h6>
                             <h6 class="font-extrabold mb-0">345</h6>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-6 col-lg-3 col-md-6">
             <div class="card">
                 <div class="card-body px-4 py-4-5">
                     <div class="row">
                         <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                             <div class="stats-icon blue mb-2">
                                 <i class="iconly-boldProfile"></i>
                             </div>
                         </div>
                         <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                             <h6 class="text-muted font-semibold">Total Guru</h6>
                             <h6 class="font-extrabold mb-0">50</h6>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-6 col-lg-3 col-md-6">
             <div class="card">
                 <div class="card-body px-4 py-4-5">
                     <div class="row">
                         <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                             <div class="stats-icon green mb-2">
                                 <i class="iconly-boldAdd-User"></i>
                             </div>
                         </div>
                         <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                             <h6 class="text-muted font-semibold">Total Pelanggaran</h6>
                             <h6 class="font-extrabold mb-0">24</h6>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-6 col-lg-3 col-md-6">
             <div class="card">
                 <div class="card-body px-4 py-4-5">
                     <div class="row">
                         <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                             <div class="stats-icon red mb-2">
                                 <i class="iconly-boldBookmark"></i>
                             </div>
                         </div>
                         <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                             <h6 class="text-muted font-semibold">Semua Data</h6>
                             <h6 class="font-extrabold mb-0">500</h6>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="row">
         <div class="col-12">
             <div class="card">
                 <div class="card-header">
                     <h4>Profil Visit</h4>
                 </div>
                 <div class="card-body">
                     <div id="chart-profile-visit"></div>
                 </div>
             </div>
         </div>
     </div>
     <div class="row">
         <div class="col-12 col-xl-4">
             <div class="card">
                 <div class="card-header">
                     <h4>Profil Visit</h4>
                 </div>
                 <div class="card-body">
                     <div class="row">
                         <div class="col-6">
                             <div class="d-flex align-items-center">
                                 <svg class="bi text-success" width="32" height="32" fill="blue"
                                     style="width:10px">
                                     <use
                                         xlink:href="assets/images/bootstrap-icons.svg#circle-fill" />
                                 </svg>
                                 <h5 class="mb-0 ms-3">Laki Laki</h5>
                             </div>
                         </div>
                         <div class="col-6">
                             <h5 class="mb-0">375</h5>
                         </div>
                         <div class="col-12">
                             <div id="chart-america"></div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-6">
                             <div class="d-flex align-items-center">
                                 <svg class="bi text-danger" width="32" height="32" fill="blue"
                                     style="width:10px">
                                     <use
                                         xlink:href="assets/images/bootstrap-icons.svg#circle-fill" />
                                 </svg>
                                 <h5 class="mb-0 ms-3">Perempuan</h5>
                             </div>
                         </div>
                         <div class="col-6">
                             <h5 class="mb-0">1025</h5>
                         </div>
                         <div class="col-12">
                             <div id="chart-indonesia"></div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-12 col-xl-8">
             <div class="card">
                 <div class="card-header">
                     <h4>Komentar Belakangan Ini</h4>
                 </div>
                 <div class="card-body">
                     <div class="table-responsive">
                         <table class="table table-hover table-lg">
                             <thead>
                                 <tr>
                                     <th>Nama</th>
                                     <th>Komentar</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                     <td class="col-3">
                                         <div class="d-flex align-items-center">
                                             <div class="avatar avatar-md">
                                                 <img src="assets/images/faces/5.jpg">
                                             </div>
                                             <p class="font-bold ms-3 mb-0">Si Cantik</p>
                                         </div>
                                     </td>
                                     <td class="col-auto">
                                         <p class=" mb-0">Selamat Atas Kelulusanmu!</p>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td class="col-3">
                                         <div class="d-flex align-items-center">
                                             <div class="avatar avatar-md">
                                                 <img src="assets/images/faces/2.jpg">
                                             </div>
                                             <p class="font-bold ms-3 mb-0">Si Ganteng</p>
                                         </div>
                                     </td>
                                     <td class="col-auto">
                                         <p class=" mb-0">Selamat Atas Kelulusanmu!</p>
                                     </td>
                                 </tr>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <div class="col-12 col-lg-3">
     <div class="card">
         <div class="card-body py-4 px-4">
             <div class="d-flex align-items-center">
                 <div class="avatar avatar-xl">
                     <img src="assets/images/faces/1.jpg" alt="Face 1">
                 </div>
                 <div class="ms-3 name">
                     <h5 class="font-bold">John Duck</h5>
                     <h6 class="text-muted mb-0">@johnducky</h6>
                 </div>
             </div>
         </div>
     </div>
     <div class="card">
         <div class="card-header">
             <h4>Recent Messages</h4>
         </div>
         <div class="card-content pb-4">
             <div class="recent-message d-flex px-4 py-3">
                 <div class="avatar avatar-lg">
                     <img src="assets/images/faces/4.jpg">
                 </div>
                 <div class="name ms-4">
                     <h5 class="mb-1">Hank Schrader</h5>
                     <h6 class="text-muted mb-0">@johnducky</h6>
                 </div>
             </div>
             <div class="recent-message d-flex px-4 py-3">
                 <div class="avatar avatar-lg">
                     <img src="assets/images/faces/5.jpg">
                 </div>
                 <div class="name ms-4">
                     <h5 class="mb-1">Dean Winchester</h5>
                     <h6 class="text-muted mb-0">@imdean</h6>
                 </div>
             </div>
             <div class="recent-message d-flex px-4 py-3">
                 <div class="avatar avatar-lg">
                     <img src="assets/images/faces/1.jpg">
                 </div>
                 <div class="name ms-4">
                     <h5 class="mb-1">John Dodol</h5>
                     <h6 class="text-muted mb-0">@dodoljohn</h6>
                 </div>
             </div>
             <div class="px-4">
                 <button class='btn btn-block btn-xl btn-outline-primary font-bold mt-3'>Start Conversation</button>
             </div>
         </div>
     </div>
     <div class="card">
         <div class="card-header">
             <h4>Visitors Profile</h4>
         </div>
         <div class="card-body">
             <div id="chart-visitors-profile"></div>
         </div>
     </div>
 </div>
</section>
</div>
@endsection