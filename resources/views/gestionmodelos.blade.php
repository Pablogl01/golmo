@extends('layouts.app3')

@section('content')
    <div class="container-fluid" style="width:100vw !important;margin:0;padding:0;background-color:#f8f9fa;">
        <div class="d-flex flex-column" style="width:100%">
            <!-- Nav Administrador -->     
            <nav class="navbar navbar-expand-lg navbar-light bg-light navapp" style="padding-bottom:0;padding-left:0;padding-right:0;margin-bottom:0;margin-left:10%;margin-right:10%;">
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('profile')}}">Datos personales</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #8A8A8A;" href="{{route('gestionmodelos')}}">Gestionar modelos</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('gestionusers')}}">Gestionar usuarios</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('gestionofertas')}}">Gestionar solicitudes</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('gestionvariantes')}}">Gestionar variantes</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('logs')}}">Logs</a>
            </nav>
            <div style="background-color:#191F22;min-height:calc(100vh - 65px - 53px);width:100%;">
                <div style="margin-left:10%;margin-right:10%;padding-top:25px;">
                    <p class="h3 text-white" style="font-weight: bold;">Nuestros modelos</p>
                    <p class="text-white">Aquí puede ver todos los modelos disponibles.</p>
                    <div style="background-color:white;min-height:calc(70vh - 65px - 53px);padding-top:5vh;padding-bottom:5vh;padding-left:3vw;padding-right:3vw;margin-bottom:3vh;">
                        @if(count($carmodel) != 0)
                            @for($i = 0;$i < count($carmodel);$i++)
                            <div class="divcontenedormodelos" style="width:100%;border-bottom:1px solid #D7D1D1;padding-bottom:5px;padding-top:15px;display:flex;flex-direction:row;justify-content:center;align-items:center;">
                                <div class="divimagen" style="margin-bottom:10px;width:40%;height:250px;object-fit:cover;object-position:center;display:flex;flex-direction:row;justify-content:center;align-items:center;">
                                    <img src="{{('../storage/'.$image[$i])}}" alt="imagenmodelo" style="width:100%;height:100%;">
                                </div>
                                <div class="d-flex flex-column justify-content-center align-items-center divcolumnamodelo" style="width:50%;margin-left:10%;">
                                    <p class="h4 h4reformed" style="font-weight:600;text-align:left;width:100%;margin-bottom:15px;">Modelo</p>
                                    <p class="h4 h4reformed" style="color:#565758;font-weight:400;text-align:left;width:100%;margin-bottom:75px;">{{ __($carmodel[$i]->name) }}</p>
                                    <div class="d-flex flex-row " style="width:100%;">
                                        <a class="btn rounded-pill botonmodelos" style="width:125px;border:3px solid #959595;color:#959595;" href="{{route('info',$carmodel[$i]->id)}}">VER</a>
                                        <a class="btn rounded-pill botonmodelos" style="width:125px;border:3px solid #959595;color:#959595;margin-left:2vw;margin-right:2vw;" href="{{route('editarmodelo',$carmodel[$i]->id)}}">EDITAR</a>
                                        <a class="btn rounded-pill botonmodelos" style="width:125px;border:3px solid #959595;color:#959595;" href="{{route('borrarmodelo',$carmodel[$i]->id)}}">BORRAR</a>
                                    </div>
                                </div>
                            </div>
                            @endfor
                        @else
                            <p>Todavia no hay modelos</p>
                        @endif
                    </div>
                </div>
                <a style="width:100vw;background-color:#191F22;color:white;padding-left:10%;padding-bottom:2vh;text-decoration:none;" href="{{route('subirmodelo')}}">Añadir nuevo modelo</a>
            </div>
        </div>
    </div>
@endsection
