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
            @if(count($variantes)!=0)
            @foreach($variantes as $variante)
                <p>{{$variante->name}}</p>
                <img src="{{('storage/'.$variante->image)}}" width="150px" height="150px">
                <a href="{{route('eliminarvariante',$variante->id)}}">Eliminar</a>

            @endforeach
            @else
                <p>todavia no hay variantes</p>
            @endif
            <a class="btn rounded-pill text-white bg-dark" style="width:230px;" href="{{route('subirvariante')}}">AÑADIR VARIANTE</a>
        </div>
    </div>
</div>
@endsection