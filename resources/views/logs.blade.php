@extends('layouts.app3')

@section('content')
    <div class="container-fluid" style="width:100vw !important;margin:0;padding:0;background-color:#f8f9fa;">
        <div class="d-flex flex-column" style="width:100%">
            <!-- Nav Administrador -->     
            <nav class="navbar navbar-expand-lg navbar-light bg-light navapp" style="padding-bottom:0;padding-left:0;padding-right:0;margin-bottom:0;margin-left:10%;margin-right:10%;">
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('profile')}}">Datos personales</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('gestionmodelos')}}">Gestionar modelos</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('gestionusers')}}">Gestionar usuarios</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('gestionofertas')}}">Gestionar solicitudes</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('gestionvariantes')}}">Gestionar variantes</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #8A8A8A;" href="{{route('logs')}}">Logs</a>
            </nav>
            <div style="background-color:#191F22;min-height:calc(100vh - 65px - 53px);width:100%;">
                <div class="divcontenedorvariantes" style="margin-left:10%;margin-right:10%;padding-top:25px;">
                    <p class="h3 text-white" style="font-weight: bold;">Logs almacenados</p>
                    <p class="text-white">Aqui se guardan todas las acciones de modelos</p>
                    <div style="display:flex;flex-direction:column;align-items: center;background-color:white;min-height:calc(70vh - 65px - 53px);padding-top:5vh;padding-bottom:5vh;padding-left:3vw;padding-right:3vw;margin-bottom:3vh;width:100%;">
                        <div class="d-flex flex-row" style="width:100%;border-bottom:1px solid #D7D1D1;">
                            <p class="h5" style="color:#969696;text-align:center;width:20%;">Usuario</p>
                            <p class="h5" style="color:#969696;text-align:center;width:20%;">Modelo afectado</p>
                            <p class="h5" style="color:#969696;text-align:center;width:25%;">Acción</p>
                            <p class="h5" style="color:#969696;text-align:center;width:35%;">Fecha</p>
                        </div>
                        @for($i = 0; $i < count($logss);$i++)
                            <div style="padding-top:10px;display:flex;flex-direction:row;width:100%">
                                <p style="text-align:center;width:20%;">{{$logss[$i]->user_name}}</p>
                                <p style="text-align:center;width:20%;">{{$logss[$i]->model_id}}</p>
                                <p style="text-align:center;width:25%;">{{$logss[$i]->action}}</p>
                                <p style="text-align:center;width:35%;">{{$logss[$i]->created_at}}</p>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
            <a style="width:100vw;background-color:#191F22;color:white;padding-left:10%;padding-bottom:2vh;text-decoration:none;" href="{{route('subirvariante')}}">Añadir nueva variante</a>
        </div>
    </div>
@endsection