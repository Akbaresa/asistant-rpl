<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;
    protected $table = 'penilaian';
    protected $hidden = ['id'];

    public function praktikan(){
        return $this->belongsTo(Praktikan::class);
    }

    public function alasanOnline(){
        return $this->hasOne(AlasanOnline::class);
    }

    public function storeFilePraktikan(){
        return $this->belongsTo(StoreFilePraktikan::class);
    }
}
