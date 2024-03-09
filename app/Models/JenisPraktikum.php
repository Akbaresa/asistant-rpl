<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisPraktikum extends Model
{
    use HasFactory;
    protected $table = 'jenis_praktikum';
    protected $hidden = ['id'];

    public function praktikum(){
        return $this->hasMany(Praktikum::class);
    }
}
