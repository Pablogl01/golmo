<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarModel;
use App\Models\Gama;
use App\Http\Controllers\ImagenesController;
use App\Models\Variante;
use App\Models\Imagenes;
use App\Models\Ofertas;
use App\Models\User_Model;
use App\Models\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CarModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index($id)
    {
        $carmodel= CarModel::where("id",$id)->get();
        $imagenbase = Imagenes::where("model_id",$id)->where("name","base")->get()[0]->url;
        $imagennegra = Imagenes::where("model_id",$id)->where("name","frentenegro")->get()[0]->url;
        $imagenizquierda = Imagenes::where("model_id",$id)->where("name","izquierda")->get()[0]->url;
        $imagenderecha = Imagenes::where("model_id",$id)->where("name","derecha")->get()[0]->url;
        return view('infomodelo',compact('carmodel','imagenbase','imagennegra','imagenizquierda','imagenderecha'));
    }

    public function gestionmodelos(){
        $carmodel= CarModel::all();
        $image = [];
        foreach($carmodel as $car){
            $imagen = Imagenes::where("model_id",$car->id)->where("name","base")->get();
            $image[] .= $imagen[0]->url;
        }
        return view('gestionmodelos',compact('carmodel','image'));
    }

    public function subirmodelo(){
        $gamas = Gama::all();
        return view('subirmodelo',compact('gamas'));
    }

    public function nuevomodelo(Request $request){
        $gamaid = Gama::where("name",$request->gamas)->get();
        CarModel::create(['name'=>$request->nombre,
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
        $modelo = CarModel::all()->last();
        Log::create([
            'user_id'=>Auth::user()->id,
            'action'=>"create",
            'model_id'=>$modelo->id
        ]);
        $gamaid = $gamaid[0]->id;
        $modelo_id = $modelo->id;
        $colores = Variante::where('type','Color')->where('gama_id',$gamaid)->get();
        $llantas = Variante::where('type','Llanta')->where('gama_id',$gamaid)->get();
        return view('vistaimagenes',compact('modelo','modelo_id','colores','llantas','gamaid'));
    }

    public function editarmodelo($id){
        $carmodel= CarModel::where("id",$id)->get();
        $imagenes = Imagenes::where("model_id",$id)->get();
        return view('editarmodelo',compact('carmodel','imagenes'));
    }

    public function borrarmodelo($id){
        Log::create([
            'user_id'=>Auth::user()->id,
            'action'=>"delete",
            'model_id'=>$id
        ]);
        $ofertas = Ofertas::where("model_id",$id);
        foreach($ofertas->get() as $oferta){
            $oferta->delete();
        }
        $usermodels = User_Model::where("model_id",$id);
        foreach($usermodels->get() as $usermodel){
            $usermodel->delete();
        }
        $imagenes = Imagenes::where("model_id",$id);
        foreach($imagenes->get() as $imagen){
            $path = $imagen->url;
            unlink(public_path("storage/".$path));
        }
        $imagenes->delete();
        $carmodel= CarModel::where("id",$id);
        $carmodel->delete();
        return $this->gestionmodelos();
    }

    public function updatemodelinfo(Request $request, $model){
        $model = CarModel::find($model);
        $model->update(['name'=>$request->nombre,
            'price'=>$request->precio,
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
            'description2'=>$request->description2
        ]);
        Log::create([
            'user_id'=>Auth::user()->id,
            'action'=>"edit",
            'model_id'=>$model->id
        ]);
        return $this->gestionmodelos();
    }


    public function logs(){
        $logss = Log::all();
        return view('logs',compact('logss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
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
