<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User_Model;
use App\Models\User;
use App\Models\Role;
use App\Models\Ofertas;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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

    public function gender($num){
        switch ($num) {
            case 0:
                return "Sin genero";
                break;
            case 1:
                return "Hombre";
                break;
            case 2:
                return "Mujer";
                break;
        }
    }

    public function profile()
    {
        $user = Auth::user();
        $rol = Role::where("id",$user->role_id)->get();
        $rol = $rol[0]->role;
        $gender = $this->gender($user->gender);
        return view('profile',compact('user','rol','gender'));
    }

    

    public function gestionusers(){
        $users= User::all();
        $roles = Role::all();
        return view('gestionusers',compact('users','roles'));
    }

    public function borraruser($id){
        $usermodel = User_Model::where("user_id",$id)->get();
        $ofertas = Ofertas::where("user_id",$id)->get();
        if(count($usermodel)!=0){
            foreach($usermodel as $per){
                $per->delete();
            }
        }
        if(count($ofertas) != 0){
            foreach($ofertas as $oferta){
                $oferta->delete();
            }
        }
        $role_user = DB::table("role_user")->where("user_id",$id);
        $role_user->delete();
        $user = User::where("id",$id);
        $user->delete();
        return $this->gestionusers();
    }

    public function edituser($id){
        $user = User::where("id",$id)->get();
        $roles = Role::all();
        return view('edituser',compact('user','roles'));
    }

    public function saveedituser(Request $request){
        $nombre = $request->nombre;
        $email = $request->correo;
        $pass = $request->contraseña;
        $rol = $request->rol;
        $user = User::find($request->id);
        $role_user = DB::table("role_user")->where("user_id",$request->id);
        if($pass==null){
            $user->update(['name'=>$nombre,
                'email'=>$email,
                'role_id'=>$rol
            ]);
            $role_user->update(['role_id'=>$rol]);
        }
        else{
            $user->update(['name'=>$nombre,
                'email'=>$email,
                'password'=>Hash::make($pass),
                'role_id'=>$rol
            ]);
            $role_user->update(['role_id'=>$rol]);
        }
        return $this->gestionusers();
        
    }

    public function seguridad(){
        $user = Auth::user();
        return view('seguridad',compact('user'));
    }

    public function borrarmicuenta(){
        $user = Auth::user();
        $usermodel = User_Model::where("user_id",$user->id)->get();
        $ofertas = Ofertas::where('user_id',$user->id)->get();
        if(count($usermodel)!=0){
            foreach($usermodel as $per){
                $per->delete();
            }
        }
        if(count($ofertas)!=0){
            foreach($ofertas as $oferta){
                $oferta->delete();
            }
        }
        $role_user = DB::table("role_user")->where("user_id",$user->id);
        $role_user->delete();
        $user->delete();
        return view('auth/login');
    }

    public function editarmiperfil(){
        $user = Auth::user();
        return view('editarmiperfil',compact('user'));
    }

    public function saveeditmiperfil(Request $request){
        $user = Auth::user();
        if($request->contraseña==null){
            $user->update(['name'=>$request->nombre,
                'email'=>$request->correo,
                'gender'=>$request->gender,
                'direccion'=>$request->direccion,
                'birthdate'=>$request->nacimiento,
                'phone_number'=>$request->telefono
            ]);
        }
        else{
            $user->update(['name'=>$request->nombre,
                'email'=>$request->correo,
                'password'=>Hash::make($request->contraseña),
                'gender'=>$request->gender,
                'direccion'=>$request->direccion,
                'birthdate'=>$request->nacimiento,
                'phone_number'=>$request->telefono
            ]);  
        }
        return $this->profile();
    }

    public function privacidad(){
        return view('privacidad');
    }

    public function nosotros(){
        return view('nosotros');
    }

    public function intercambio(){
        return view('intercambio');
    }
}
