<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeVaccine extends Model
{
    use HasFactory;
  protected $fillable = [
    'type',
    'duration'
  ];
  public function vaccines()
  {
    return $this->hasMany(Vaccine::class,"type_vaccine_id");
  }
}
