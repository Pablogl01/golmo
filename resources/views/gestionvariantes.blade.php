@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="nav-link" href="{{route('profile')}}">Datos personales</a>
            <a class="nav-link" href="{{route('gestionmodelos')}}">Gestionar modelos</a>
            <a class="nav-link" href="{{route('gestionusers')}}">Gestionar usuarios</a>
            <a class="nav-link" href="{{route('gestionofertas')}}">Gestionar solicitudes</a>
            <a class="nav-link" href="{{route('gestionvariantes')}}">Gestionar variantes</a>
        </nav>    
    </div>
</div>
@endsection