<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileTugas extends Model
{
    use HasFactory;
    protected $table = 'file_tugas';
    protected $hidden = ['id'];
}
