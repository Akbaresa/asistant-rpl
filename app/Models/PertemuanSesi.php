<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PertemuanSesi extends Model
{
    use HasFactory;
    protected $table = 'pertemuan_sesi';
    protected $hidden = ['id'];
}
