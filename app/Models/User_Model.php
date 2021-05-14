<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Model extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'model_id',
        'llanta',
        'color',
        'motor',
        'audio',
        'acabados',
        'total_price',
    ];
}
