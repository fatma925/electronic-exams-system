<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class professor extends Model
{
    use HasFactory, HasApiTokens;
    protected $fillable =['prof_name','email','password'];
    public function subjects()
    {
        return $this->hasMany(subject::class);
    }
    
}
