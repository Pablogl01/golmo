<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Variante;
use App\Models\User_Model;
use App\Models\Gama;
use App\Models\Imagenes;
use App\Models\CarModel;

class ImagenesController extends Controller
{
    public function nuevaimagen(Request $request){
        $path=$request->file('url')->store('imagenes','public');
        Imagenes::create(['name'=>$request->nombre,
        'model_id'=>$request->modelo,
        'url'=>$path,
        'color'=>$request->color,
        'llanta'=>$request->llanta
        ]);
        $modelo = CarModel::where("id",$request->modelo)->get();
        $modelo = $modelo[0];
        $modelo_id = $request->modelo;
        $colores = Variante::where('type','Color')->get();
        $llantas = Variante::where('type','Llanta')->get();
        return view('vistaimagenes',compact('modelo','modelo_id','colores','llantas'));
    }
}
