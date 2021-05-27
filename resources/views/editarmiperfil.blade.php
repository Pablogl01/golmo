@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <form action="{{route('saveeditmiperfil')}}" method="POST">
            @csrf
            <label for="nombre" class="col-md-4 col-form-label text-md-left">Nombre</label>
            <input type="text" name="nombre" value="{{$user->name}}" class="form form-control" required>
            <label for="correo" class="col-md-4 col-form-label text-md-left">Correo</label>
            <input type="text" name="correo" value="{{$user->email}}" class="form form-control" required>
            <label for="contraseña" class="col-md-4 col-form-label text-md-left">Password</label></br>
            <input type="password" name="contraseña" value="" class="form form-control">
            <label for="gender" class="col-md-4 col-form-label text-md-left">Genero</label></br>
            <select id="gender" placeholder="Tratamiento" class="inputs @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required autocomplete="gender" style="width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:2px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;border-radius:0 !important;">
                <option value="0">Sin genero</option>
                <option value="1">Hombre</option>
                <option value="2">Mujer</option>
            </select>
            <label for="direccion" class="col-md-4 col-form-label text-md-left">Dirección</label></br>
            <input type="text" name="direccion" value="{{$user->direccion}}" class="form form-control">
            <label for="nacimiento" class="col-md-4 col-form-label text-md-left">Fecha nacimiento</label></br>
            <input type="date" name="nacimiento" value="{{$user->birthdate}}" class="form form-control">
            <label for="telefono" class="col-md-4 col-form-label text-md-left">Telefono</label></br>
            <input type="number" name="telefono" value="{{$user->phone_number}}" class="form form-control">
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