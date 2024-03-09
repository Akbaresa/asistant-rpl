<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggaran extends Model
{
    use HasFactory;
    protected $table = 'pelanggaran';
    protected $hidden = ['id'];

    public function praktikan(){
        return $this->belongsTo(Praktikan::class);
    }

    public function kegiatanPraktikum(){
        return $this->belongsTo(KegiatanPraktikum::class);
    }
}
