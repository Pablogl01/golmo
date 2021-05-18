<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagenes;
use App\Models\CarModel;
use App\Models\Variante;

class UserModelController extends Controller
{
    public function previsualizar(Request $request,$id){
        $col = json_decode($request->color);
        $llanta = json_decode($request->llanta);
        $motor = json_decode($request->motor);
        $audio = json_decode($request->audio);
        $acabado = json_decode($request->acabado);

        $imagen = Imagenes::where('model_id',$id)->where('color',$col->id)->where('llanta',$llanta->id)->get();
        $carmodel= CarModel::where("id",$id)->get();
        $color = Variante::where("type","Color")->where("gama_id",$carmodel[0]->gama_id)->get();
        $llantas = Variante::where("type","Llanta")->where("gama_id",$carmodel[0]->gama_id)->get();
        $motores = Variante::where("type","Motor")->where("gama_id",$carmodel[0]->gama_id)->get();
        $audios = Variante::where("type","Audio")->where("gama_id",$carmodel[0]->gama_id)->get();
        $acabados = Variante::where("type","Acabados")->where("gama_id",$carmodel[0]->gama_id)->get();
        $precio  = $col->price + $llanta->price + $motor->price + $audio->price + $acabado->price + $carmodel[0]->price ;
        return view('personalizar',compact('carmodel','imagen','color','llantas','motores','audios','acabados','precio'));
    }

    public function guardarperso(Request $request){
        User_Model::create(['name'=>$request->nombre,
        'price'=>$request->precio,
        'gama_id'=>$gamaid[0]->id,
        'description'=>$request->description,
        'autonomia'=>$request->autonomia,
        'aceleracion'=>$request->aceleracion,
        'velocidad_maxima'=>$request->velocidad_maxima,
        'caballos'=>$request->caballos,
        'coeficiente'=>$request->coeficiente,
        'tren_motriz'=>$request->tren_motriz,
        'llantas'=>$request->llantas,
        'capacidad'=>$request->capacidad,
        'maletero'=>$request->maletero,
        'peso'=>$request->peso,
        'description2'=>$request->description2,
        ]);
    }
}
