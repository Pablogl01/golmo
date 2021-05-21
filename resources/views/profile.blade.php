@extends('layouts.app3')

@section('content')
    <div class="container-fluid" style="width:100vw !important;margin:0;padding:0;background-color:#f8f9fa;">
        <div class="d-flex flex-column" style="width:100%">
            @if($user->role_id == 1) 
            <!-- Nav Administrador -->     
            <nav class="navbar navbar-expand-lg navbar-light bg-light navapp" style="padding-bottom:0;padding-left:0;padding-right:0;margin-bottom:0;margin-left:10%;margin-right:10%;">
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #8A8A8A;" href="{{route('profile')}}">Datos personales</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('gestionmodelos')}}">Gestionar modelos</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('gestionusers')}}">Gestionar usuarios</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('gestionofertas')}}">Gestionar solicitudes</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('gestionvariantes')}}">Gestionar variantes</a>
            </nav>
            @else
            <!-- Nav Cliente -->     
            <nav class="navbar navbar-expand-lg navbar-light bg-light navapp" style="height:53px;padding-bottom:0;padding-left:0;padding-right:0;margin-bottom:0;margin-left:10%;margin-right:10%;">
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #8A8A8A;" href="{{route('profile')}}">Datos personales</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('seguridad')}}">Inicio de sesión y seguridad</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('miscoches')}}">Mis coches</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('misofertas')}}">Mis ofertas</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('privacidad')}}">Privacidad y cookies</a>
            </nav>
            @endif
            <div style="background-color:#191F22;min-height:calc(100vh - 65px - 53px);width:100%;">
                <div style="margin-left:10%;margin-right:10%;padding-top:25px;">
                    <p class="h3 text-white" style="font-weight: bold;">Datos personales</p>
                    <p class="text-white">Aquí puede ver los datos de contacto que se conservan en su perfil de Golmo ID. </p>
                    <div style="background-color:white;min-height:calc(70vh - 65px - 53px);padding-top:5vh;padding-bottom:5vh;padding-left:3vw;padding-right:3vw;margin-bottom:5vh;">
                        <p class="h4" style="font-weight: bold; border-bottom:1px solid #D7D1D1;padding-bottom:5px;">Nombre de usuario</p>
                        <div class="d-flex flex-row divcontenedor2" style="padding-top:5px;width:45%;">
                            <p class="text-secondary pperfil" style="width:25%;">Nombre</p>
                            <p class="ml-4 pperfil" style="width:25%;">{{ __($user->name) }}</p>
                        </div>
                        <p class="h4" style="font-weight: bold; border-bottom:1px solid #D7D1D1;padding-bottom:5px;">Dirección de correo electrónico y rol</p>
                        <div class="d-flex flex-row divcontenedor" style="padding-top:5px;width:100%;">
                            <div class="d-flex flex-row divcontenedor2" style="width:45%;">
                                <p class="text-secondary pperfil" style="width:25%;">Dirección</p>
                                <p class="ml-4 pperfil" style="width:25%;">{{ __($user->email) }}</p>
                            </div>
                            <div class="d-flex flex-row divcontenedor2" style="width:55%;">
                                <p class="text-secondary pperfil" style="width:25%;margin-left: 3rem;">Rol</p>
                                <p class="ml-4 pperfil" style="width:25%;">{{ __($rol) }}</p>
                            </div>
                        </div>
                        <p class="h4" style="font-weight: bold; border-bottom:1px solid #D7D1D1;padding-bottom:5px;">Fecha de nacimiento y teléfono</p>
                        <div class="d-flex flex-row divcontenedor" style="padding-top:5px;width:100%;">
                            <div class="d-flex flex-row divcontenedor2" style="width:45%;">
                                <p class="text-secondary pperfil" style="width:25%;">Nacimiento</p>
                                <p class="ml-4 pperfil" style="width:25%;">{{ __($user->birthdate) }}</p>
                            </div>
                            <div class="d-flex flex-row divcontenedor2" style="width:55%;">
                                <p class="text-secondary pperfil" style="width:25%;margin-left: 3rem;">Teléfono</p>
                                <p class="ml-4 pperfil" style="width:25%;">{{ __($user->phone_number) }}</p>
                            </div>
                        </div>
                        <p class="h4" style="font-weight: bold; border-bottom:1px solid #D7D1D1;padding-bottom:5px;">Dirección y género</p>
                        <div class="d-flex flex-row divcontenedor" style="padding-top:5px;width:100%;">
                            <div class="d-flex flex-row divcontenedor2" style="width:45%;">
                                <p class="text-secondary pperfil" style="width:25%;">Dirección</p>
                                <p class="ml-4 pperfil" style="width:25%;">{{ __($user->direccion) }}</p>
                            </div>
                            <div class="d-flex flex-row divcontenedor2" style="width:55%;">
                                <p class="text-secondary pperfil" style="width:25%;margin-left: 3rem;">Género</p>
                                <p class="ml-4 pperfil" style="width:25%;">{{ __($gender) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection