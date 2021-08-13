<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;


class professor extends Model
{
    use HasFactory, HasApiTokens, Notifiable;
    
    protected $guarded = [];

    protected $fillable =['prof_name','email','password'];
    public function subjects()
    {
        return $this->hasMany(subject::class);
    }
    
}
