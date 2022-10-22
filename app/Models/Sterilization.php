<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sterilization extends Model
{
    use HasFactory;

    protected $fillable = ['fee', 'remarks', 'date', 'pet_id', 'veto_id'];


    public function pet()
    {
        return $this->belongsTo(Pet::class, "pet_id");
    }

    public function veterinarian()
    {
        return $this->belongsTo(Veterinarian::class, "veto_id");
    }
}
