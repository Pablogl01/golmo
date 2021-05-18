<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'gama_id',
        'description',
        'autonomia',
        'aceleracion',
        'velocidad_maxima',
        'caballos',
        'coeficiente',
        'tren_motriz',
        'llantas',
        'capacidad',
        'maletero',
        'peso',
        'description2'
    ];
}
