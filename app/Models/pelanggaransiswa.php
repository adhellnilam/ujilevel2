<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggaransiswa extends Model
{
    use HasFactory;

    protected $table = 'pelanggaran_siswa';

    protected $fillable = [
        'siswa_id','pelanggaran_id'
    ];

    public function siswa(){
        return $this->belongsTo(siswa::class,'siswa_id','id');
    }

    public function pelanggaran(){
        return $this->belongsTo(pelanggaran::class,'pelanggaran_id','id');
    }

    public function guru(){
        return $this->belongsTo(guru::class,'guru_id','id');
    }
}
