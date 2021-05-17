@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <form action="{{route('nuevavariante')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="nombre" class="col-md-4 col-form-label text-md-left">Nombre</label>
            <input type="text" name="nombre" value="" class="form form-control" required>
            <label for="imagen" class="col-md-4 col-form-label text-md-left">Imagen</label>
            <input type="file" name="imagen" required>
            <label for="tipo" class="col-md-4 col-form-label text-md-left">Tipo</label></br>
            <select name="tipo" required>
                    <option value="Llanta">Llanta</option>
                    <option value="Color">Color</option>
                    <option value="Motor">Motor</option>
                    <option value="Audio">Audio</option>
                    <option value="Acabados">Acabados</option>
            </select></br>
            <label for="gamas" class="col-md-4 col-form-label text-md-left">Gama</label></br>
            <select name="gamas" required>
                @foreach($gama as $gam)
                    <option value="{{$gam->id}}">{{$gam->name}}</option>
                @endforeach
            </select></br>
            <label for="precio" class="col-md-4 col-form-label text-md-left">Precio</label>
            <input type="number" step="any" name="precio" value="" class="form form-control" required>
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