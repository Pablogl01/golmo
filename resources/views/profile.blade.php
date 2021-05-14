@extends('layouts.app')

@section('content')
<div class="container" style="width:100%">
    <div class="row justify-content-center" style="width:100%">
        <div class="d-flex flex-column" style="width:100%">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="nav-link" href="{{route('profile')}}">Datos personales</a>
                @if($user->role_id == 1)
                    <a class="nav-link" href="{{route('gestionmodelos')}}">Gestionar modelos</a>
                    <a class="nav-link" href="{{route('gestionusers')}}">Gestionar usuarios</a>
                    <a class="nav-link" href="{{route('gestionofertas')}}">Gestionar solicitudes</a>
                    <a class="nav-link" href="{{route('gestionvariantes')}}">Gestionar variantes</a>
                @endif
            </nav>
            <div style="background-color:#191F22">
                <p class="h3 text-white" style="font-weight: bold;">Datos personales</p>
                <p class="text-white">Aquí puede ver los datos de contacto que se conservan en su perfil de Golmo ID. </p>
                <div style="background-color:white">
                    <p class="h4" style="font-weight: bold;">Nombre y contraseña</p>
                    <div class="d-flex flex-row">
                        <p class="text-secondary">Nombre</p>
                        <p class="ml-4">{{ __($user->name) }}</p>
                    </div>
                    <p class="h4" style="font-weight: bold;">Dirección de correo electrónico y rol</p>
                    <div class="d-flex flex-row">
                        <p class="text-secondary">Dirección</p>
                        <p class="ml-4">{{ __($user->name) }}</p>
                        <p class="text-secondary ml-5">Rol</p>
                        <p class="ml-4">{{ __($rol) }}</p>
                    </div>
                    <p class="h4" style="font-weight: bold;">Fecha de nacimiento y teléfono</p>
                    <div class="d-flex flex-row">
                        <p class="text-secondary">Fecha de nacimiento</p>
                        <p class="ml-4">{{ __($user->birthdate) }}</p>
                        <p class="text-secondary ml-5">Teléfono</p>
                        <p class="ml-4">{{ __($user->phone_number) }}</p>
                    </div>
                    <p class="h4" style="font-weight: bold;">Género</p>
                    <div class="d-flex flex-row">
                        <p class="text-secondary">Género</p>
                        <p class="ml-4">{{ __($gender) }}</p>
                    </div>
                </div>
            </div>
       </div>
    </div>
</div>
@endsection