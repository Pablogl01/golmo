<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarModel;
use App\Models\Imagenes;
use App\Models\Variante;

class PersonalizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for creating a new resource.
     *
     * @returnminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
