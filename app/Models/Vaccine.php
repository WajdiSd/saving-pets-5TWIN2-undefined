<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    use HasFactory;
  protected $fillable = [
    'name',
    'validity',
    'quantity',
    'type_vaccine_id'
  ];
    public function typeVaccine()
    {
        return $this->belongsTo(TypeVaccine::class,"type_vaccine_id");
    }

    public function pets()
    {
        return $this->belongsToMany(Pet::class,'pet_vaccines');
    }


}
