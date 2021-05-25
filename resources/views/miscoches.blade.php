@extends('layouts.app3')

@section('content')
    <div class="container-fluid" style="width:100vw !important;margin:0;padding:0;background-color:#f8f9fa;">
        <div class="d-flex flex-column" style="width:100%">
            <!-- Nav Cliente -->     
            <nav class="navbar navbar-expand-lg navbar-light bg-light navapp" style="padding-bottom:0;padding-left:0;padding-right:0;margin-bottom:0;margin-left:10%;margin-right:10%;">
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('profile')}}">Datos personales</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('seguridad')}}">Inicio de sesión y seguridad</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #8A8A8A;" href="{{route('miscoches')}}">Mis coches</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('misofertas')}}">Mis ofertas</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('privacidad')}}">Privacidad y cookies</a>
            </nav>
            <div style="background-color:#191F22;min-height:calc(100vh - 65px - 53px);width:100%;">
                <div class="divcontenedorvariantes" style="margin-left:10%;margin-right:10%;padding-top:25px;">
                    <p class="h3 text-white" style="font-weight: bold;">Mis coches</p>
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
                        @if(count($misc) != 0)
                            @for($i = 0;$i < count($misc); $i++)
                                <p>{{$names[$i]}}</p>
                                </br>
                                <img src="{{('storage/'.$imagens[$i])}}" alt="imagenmodelo" style="width:50%;height:50%;">
                                @if($misc[$i]->status == "guardado")
                                    <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('payWithPayPal',$misc[$i])}}">Pagar</a>
                                @else
                                    <p>Comprado</p>
                                @endif
                            @endfor
                        @else
                            <p>todavia no hay coches guardados</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
