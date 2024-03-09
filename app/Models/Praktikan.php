<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class Praktikan extends Model implements AuthenticatableContract
{
    use HasFactory;
    use Authenticatable;
    protected $table = 'praktikan';
    protected $hidden = ['id'];

    public function registrasiPraktikum(){
        return $this->hasMany(RegistrasiPraktikum::class);
    }

    public function profile(){
        return $this->hasOne(Profile::class);
    }

    public function penilaian(){
        return $this->hasMany(Penilaian::class);
    }

    public function pelanggaran(){
        return $this->hasMany(Pelanggaran::class);
    }
}
