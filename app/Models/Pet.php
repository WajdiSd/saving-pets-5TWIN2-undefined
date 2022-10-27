<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'race',
        'age',
        'captureDate'

    ];

    public function sterilization()
    {
        return $this->hasOne(Sterilization::class);
    }
    public function enclos()
    {
        return $this->belongsTo(Enclos::class);
    }

    public function vaccines()
    {
        return $this->belongsToMany(Vaccine::class ,'pet_vaccines' );
    }
}
