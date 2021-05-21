<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarModel;
use App\Models\Imagenes;
use App\Models\Variante;

class PersonalizationController extends Controller
{
    
    public function index($id)
    {
        $carmodel= CarModel::where("id",$id)->get();
        $imagen = Imagenes::where("model_id",$id)->get();
        $color = Variante::where("type","Color")->where("gama_id",$carmodel[0]->gama_id)->get();
        $llantas = Variante::where("type","Llanta")->where("gama_id",$carmodel[0]->gama_id)->get();
        $motores = Variante::where("type","Motor")->where("gama_id",$carmodel[0]->gama_id)->get();
        $audios = Variante::where("type","Audio")->where("gama_id",$carmodel[0]->gama_id)->get();
        $acabados = Variante::where("type","Acabados")->where("gama_id",$carmodel[0]->gama_id)->get();
        $precio  = $carmodel[0]->price;
        return view('personalizar',compact('carmodel','imagen','color','llantas','motores','audios','acabados','precio'));
    }
    
}
