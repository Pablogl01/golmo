@extends('layouts.app3')

@section('content')
    <div class="container-fluid" style="width:100vw !important;margin:0;padding:0;background-color:#f8f9fa;">
        <div class="d-flex flex-column" style="width:100%">
            <!-- Nav Cliente -->     
            <nav class="navbar navbar-expand-lg navbar-light bg-light navapp" style="padding-bottom:0;padding-left:0;padding-right:0;margin-bottom:0;margin-left:10%;margin-right:10%;">
            <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #8A8A8A;" href="{{route('profile')}}">Datos personales</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('seguridad')}}">Inicio de sesión y seguridad</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('miscoches')}}">Mis coches</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('misofertas')}}">Mis ofertas</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('privacidad')}}">Privacidad y cookies</a>
            </nav>
            <div style="background-color:#191F22;min-height:calc(100vh - 65px - 53px);width:100%;">
                <div class="divcontenedorvariantes" style="margin-left:10%;margin-right:10%;padding-top:25px;">
                <p class="h3 text-white" style="font-weight: bold;">Mis coches</p>
                    <p class="text-white">Aquí puede gestionar todas variantes de los modelos existentes en nuestra empresa. </p>
                    <div style="background-color:white;min-height:calc(70vh - 65px - 53px);padding-top:5vh;padding-bottom:5vh;padding-left:3vw;padding-right:3vw;margin-bottom:3vh;width:100%;">
                    @extends('layouts.app3')
                        <h2>Inicio de sesión y seguridad</h2>
                        <p>{{$user->email}}</p>
                        </br>
                        <h2>Borrar cuenta</h2>
                        <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('borrarmicuenta')}}">Borrar cuenta definitivamente</a>
                    </div>
                </div>
            </div>
            <a style="width:100vw;background-color:#191F22;color:white;padding-left:10%;padding-bottom:2vh;text-decoration:none;" href="{{route('realizaroferta')}}">Solicitar oferta</a>
        </div>
    </div>
@endsection
