@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="d-flex flex-column">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="nav-link" href="{{route('profile')}}">Datos personales</a>
                <a class="nav-link" href="{{route('gestionmodelos')}}">Gestionar modelos</a>
                <a class="nav-link" href="{{route('gestionusers')}}">Gestionar usuarios</a>
                <a class="nav-link" href="{{route('gestionofertas')}}">Gestionar solicitudes</a>
                <a class="nav-link" href="{{route('gestionvariantes')}}">Gestionar variantes</a>
            </nav>    
            @foreach ($carmodel as $model)
                <div class="d-flex flex-row">
                    <p>{{ __($model->name) }}</p>
                    <a class="btn rounded-pill text-dark border-dark " style="width:100px;" href="{{route('info',$model->id)}}">VER</a>
                    <a class="btn rounded-pill text-dark border-dark " style="width:100px;" href="{{route('editarmodelo',$model->id)}}">EDITAR</a>
                    <a class="btn rounded-pill text-dark border-dark " style="width:100px;" href="{{route('borrarmodelo',$model->id)}}">BORRAR</a>
                </div>
            @endforeach
            <a class="btn rounded-pill text-white bg-dark" style="width:230px;" href="{{route('añadirmodelo')}}">AÑADIR MODELO</a>
        </div>
    </div>
</div>
@endsection
