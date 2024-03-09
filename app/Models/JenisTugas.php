<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisTugas extends Model
{
    use HasFactory;
    protected $table = 'jenis_tugas';
    protected $hidden = ['id'];

    public function fileTugas(){
        return $this->hasMany(FileTugas::class);
    }
}
