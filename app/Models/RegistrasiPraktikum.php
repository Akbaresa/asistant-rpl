<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrasiPraktikum extends Model
{
    use HasFactory;
    protected $table = 'praktikan_praktikum';
    protected $hidden = ['id'];
}
