<?php
    use Illuminate\Support\Facades\Auth;
?>
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
            <div style="background-color:#191F22;min-height:calc(100vh - 65px - 53px);width:100%;">
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
                        @foreach ($users as $user)
                        <div class="d-flex flex-row" style="width:100%;margin-top:35px;">
                            <p class="h6 subdivemailgestionusers" style="color:#2F2F2F;text-align:center;width:27.5%;font-weight:500;">{{ __($user->email) }}</p>
                            <p class="h6" style="color:#2F2F2F;text-align:center;width:27.5%;">{{ __($user->name) }}</p>
                            <p class="h6" style="color:#2F2F2F;text-align:center;width:10%;">{{ __($user->role_id) }}</p>
                            <div class="divcontenedorgestionusers" style="display:flex;flex-direction:row;color:#2F2F2F;text-align:center;width:35%;">
                            @if($user->email == Auth::user()->email)
                                <a href="" class="h6 subdivcontenedorgestionusers" style="text-decoration:none;color:#2F2F2F;text-align:center;width:25%;margin-left:20%;">Editar</a>
                            @else
                                <a href="{{route('edituser',$user->id)}}" class="h6 subdivcontenedorgestionusers" style="text-decoration:none;color:#2F2F2F;text-align:center;width:25%;margin-left:20%;">Editar</a>
                            @endif
                            <a href="{{route('borraruser',$user->id)}}" class="h6 subdivcontenedorgestionusers" style="text-decoration:none;color:#2F2F2F;text-align:center;width:25%;margin-left:10%;margin-right:20%;">Borrar</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection