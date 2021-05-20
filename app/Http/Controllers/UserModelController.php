<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagenes;
use App\Models\CarModel;
use App\Models\Variante;
use App\Models\User_Model;
use Illuminate\Support\Facades\Auth;

class UserModelController extends Controller
{
    public function previsualizar(Request $request,$id){
        $col = json_decode($request->color);
        $llanta = json_decode($request->llanta);
        $motor = json_decode($request->motor);
        $motor = Variante::where("id",$motor)->get();
        $audio = json_decode($request->audio);
        $audio = Variante::where("id",$audio)->get();
        $acabado = json_decode($request->acabado);
        $acabado = Variante::where("id",$acabado)->get();
        $imagen = Imagenes::where('model_id',$id)->where('color',$col)->where('llanta',$llanta)->get();
        $carmodel= CarModel::where("id",$id)->get();
        $color = Variante::where("type","Color")->where("gama_id",$carmodel[0]->gama_id)->get();
        $llantas = Variante::where("type","Llanta")->where("gama_id",$carmodel[0]->gama_id)->get();
        $motores = Variante::where("type","Motor")->where("gama_id",$carmodel[0]->gama_id)->get();
        $audios = Variante::where("type","Audio")->where("gama_id",$carmodel[0]->gama_id)->get();
        $acabados = Variante::where("type","Acabados")->where("gama_id",$carmodel[0]->gama_id)->get();
        $col = Variante::where("id",$col)->get();
        $llanta = Variante::where("id",$llanta)->get();
        $precio  = $col[0]->price + $llanta[0]->price + $motor[0]->price + $audio[0]->price + $acabado[0]->price + $carmodel[0]->price ;
        return view('personalizar',compact('carmodel','imagen','color','llantas','motores','audios','acabados','precio'));
    }

    public function guardarperso(Request $request,$model_id){
        User_Model::create(['user_id'=>Auth::user()->id,
        'model_id'=>$model_id,
        'llanta'=>$request->llanta,
        'color'=>$request->color,
        'motor'=>$request->motor,
        'audio'=>$request->audio,
        'acabados'=>$request->acabado,
        'total_price'=>$request->precio,
        ]);
    }
}
