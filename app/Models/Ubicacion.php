<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'vereda', 'nombre_finca', 'latitude', 'longitude', 
        'hectareas', 'tipo_finca', 'asociado_id'
    ];

    public function asociado()
    {
        return $this->belongsTo(Asociado::class);
    }
}
