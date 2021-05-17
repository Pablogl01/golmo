<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Variante;
use App\Models\User_Model;
use App\Models\Gama;
use App\Models\Imagenes;

class ImagenesController extends Controller
{
    public function nuevaimagen(Request $request){
        dd($request->llanta);
        $path=$request->file('url')->store('imagenes','public');
        Imagenes::create(['name'=>$request->nombre,
        'model_id'=>$request->modelo,
        'url'=>$path,
        'color'=>$request->color,
        'llanta'=>$request->llanta
        ]);
        return $this->gestionvariantes();
    }
}
