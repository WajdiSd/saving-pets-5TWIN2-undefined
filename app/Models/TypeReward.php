<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeReward extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'description'
    ];

    public function rewards()
    {
        return $this->hasMany(Reward::class);
    }
}