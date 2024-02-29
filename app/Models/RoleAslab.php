<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleAslab extends Model
{
    use HasFactory;
    protected $table = 'role_aslab';
    protected $hidden = ['id'];
}
