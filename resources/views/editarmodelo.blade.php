@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <p>{{$carmodel[0]->name}}</p></br>
            <p>Imagenes asociadas a este modelo</p>
            @foreach($imagenes as $imagen)
                <p>{{$imagen->name}}</p>
                <a class="btn rounded-pill botonmodelos" style="width:125px;border:3px solid #959595;color:#959595;" href="{{route('editarimagen',$imagen->id)}}">Editar</a>
            @endforeach
            </br></br></br></br>
            <p>Editar datos Modelo</p></br>
            <form action="{{route('updatemodelinfo',$carmodel[0])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="nombre" class="col-md-4 col-form-label text-md-left">Nombre</label>
                <input type="text" name="nombre" value="{{$carmodel[0]->name}}" class="form form-control" required>
                <label for="precio" class="col-md-4 col-form-label text-md-left">Precio</label>
                <input type="number" step="any" name="precio" value="{{$carmodel[0]->price}}" class="form form-control" required>

                <label for="autonomia" class="col-md-4 col-form-label text-md-left">Autonomia</label>
                <input type="number" name="autonomia" value="{{$carmodel[0]->autonomia}}" class="form form-control" required>
                
                <label for="aceleracion" class="col-md-4 col-form-label text-md-left">Aceleracion</label>
                <input type="number" step="any" name="aceleracion" value="{{$carmodel[0]->aceleracion}}" class="form form-control" required>

                <label for="velocidad_maxima" class="col-md-4 col-form-label text-md-left">Velocidad Maxima</label>
                <input type="number" name="velocidad_maxima" value="{{$carmodel[0]->velocidad_maxima}}" class="form form-control" required>

                <label for="caballos" class="col-md-4 col-form-label text-md-left">Caballos</label>
                <input type="number" name="caballos" value="{{$carmodel[0]->caballos}}" class="form form-control" required>

                <label for="coeficiente" class="col-md-4 col-form-label text-md-left">Coeficiente</label>
                <input type="number" name="coeficiente" step="any" value="{{$carmodel[0]->coeficiente}}" class="form form-control" required>
                
                <label for="tren_motriz" class="col-md-4 col-form-label text-md-left">Tren Motriz</label>
                <input type="text" name="tren_motriz" value="{{$carmodel[0]->tren_motriz}}" class="form form-control" required>

                <label for="llantas" class="col-md-4 col-form-label text-md-left">Llantas</label>
                <input type="text" name="llantas" value="{{$carmodel[0]->llantas}}" class="form form-control" required>

                <label for="capacidad" class="col-md-4 col-form-label text-md-left">Capacidad</label>
                <input type="number" name="capacidad" value="{{$carmodel[0]->capacidad}}" class="form form-control" required>

                <label for="maletero" class="col-md-4 col-form-label text-md-left">Maletero</label>
                <input type="number" name="maletero" value="{{$carmodel[0]->maletero}}" class="form form-control" required>

                <label for="peso" class="col-md-4 col-form-label text-md-left">Peso</label>
                <input type="number" name="peso" value="{{$carmodel[0]->peso}}" class="form form-control" required>

                <label for="description" class="col-md-4 col-form-label text-md-left">Descripcion</label>
                <textarea name="description" value="" class="form form-control" required>{{$carmodel[0]->description}}</textarea>
                
                <label for="description2" class="col-md-4 col-form-label text-md-left">Descripcion 2</label>
                <textarea name="description2" value="" class="form form-control" required>{{$carmodel[0]->description2}}</textarea>
                </br></br><input type="submit" class="btn btn-primary" value="Actualizar">
            </form>
        </div>
    </div>
</div>
@endsection