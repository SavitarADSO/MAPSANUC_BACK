<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produccion extends Model
{
    use HasFactory;

    protected $fillable = [
        'categorías', 'productos', 'descripcion', 'asociado_id'
    ];

    public function asociado()
    {
        return $this->belongsTo(Asociado::class);
    }
}
