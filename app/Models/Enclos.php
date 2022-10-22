<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enclos extends Model
{
    use HasFactory;

    protected $fillable = [
        'breed',
        'capacity',
        'status'
    ];

    public function local()
    {
        return $this->belongsTo(Local::class);
    }

    public function pets()
    {
        return $this->hasMany(Pet::class);
    }
}
