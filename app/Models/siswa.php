<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';

    protected $fillable = [
        'nama','nis','kelas_id','alamat','nomor_telepon','jenis_kelamin','point',
    ];

    public function kelas(){
        return $this->belongsTo(kelas::class,'kelas_id','id');
    }

    public function violation(){
        return $this->hasMany(pelanggaransiswa::class,'siswa_id','id');
    }
}
