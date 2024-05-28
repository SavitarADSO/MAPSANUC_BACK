<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'ubicacions';

    public function asociado()
    {
        return $this->belongsTo(Asociado::class, 'asociado_id', 'id');
    }
}
