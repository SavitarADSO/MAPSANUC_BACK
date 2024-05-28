<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produccion extends Model
{
    use HasFactory;

    protected $table = 'produccions';

    public function asociado()
    {
        return $this->belongsTo(Asociado::class, 'asociado_id', 'id');
    }

}
