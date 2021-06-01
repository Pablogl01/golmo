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
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #8A8A8A;" href="{{route('gestionvariantes')}}">Gestionar variantes</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('logs')}}">Logs</a>
            </nav>
            <div style="background-color:#191F22;min-height:calc(100vh - 65px - 53px);width:100%;">
                <div class="divcontenedorvariantes" style="margin-left:10%;margin-right:10%;padding-top:25px;">
                    <p class="h3 text-white" style="font-weight: bold;">Nuestras variantes</p>
                    <p class="text-white">Aquí puede gestionar todas variantes de los modelos existentes en nuestra empresa. </p>
                    <div style="background-color:white;min-height:calc(70vh - 65px - 53px);padding-top:5vh;padding-bottom:5vh;padding-left:3vw;padding-right:3vw;margin-bottom:3vh;width:100%;">
                        <div class="d-flex flex-row" style="width:100%;border-bottom:1px solid #D7D1D1;">
                            <p class="h5 div1" style="color:#969696;text-align:center;width:20%;">Nombre</p>
                            <p class="h5 div1" style="color:#969696;text-align:center;width:15%;">Tipo</p>
                            <p class="h5 div1" style="color:#969696;text-align:center;width:20%;">URL Imagen</p>
                            <p class="h5 div1" style="color:#969696;text-align:center;width:17.5%;">Precio</p>
                            <p class="h5 div1" style="color:#969696;text-align:center;width:7.5%;">Gama</p>
                            <p class="h5 div1" style="color:#969696;text-align:center;width:20%;">Acciones</p>
                        </div>
                        @if(count($variantes)!=0)
                            @foreach ($variantes as $variante)
                            <div class="d-flex flex-row" style="width:100%;margin-top:35px;">
                                <p class="h6" style="color:#2F2F2F;text-align:center;width:20%;">{{$variante->name}}</p>
                                <p class="h6" style="color:#2F2F2F;text-align:center;width:15%;">{{$variante->type}}</p>
                                @if($variante->type == "Color" || $variante->type == "Acabados")
                                <div class="divimagencontenedorvariantes" style="background-image:url({{('../storage/'.$variante->image)}});margin-left:3.75%;margin-right:3.75%;width:12.5%;height:125px;display:flex;flex-direction:row;justify-content:center;align-items:center;border:1px solid #D7D1D1;border-radius:100px;"></div>
                                @else
                                <div class="divimagencontenedorvariantes" style="height:150px;width:20%;display:flex;flex-direction:row;justify-content:center;align-items:center;">
                                    <img src="{{('storage/public/'.$variante->image)}}" style="object-fit:contain;object-position:center;width:100%;height:100%;" alt="imagenvariante">
                                </div>
                                @endif
                                <p class="h6" style="color:#2F2F2F;text-align:center;width:17.5%;">{{$variante->price}}</p>
                                <p class="h6" style="color:#2F2F2F;text-align:center;width:7.5%;">{{$variante->gama_id}}</p>
                                <div class="divgestionvariantes" style="display:flex;flex-direction:row;color:#2F2F2F;text-align:center;width:20%;">
                                    <a href="{{route('editarvariante',$variante->id)}}" class="h6 subdivgesionvariantes" style="text-decoration:none;color:#2F2F2F;text-align:center;width:25%;margin-left:20%;">Editar</a>
                                    <a href="{{route('eliminarvariante',$variante->id)}}" class="h6 subdivgesionvariantes" style="text-decoration:none;color:#2F2F2F;text-align:center;width:25%;margin-left:10%;margin-right:20%;">Borrar</a>
                                </div>
                            </div>
                            @endforeach
                        @else
                            <p>todavia no hay variantes</p>
                        @endif
                    </div>
                </div>
            </div>
            <a style="width:100vw;background-color:#191F22;color:white;padding-left:10%;padding-bottom:2vh;text-decoration:none;" href="{{route('subirvariante')}}">Añadir nueva variante</a>
        </div>
    </div>
@endsection