<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ofertas;
use App\Models\CarModel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class OfertasController extends Controller
{

    public function gestionofertas(){
        $ofertas= Ofertas::all();
        return view('gestionofertas',compact('ofertas'));
    }

    public function misofertas(){
        $ofertas = Ofertas::all();
        return view('misofertas',compact('ofertas'));
    }

    public function realizaroferta(){
        $models = CarModel::all();
        $user = Auth::user();
        return view('realizaroferta',compact('models','user'));
    }

    public function nuevaoferta(request $request){
        Ofertas::create(["user_id"=>Auth::user()->id,
            "type"=>$request->tipo_s,
            "model_id"=>$request->modelo,
            "data_protect"=>true,
            "status"=>1
        ]);
        return $this->misofertas();
    }

    public function veroferta($oferta){
        $oferta = Ofertas::find($oferta);
        $carmodel = CarModel::where("id",$oferta->model_id)->get()[0]->name;
        $user = User::find($oferta->user_id)->get()[0];
        return view('veroferta',compact('oferta','carmodel','user'));
    }
}

