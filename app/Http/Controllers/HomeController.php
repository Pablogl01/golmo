<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User_Model;
use App\Models\CarModel;
use App\Models\User;
use App\Models\Role;
use App\Models\Imagenes;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin']);
        $carmodel = CarModel::all();
        $image = [];
        foreach($carmodel as $car){
            $imagen = Imagenes::where("model_id",$car->id)->where("name","base")->get();
            $image[] .= $imagen[0]->url;
        }
        return view('home',compact('carmodel','image'));
    }
}
