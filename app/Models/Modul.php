<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
    use HasFactory;
    protected $table = 'modul';
    protected $hidden = ['id'];

    public function pertemuanModul(){
        return $this->hasMany(PertemuanModul::class);
    }
}
