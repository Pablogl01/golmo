@extends('layouts.app')

@section('content')
<div>
    <div class="row justify-content-center ">
        <form action="{{route('updateimagen',$imagen)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="nombre" class="col-md-4 col-form-label text-md-left">Nombre</label>
            <input type="text" name="nombre" value="" class="form form-control" required>
            <label for="url" class="col-md-4 col-form-label text-md-left">Imagen</label>
            <input type="file" name="url" class="form form-control" required>
            <input type="submit" class="btn btn-primary" value="Actualizar">
        </form>
    </div>
    <a class="btn btn-primary" href="{{route('gestionmodelos')}}" role="button">Finalizar</button>
</div>
@endsection