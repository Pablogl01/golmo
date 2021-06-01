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
    public function nuevaimagen(Request $request,$gamaid){
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

        $colores = Variante::where('type','Color')->where('gama_id',$gamaid)->get();
        $llantas = Variante::where('type','Llanta')->where('gama_id',$gamaid)->get();
        return view('vistaimagenes',compact('modelo','modelo_id','colores','llantas','gamaid'));
    }

    public function editarimagen($id){
        $imagen = Imagenes::find($id);
        return view('editarimagen',compact('imagen'));
    }

    public function updateimagen(request $request, $imagen){
        $imagen = Imagenes::find($imagen);
        $path=$request->file('url')->store('imagenes','public');
        $imagen->update(['name'=>$request->nombre,
                'url'=>$path,
            ]);
            $car = new CarModelController();
        return $car->gestionmodelos();
    }
}
