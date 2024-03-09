<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Praktikum extends Model
{
    use HasFactory;
    protected $table = 'praktikum';
    protected $hidden = ['id'];

    public function pertemuan(){
        return $this->hasMany(Pertemuan::class);
    }

    public function jenisPraktikum(){
        return $this->belongsTo(jenisPraktikum::class);
    }

    public function papanInformasi(){
        return $this->hasMany(PapanInformasi::class);
    }

    public function registrasiPraktikum(){
        return $this->hasMany(RegistrasiPraktikum::class);
    }
}
