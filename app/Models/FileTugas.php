<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileTugas extends Model
{
    use HasFactory;
    protected $table = 'file_tugas';
    protected $hidden = ['id'];

    public function pertemuan(){
        return $this->belongsTo(Pertemuan::class);
    }

    public function jenisTugas(){
        return $this->belongsTo(JenisTugas::class);
    }

    public function storeFilePraktikan(){
        return $this->hasMany(JenisTugas::class);
    }
}
