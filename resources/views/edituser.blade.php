@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <form action="{{route('saveedituser',$user[0]->id)}}" method="POST">
            @csrf
            <label for="nombre" class="col-md-4 col-form-label text-md-left">Nombre</label>
            <input type="text" name="nombre" value="{{$user[0]->name}}" class="form form-control" required>
            <label for="correo" class="col-md-4 col-form-label text-md-left">Correo</label>
            <input type="text" name="correo" value="{{$user[0]->email}}" class="form form-control" required>
            <label for="contraseña" class="col-md-4 col-form-label text-md-left">Password</label></br>
            <input type="password" name="contraseña" value="" class="form form-control">
            <label for="rol" class="col-md-4 col-form-label text-md-left">Role</label></br>
            <select name="rol">
                @foreach($roles as $rol)
                    <option value="{{$rol->id}}">{{$rol->role}}</option>
                @endforeach
            </select>
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