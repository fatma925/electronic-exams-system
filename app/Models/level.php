<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class level extends Model
{
    use HasFactory;
    protected $table = "_levels";
    protected $fillable = [
        'level_name'
    ];

    public function subjects()
    {
        return $this->hasMany(subjects::class);
    }
}
