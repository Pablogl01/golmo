@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div style="width:100%">
            <div style="background-color:#191F22;min-height:calc(100vh - 65px - 53px);width:100%;padding-bottom:5px">
                <div style="margin-left:10%;margin-right:10%;padding-top:25px;">
                    <h2 style="color:white">{{$carmodel[0]->name}}</h2>
                    <div style="margin-left:10%;margin-right:10%;padding-top:25px;">
                        <div style="display:flex;flex-direction:row;justify-content:space-around;background-color:white;min-height:calc(70vh - 65px - 53px);padding-top:5vh;padding-bottom:5vh;padding-left:3vw;padding-right:3vw;margin-bottom:5vh;width:100%;">                
                            <div style="display:flex;flex-direction:column; width:40%">
                                <h3 style="margin-bottom: 50px">Imagenes asociadas a este modelo</h3>
                                @foreach($imagenes as $imagen)
                                    <div style="display:flex;flex-direction:row;justify-content:space-between; margin-bottom:15px; align-items:center">
                                        <p>{{$imagen->name}}</p>
                                        <a class="btn rounded-pill botonmodelos" style="width:125px;border:3px solid #959595;color:#959595;" href="{{route('editarimagen',$imagen->id)}}">Editar</a>
                                    </div>
                                @endforeach
                            </div>
                            </br></br></br></br>
                            <form style="width:50%;margin-top:50px"action="{{route('updatemodelinfo',$carmodel[0])}}" method="POST" enctype="multipart/form-data">
                                <h4>Editar datos</h4>
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
                                </br></br><input type="submit" class="btn rounded-pill botonmodelos" style="width:125px;border:3px solid #959595;color:#959595;" value="Actualizar">
                            </form>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection