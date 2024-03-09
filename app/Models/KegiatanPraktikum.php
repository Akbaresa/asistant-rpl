<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanPraktikum extends Model
{
    use HasFactory;
    protected $table = 'kegiatan_praktikum';
    protected $hidden = ['id'];

    public function pertemuan(){
        return $this->belongsTo(Pertemuan::class);
    }

    public function pelanggaran(){
        return $this->hasMany(Pelanggaran::class);
    }

    public function sesi(){
        return $this->belongsTo(Sesi::class);
    }

    public function storeFilePraktikan(){
        return $this->hasMany(StoreFilePraktikan::class);
    }

    public function soalPraktikum(){
        return $this->hasMany(Soal::class);
    }

    public function template(){
        return $this->hasOne(Template::class);
    }
}
