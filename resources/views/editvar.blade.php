@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <form action="{{route('saveeditvariante',$variante->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="nombre" class="col-md-4 col-form-label text-md-left">Nombre</label>
            <input type="text" name="nombre" value="{{$variante->name}}" class="form form-control" required>
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
            <br/>
            <br/>
            <input type="submit" class="btn btn-primary" value="Actualizar">
            <br/>
            <br/>
        </form>
        </div>
    </div>
</div>
@endsection