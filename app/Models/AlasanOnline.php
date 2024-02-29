<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlasanOnline extends Model
{
    use HasFactory;

    protected $table = 'alasan_online';
    protected $hidden = ['id'];

}
