<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class depart extends Model
{
    use HasFactory;
    protected $table = "_departs";
    protected $fillable = ['depart_name',
   'headId'];

    public function subjects()
    {
        return $this->hasMany(subject::class);
    }
}
