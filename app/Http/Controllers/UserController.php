<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User_Model;
use App\Models\User;
use App\Models\Role;
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
        return view('gestionusers',compact('users'));
    }

    public function borraruser($id){
        $usermodel = User_Model::where("user_id",$id)->get();
        if(count($usermodel)!=0){
            foreach($usermodel as $per){
                $per->delete();
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

    public function saveedituser(Request $request,$id){
        $nombre = $request->nombre;
        $email = $request->correo;
        $pass = $request->contraseña;
        $rol = $request->rol;
        $user = User::find($id);
        $role_user = DB::table("role_user")->where("user_id",$id);
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
