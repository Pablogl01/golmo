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
            <label for="description" class="col-md-4 col-form-label text-md-left">Descripcion</label>
            <textarea name="description" value="" class="form form-control" required></textarea>
            <br/>
            <br/>
            <input type="submit" class="btn btn-primary" value="Añadir">
            <br/>
            <br/>
        </form>
        </div>
    </div>
</div>
@endsection