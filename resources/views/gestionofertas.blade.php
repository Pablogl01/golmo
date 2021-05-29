@extends('layouts.app3')

@section('content')
<div class="container-fluid" style="width:100vw !important;margin:0;padding:0;background-color:#f8f9fa;">
        <div class="d-flex flex-column" style="width:100%">
            <!-- Nav Administrador -->     
            <nav class="navbar navbar-expand-lg navbar-light bg-light navapp" style="padding-bottom:0;padding-left:0;padding-right:0;margin-bottom:0;margin-left:10%;margin-right:10%;">
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('profile')}}">Datos personales</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('gestionmodelos')}}">Gestionar modelos</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('gestionusers')}}">Gestionar usuarios</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #8A8A8A;" href="{{route('gestionofertas')}}">Gestionar solicitudes</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('gestionvariantes')}}">Gestionar variantes</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('logs')}}">Logs</a>
            </nav>
            <div style="background-color:#191F22;min-height:calc(100vh - 65px - 53px);width:100%;">
                <div style="margin-left:10%;margin-right:10%;padding-top:25px;">
                    <p class="h3 text-white" style="font-weight: bold;">Gestión solicitudes</p>
                    <p class="text-white">Aquí puede gestionar todas las solicitudes enviadas.</p>
                    <div style="background-color:white;min-height:calc(70vh - 65px - 53px);padding-top:5vh;padding-bottom:5vh;padding-left:3vw;padding-right:3vw;margin-bottom:5vh;width:100%;">
                        <p class="h4" style="font-weight: bold; padding-bottom:5px;">Solicitudes en espera</p>
                        <div class="d-flex flex-row" style="margin-top:25px;width:100%;border-bottom:1px solid #D7D1D1;">
                            <p class="h5" style="color:#969696;text-align:center;width:27.5%;">Usuario</p>
                            <p class="h5" style="color:#969696;text-align:center;width:27.5%;">Fecha</p>
                            <p class="h5" style="color:#969696;text-align:center;width:15%;">Estado</p>
                            <p class="h5" style="color:#969696;text-align:center;width:35%;">Acciones</p>
                        </div>
                    <div style="background-color:white;min-height:calc(70vh - 65px - 53px);padding-top:5vh;padding-bottom:5vh;margin-bottom:3vh;">
                        @if(count($ofertas)!=0)
                            @for($i=0;$i < count($ofertas); $i++)
                            <div class="d-flex flex-row" style="width:100%;margin-top:10px;display:flex;justify-content: space-around;">
                                <p class="subdivemailgestionusers" style="width:27.5%;text-align:center;">{{$users[$i]}}</p>
                                <p style="width:27.5%;text-align:center;">{{$ofertas[$i]->created_at}}</p>
                                <p style="width:15%;text-align:center;">En espera</p>
                                <div style="width:35%;text-align:center;">
                                    <a style="text-decoration:none;color:#3b3b3b;width:30%;text-align:center;" href="{{route('veroferta',$ofertas[$i])}}">Ver</a>
                                    <a style="text-decoration:none;color:#3b3b3b;width:30%;margin-left:5%;margin-right:5%;text-align:center;" href="{{route('aceptaroferta',$ofertas[$i])}}">Aceptar</a>
                                    <a style="text-decoration:none;color:#3b3b3b;width:30%;text-align:center;" href="{{route('rechazaroferta',$ofertas[$i])}}">Rechazar</a>
                                </div>
                            </div>
                            @endfor
                        @else
                            <p>No hay ofetas solicitadas</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection