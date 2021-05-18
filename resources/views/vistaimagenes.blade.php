@extends('layouts.app')

@section('content')
<div>
    <div class="row justify-content-center ">
        <form action="{{route('nuevaimagen')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="nombre" class="col-md-4 col-form-label text-md-left">Nombre</label>
            <input type="text" name="nombre" value="" class="form form-control" required>
            
            <label class="col-md-4 col-form-label text-md-left">Modelo</label>
            <p>{{$modelo->name}}</p>
            <input type="hidden" name="modelo" value="{{$modelo_id}}" >
            <label for="url" class="col-md-4 col-form-label text-md-left">Imagen</label>
            <input type="file" name="url" class="form form-control" required>
            <label for="color" class="col-md-4 col-form-label text-md-left">Color</label>
            <select name="color" required>
            @if(count($colores)!=0)
                @foreach($colores as $color)
                <option value="{{$color->id}}" selected>{{$color->name}}</option>
                @endforeach
            @else
                <option value="0" selected>No hay colores</option>
            @endif
            </select>
            <label for="llanta" class="col-md-4 col-form-label text-md-left">Llantar</label>
            <select name="llanta">
            @if(count($llantas)!=0)
                @foreach($llantas as $llanta)
                <option value="{{$llanta->id}}" selected>{{$llanta->name}}</option>
                @endforeach
            @else
                <option value="0" selected>No hay llantas</option>
            @endif
            </select>
            <input type="submit" class="btn btn-primary" value="Añadir">
        </form>
    </div>
    <a class="btn btn-primary" href="{{route('gestionmodelos')}}" role="button">Finalizar</button>
</div>
@endsection