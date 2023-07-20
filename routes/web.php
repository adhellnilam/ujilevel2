<?php

use App\Http\Controllers\datalaporancontroller;
use App\Http\Controllers\datapelanggarancontroller;
use App\Http\Controllers\gurucontroller;
use App\Http\Controllers\kelascontroller;
use App\Http\Controllers\laporancontroller;
use App\Http\Controllers\pelanggarancontroller;
use App\Http\Controllers\pelanggaransiswacontroller;
use App\Http\Controllers\siswacontroller;
use App\Models\datapelanggaran;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/', function () {
    return view('dashboard.dashboard',[
        "title"=>"dashboard"
    ]);
});

//student
Route::get('/table-siswa',[siswacontroller::class, 'index']);
Route::get('/table-siswa/add_data',[siswacontroller::class, 'create']);
Route::post('/table-siswa/add_data',[siswacontroller::class,'store']);
Route::get('/siswa/detail/{id}',[siswacontroller::class,'show']);
Route::delete('/siswa/destroy/{id}',[siswacontroller::class,'destroy']);
Route::get('/siswa/update_data/{id}',[siswacontroller::class,'edit']);
Route::post('/siswa/update_data/{id}',[siswacontroller::class,'update']);

//guru
Route::get('/table-guru',[gurucontroller::class, 'index']);
Route::get('/table-guru/add_data',[gurucontroller::class, 'create']);
Route::post('/table-guru/add_data',[gurucontroller::class,'store']);
Route::get('/guru/detail/{id}',[gurucontroller::class,'show']);
Route::delete('/guru/destroy/{id}',[gurucontroller::class,'destroy']);
Route::get('/guru/update_data/{id}',[gurucontroller::class,'edit']);
Route::post('/guru/update_data/{id}',[gurucontroller::class,'update']);

//kelas
Route::get('/table-kelas',[kelascontroller::class, 'index']);
Route::get('/table-kelas/add_data',[kelascontroller::class, 'create']);
Route::post('/table-kelas/add_data',[kelascontroller::class,'store']);
Route::get('/kelas/detail/{id}',[kelascontroller::class,'show']);
Route::delete('/kelas/destroy/{id}',[kelascontroller::class,'destroy']);
Route::get('/kelas/update_data/{id}',[kelascontroller::class,'edit']);
Route::post('/kelas/update_data/{id}',[kelascontroller::class,'update']);

//pelanggaran
Route::get('/table-pelanggaran',[pelanggarancontroller::class, 'index']);
Route::get('/table-pelanggaran/add_data',[pelanggarancontroller::class, 'create']);
Route::post('/table-pelanggaran/add_data',[pelanggarancontroller::class,'store']);
Route::get('/pelanggaran/detail/{id}',[pelanggarancontroller::class,'show']);
Route::delete('/pelanggaran/destroy/{id}',[pelanggarancontroller::class,'destroy']);
Route::get('/pelanggaran/update_data/{id}',[pelanggarancontroller::class,'edit']);
Route::post('/pelanggaran/update_data/{id}',[pelanggarancontroller::class,'update']);

//datapelangggaran
Route::get('/table-datapelanggaran',[pelanggaransiswacontroller::class, 'index']);
Route::get('/table-datapelanggaran/add_data',[pelanggaransiswacontroller::class, 'create']);
Route::post('/table-datapelanggaran/add_data',[pelanggaransiswacontroller::class,'store']);
Route::get('/datapelanggaran/detail/{id}',[pelanggaransiswacontroller::class,'show']);
Route::delete('/datapelanggaran/destroy/{id}',[pelanggaransiswacontroller::class,'destroy']);
Route::get('/datapelanggaran/update_data/{id}',[pelanggaransiswacontroller::class,'edit']);
Route::post('/datapelanggaran/update_data/{id}',[pelanggaransiswacontroller::class,'update']);

//pelanggaran siswa
Route::get('/table-pelanggaransiswa',[pelanggaransiswacontroller::class, 'index']);
Route::get('/table-pelanggaransiswa/add_data',[pelanggaransiswacontroller::class, 'create']);
Route::post('/table-pelanggaransiswa/add_data',[pelanggaransiswacontroller::class,'store']);
Route::get('/pelanggaransiswa/detail/{id}',[pelanggaransiswacontroller::class,'show']);
Route::delete('/pelanggaransiswa/destroy/{id}',[pelanggaransiswacontroller::class,'destroy']);
Route::get('/pelanggaransiswa/update_data/{id}',[pelanggaransiswacontroller::class,'edit']);
Route::post('/pelanggaransiswa/update_data/{id}',[pelanggaransiswacontroller::class,'update']);