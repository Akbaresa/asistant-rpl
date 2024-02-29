<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PertemuanModul extends Model
{
    use HasFactory;
    protected $table = 'pertemuan_modul';
    protected $hidden = ['id'];
}
