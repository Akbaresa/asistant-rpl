<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreFilePraktikan extends Model
{
    use HasFactory;
    protected $table = 'store_file_praktikan';
    protected $hidden = ['id'];

    public function penilaian(){
        return $this->hasOne(Penilaian::class);
    }

    public function kegiatanPraktikum(){
        return $this->belongsTo(KegiatanPraktikum::class);
    }

    public function fileTugas(){
        return $this->belongsTo(FileTugas::class);
    }
}
