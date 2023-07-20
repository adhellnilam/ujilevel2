<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    use HasFactory;

    protected $table = 'guru';

    protected $fillable = [
        'nama','nipd','mapel_id','nomor_telepon','alamat','jenis_kelamin'
    ];

    public function kelas(){
        return $this->belongsTo(kelas::class,'guru_id','id');
    }

    public function mapel(){
        return $this->belongsTo(mapel::class,'mapel_id','id');
    }

}
