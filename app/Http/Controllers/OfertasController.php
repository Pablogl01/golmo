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
        $ofertas= Ofertas::where("status",1)->get();
        $users = [];
        foreach($ofertas as $oferta){
            array_push($users,User::find($ofertas[0]->user_id)->email);
        }
        return view('gestionofertas',compact('ofertas','users'));
    }

    public function misofertas(){
        $ofertas = Ofertas::where('user_id',Auth::user()->id)->get();
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
        $user = User::where("id",$oferta->user_id)->get()[0];
        $me = Auth::user()->role_id;
        return view('veroferta',compact('oferta','carmodel','user','me'));
    }

    public function aceptaroferta($oferta){  
        $oferta = Ofertas::find($oferta);
        $oferta->update(["status"=>2]);
        return $this->gestionofertas();
    }

    public function rechazaroferta($oferta){  
        $oferta = Ofertas::find($oferta);
        $oferta->update(["status"=>3]);
        return $this->gestionofertas();
    }
}

