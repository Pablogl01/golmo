<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variante extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'name',
        'image',
        'price',
        'gama_id',
    ];
}
