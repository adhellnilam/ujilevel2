<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';

    protected $fillable = [
        'nama','guru_id',
    ];

    public function guru(){
        return $this->belongsTo(guru::class,'guru_id','id');
    }
}
