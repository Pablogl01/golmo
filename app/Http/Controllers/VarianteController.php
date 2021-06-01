<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Variante;
use App\Models\User_Model;
use App\Models\Gama;
use App\Models\Imagenes;

class VarianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function gestionvariantes(){
        $variantes= Variante::all();
        return view('gestionvariantes',compact('variantes'));
    }

    public function subirvariante(){
        $gama = Gama::all();
        return view('subirvariante',compact('gama'));
    }

    public function nuevavariante(Request $request){
        $path=$request->file('imagen')->store('imagenes','public');
        Variante::create(['type'=>$request->tipo,
        'name'=>$request->nombre,
        'image'=>$path,
        'price'=>$request->precio,
        'gama_id'=>$request->gamas
        ]);
        return $this->gestionvariantes();
    }

    public function eliminarvariante($id){
        $variante = Variante::where("id",$id);
        if($variante->get()[0]->type == "Color"){
            $imagenes = Imagenes::where("color",$id);
            foreach($imagenes->get() as $imagen){
                $path = $imagen->url;
                unlink(public_path("storage/".$path));
            }
            $imagenes->delete();
        }elseif($variante->get()[0]->type == "Llanta"){
            $imagenes = Imagenes::where("llanta",$id);
            foreach($imagenes->get() as $imagen){
                $path = $imagen->url;
                unlink(public_path("storage/".$path));
                
            }
            $imagenes->delete();
        }  
            $path = $variante->get()[0]->image;
            unlink(public_path("storage/".$path));
            $variante->delete();
            return $this->gestionvariantes();
    }

    public function editarvariante($id){
        $variante = Variante::find($id);
        return view('editvar',compact('variante'));
    }

    public function saveeditvariante(Request $request,$id){
        $variante = Variante::find($id);
        $path=$request->file('imagen')->store('imagenes','public');
        $variante->update(['name'=>$request->nombre,
            'image'=>$path,
            'type'=>$request->tipo
        ]);
        return $this->gestionvariantes();
    }
}
