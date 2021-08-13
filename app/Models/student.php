<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class student extends Authenticatable
{
    use HasApiTokens, HasFactory;
    protected $table = "_students";
    protected $fillable = ['name', 'password', 'level', 'depart'];
}
