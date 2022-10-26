<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'status'
    ];

    public function enclos()
    {
        return $this->hasMany(Enclos::class);
    }
}
