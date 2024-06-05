<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $fillable = ['cedula', 'nombre'];

    public function vehiculos()
    {
        return $this->belongsToMany(Vehiculo::class, 'persona_vehiculo');
    }

    public function accidentes()
    {
        return $this->belongsToMany(Accidente::class, 'persona_accidente');
    }
}
