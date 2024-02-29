<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class Aslab extends Model implements AuthenticatableContract
{
    use HasFactory;
    use Authenticatable;
    protected $table = 'aslab';
    protected $hidden = ['id'];

}
