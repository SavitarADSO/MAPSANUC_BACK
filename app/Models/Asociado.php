<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asociado extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_completo', 'genero', 'documento', 'celular', 
        'estado_civil', 'fecha_nacimiento', 'nucleo_familiar'
    ];

    public function ubicaciones()
    {
        return $this->hasMany(Ubicacion::class);
    }

    public function producciones()
    {
        return $this->hasMany(Produccion::class);
    }
}
