<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrasiPraktikum extends Model
{
    use HasFactory;
    protected $table = 'praktikan_praktikum';
    protected $hidden = ['id'];

    public function praktikum(){
        return $this->belongsTo(Praktikum::class);
    }

    public function praktikan(){
        return $this->belongsTo(Praktikan::class);
    }

    public function aslab(){
        return $this->belongsTo(Aslab::class);
    }
}
