<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\professor;
use App\Models\depart;
use App\Models\level;


class subject extends Model
{
    use HasFactory;
    protected $table = '_subjects';

    public function prof()
    {
        return $this->belongsTo(professor::class);
    }
    public function level()
    {
        return $this->belongsTo(level::class);
    }
    public function depart()
    {
        return $this->belongsTo(depart::class);
    }
}
