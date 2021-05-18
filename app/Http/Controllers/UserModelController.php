<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagenes;
use App\Models\CarModel;
use App\Models\Variante;

class UserModelController extends Controller
{
    public function previsualizar(Request $request,$id){
        
        $color = $request->color;
        $llanta = $request->llanta;
        $imagen = Imagenes::where('model_id',$id)->where('color',$color)->where('llanta',$llanta)->get();
        $carmodel= CarModel::where("id",$id)->get();
        $color = Variante::where("type","Color")->where("gama_id",$carmodel[0]->gama_id)->get();
        $llantas = Variante::where("type","Llanta")->where("gama_id",$carmodel[0]->gama_id)->get();
        return view('personalizar',compact('carmodel','imagen','color','llantas'));

    }

    public function guardarperso(Request $request){
        dd("adios");
    }
}
