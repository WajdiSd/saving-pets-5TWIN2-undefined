<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veterinarian extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'phone', 'email'];


    public function sterilizations()
    {
        return $this->hasMany(Sterilization::class, "veto_id");
    }
}
