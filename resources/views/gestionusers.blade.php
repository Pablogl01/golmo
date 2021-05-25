<?php
    use Illuminate\Support\Facades\Auth;
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script>
    $(document).ready(function(){
        $(".bt1").click(function(){
            var valor = $(this).attr('class').split(" ")[0];
            var p = document.getElementsByClassName(valor);
            var p2 = new Array();
            for(var i = 0; i < (p.length - 1); i++){
                p2.push(p[i].innerText);
            }
            var id = p2[0];
            console.log(id);
            $("#inputid").attr("value",id);
            $("#inputcorreo").attr("value",(p2[1]));
            $("#inputnombre").attr("value",(p2[2]));

            $("#divcontenedorimportante").css({"display":"flex"});

        })
        $("#bt2").click(function(){
            $("#divcontenedorimportante").css({"display":"none"});
        });
    })
</script>
@extends('layouts.app3')

@section('content')
    <div class="container-fluid" style="width:100vw !important;margin:0;padding:0;background-color:#f8f9fa;">
        <div class="d-flex flex-column" style="width:100%">
            <!-- Nav Administrador -->     
            <nav class="navbar navbar-expand-lg navbar-light bg-light navapp" style="padding-bottom:0;padding-left:0;padding-right:0;margin-bottom:0;margin-left:10%;margin-right:10%;">
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('profile')}}">Datos personales</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('gestionmodelos')}}">Gestionar modelos</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #8A8A8A;" href="{{route('gestionusers')}}">Gestionar usuarios</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('gestionofertas')}}">Gestionar solicitudes</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('gestionvariantes')}}">Gestionar variantes</a>
            </nav>
            <div style="z-index:1;position:relative;background-color:#191F22;min-height:calc(100vh - 65px - 53px);width:100%;">
                <div style="margin-left:10%;margin-right:10%;padding-top:25px;">
                    <p class="h3 text-white" style="font-weight: bold;">Gestión de usuarios</p>
                    <p class="text-white">Aquí puede gestionar todos los usuarios de nuestro sistema. </p>
                    <div style="background-color:white;min-height:calc(70vh - 65px - 53px);padding-top:5vh;padding-bottom:5vh;padding-left:3vw;padding-right:3vw;margin-bottom:5vh;width:100%;">
                        <div class="d-flex flex-row" style="width:100%;border-bottom:1px solid #D7D1D1;">
                            <p class="h5" style="color:#969696;text-align:center;width:27.5%;">Correo electrónico</p>
                            <p class="h5" style="color:#969696;text-align:center;width:27.5%;">Nombre de usuario</p>
                            <p class="h5" style="color:#969696;text-align:center;width:10%;">Role</p>
                            <p class="h5" style="color:#969696;text-align:center;width:35%;">Acciones</p>
                        </div>
                        @for($i = 0; $i < count($users);$i++)
                        <div class="d-flex flex-row" style="width:100%;margin-top:35px;">
                            <p class="h6 {{$i}}" style="display:none;visibility:none;">{{ __($users[$i]->id)}}</p>
                            <p class="h6 subdivemailgestionusers {{$i}}" style="color:#2F2F2F;text-align:center;width:27.5%;font-weight:500;">{{ __($users[$i]->email) }}</p>
                            <p class="h6 {{$i}}" style="color:#2F2F2F;text-align:center;width:27.5%;">{{ __($users[$i]->name) }}</p>
                            <p class="h6 {{$i}}" style="color:#2F2F2F;text-align:center;width:10%;">{{ __($users[$i]->role_id) }}</p>
                            <div class="divcontenedorgestionusers" style="display:flex;flex-direction:row;color:#2F2F2F;text-align:center;width:35%;">
                            @if($users[$i]->email == Auth::user()->email)
                                <a class="h6 subdivcontenedorgestionusers" style="text-decoration:none;color:#2F2F2F;text-align:center;width:25%;margin-left:20%;">Editar</a>
                            @else
                                <a class="{{$i}} bt1 h6 subdivcontenedorgestionusers" style="cursor:pointer;text-decoration:none;color:#2F2F2F;text-align:center;width:25%;margin-left:20%;">Editar</a>
                            @endif
                            <a href="{{route('borraruser',$users[$i]->id)}}" class="h6 subdivcontenedorgestionusers" style="text-decoration:none;color:#2F2F2F;text-align:center;width:25%;margin-left:10%;margin-right:20%;">Borrar</a>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
            <div id="divcontenedorimportante" style="display:none;top:0;left:0;width:100vw;height:100vh;flex-direction:row;z-index:300;position:absolute;background-color:rgba(0,0,0,0.5);">
                <div style="position:absolute;top:0;left:0;z-index:3000;height:70vh;margin-top:15vh;margin-bottom:15vh;width:80vw;margin-left:10vw;margin-right:10vw;opacity:1 !important;background-color:#FEFEFE;">
                    <form action="{{route('saveedituser')}}" method="POST">
                        @csrf
                        <div style="width:100%;display:flex;flex-direction:row;">
                            <input name="id" id="inputid" type="hidden" value="">
                            <div style="margin-top:2vh;margin-bottom:2vh;margin-left:85%;width:15%;display:flex;flex-direction:row;justify-content:center;align-items:center;">
                                <img id="imagenlogopopup" style="width:60%;height:auto;margin-right:2.5%;" src="http://drive.google.com/uc?export=view&id=1UpyHgQ9jYR4aaxlIfSoyWupH-JjGHJ8s" alt="logogolmo">
                            </div>
                        </div>
                        <div style="display:flex;flex-direction:column;width:80%;margin-left:10%;margin-right:10%;">
                            <p class="h4" style="margin-left:5%;font-weight:bold;width:95%;">Datos personales</p>
                            <div style="width:100%;display:flex;flex-direction:row;justify-content:center;align-items:center;">
                                <div style="display:flex;flex-direction:column;width:40%;margin-left:5%;margin-right:5%;">
                                    <label for="nombre" style="padding-left:0; font-size:15px;font-weight:bold;" class="col-md-4 col-form-label text-md-left">Nombre</label>
                                    <input id="inputnombre" style="padding:0 !important; width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:1px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;border-radius:0 !important;" type="text" name="nombre" value="" class="form form-control" required>
                                </div>
                                <div style="display:flex;flex-direction:column;width:40%;margin-left:5%;margin-right:5%;">
                                    <label for="correo" style="padding-left:0; font-size:15px;font-weight:bold;" class="col-md-4 col-form-label text-md-left">Correo</label>
                                    <input id="inputcorreo" style="padding:0 !important; width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:1px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;border-radius:0 !important;" type="text" name="correo" value="" class="form form-control" required>
                                </div>
                            </div>
                            <div style="width:100%;display:flex;flex-direction:row;justify-content:center;align-items:center;"> 
                                <div style="display:flex;flex-direction:column;width:40%;margin-left:5%;margin-right:5%;">
                                    <label for="contraseña" style="padding-left:0;font-size:15px;font-weight:bold;" class="col-md-4 col-form-label text-md-left">Password</label>
                                    <input type="password" style="padding:0 !important; width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:1px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;border-radius:0 !important;" name="contraseña" value="" class="form form-control">
                                </div>
                                <div style="display:flex;flex-direction:column;width:40%;margin-left:5%;margin-right:5%;">
                                    <label for="rol" style="padding-left:0; font-size:15px;font-weight:bold;"  class="col-md-4 col-form-label text-md-left">Role</label>
                                    <select name="rol" style="height: calc(1.6em + 0.75rem + 2px);width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:1px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;border-radius:0 !important;">
                                        @foreach($roles as $rol)
                                            <option value="{{$rol->id}}">{{$rol->role}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            <div style="margin-top:5vh;display:flex;flex-direction:row;justify-content:center;align-items:center;">
                                <div style="display:flex;flex-direction:row;justify-content:center;align-items:center;width:40%;margin-left:5%;margin-right:5%;">
                                    <!--<input type="submit" class="btn btn-primary" value="Actualizar">-->
                                    <button type="submit" id="button" style="padding-top:5px;padding-bottom:5px;width:100%; margin-bottom:5px; border:1px solid #7C7C7C;background-color:transparent; outline:none;font-size:15px;color:#7C7C7C;">Actualizar</button>
                                </div>
                                <div style="display:flex;flex-direction:row;justify-content:center;align-items:center;width:40%;margin-right:5%;margin-left:5%;">
                                    <button type="submit" id="bt2" style="padding-top:5px;padding-bottom:5px;width:100%; margin-bottom:5px; border:1px solid #7C7C7C;background-color:transparent; outline:none;font-size:15px;color:#7C7C7C;">Cancelar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>  
        </div>
    </div>
@endsection