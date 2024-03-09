<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertemuan extends Model
{
    use HasFactory;
    protected $table = 'pertemuan';
    protected $hidden = ['id'];

    public function pertemuanModul(){
        return $this->hasMany(PertemuanModul::class);
    }

    public function praktikum(){
        return $this->belongsTo(Praktikum::class);
    }

    public function kegiatanPraktikum(){
        return $this->hasMany(KegiatanPraktikum::class);
    }

    public function fileTugas(){
        return $this->hasMany(FileTugas::class);
    }
}
