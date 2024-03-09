<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PapanInformasi extends Model
{
    use HasFactory;
    protected $table = 'papan_informasi';
    protected $hidden = ['id'];

    public function praktikum(){
        return $this->belongsTo(Praktikum::class);
    }
}
