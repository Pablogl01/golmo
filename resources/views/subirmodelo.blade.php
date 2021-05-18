@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <form action="{{route('nuevomodelo')}}" method="POST">
            @csrf
            <label for="nombre" class="col-md-4 col-form-label text-md-left">Nombre</label>
            <input type="text" name="nombre" value="" class="form form-control" required>
            <label for="precio" class="col-md-4 col-form-label text-md-left">Precio</label>
            <input type="number" step="any" name="precio" value="" class="form form-control" required>
            <label for="gamas" class="col-md-4 col-form-label text-md-left">Gama</label></br>
            <select name="gamas" required>
                @foreach($gamas as $gama)
                    <option value="{{$gama->name}}">{{$gama->name}}</option>
                @endforeach
            </select></br>

            <label for="autonomia" class="col-md-4 col-form-label text-md-left">Autonomia</label>
            <input type="number" name="autonomia" value="" class="form form-control" required>
            
            <label for="aceleracion" class="col-md-4 col-form-label text-md-left">Aceleracion</label>
            <input type="number" step="any" name="aceleracion" value="" class="form form-control" required>

            <label for="velocidad_maxima" class="col-md-4 col-form-label text-md-left">Velocidad Maxima</label>
            <input type="number" name="velocidad_maxima" value="" class="form form-control" required>

            <label for="caballos" class="col-md-4 col-form-label text-md-left">Caballos</label>
            <input type="number" name="caballos" value="" class="form form-control" required>

            <label for="coeficiente" class="col-md-4 col-form-label text-md-left">Coeficiente</label>
            <input type="number" name="coeficiente" step="any" value="" class="form form-control" required>
            
            <label for="tren_motriz" class="col-md-4 col-form-label text-md-left">Tren Motriz</label>
            <input type="text" name="tren_motriz" value="" class="form form-control" required>

            <label for="llantas" class="col-md-4 col-form-label text-md-left">Llantas</label>
            <input type="text" name="llantas" value="" class="form form-control" required>

            <label for="capacidad" class="col-md-4 col-form-label text-md-left">Capacidad</label>
            <input type="number" name="capacidad" value="" class="form form-control" required>

            <label for="maletero" class="col-md-4 col-form-label text-md-left">Maletero</label>
            <input type="number" name="maletero" value="" class="form form-control" required>

            <label for="peso" class="col-md-4 col-form-label text-md-left">Peso</label>
            <input type="number" name="peso" value="" class="form form-control" required>

            <label for="description" class="col-md-4 col-form-label text-md-left">Descripcion</label>
            <textarea name="description" value="" class="form form-control" required></textarea>
            
            <label for="description2" class="col-md-4 col-form-label text-md-left">Descripcion 2</label>
            <textarea name="description2" value="" class="form form-control" required></textarea>

            <br/>
            <br/>
            <input type="submit" class="btn btn-primary" value="Sigiente">
            <br/>
            <br/>
        </form>
        </div>
    </div>
</div>
@endsection