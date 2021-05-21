@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="d-flex flex-column">
            <form action="{{route('misofertas')}}" method="GET">
                <p>Tipo de oferta</p>
                </br>
                @if($oferta->type==1)
                <label>Oferta comercial</label>
                <input type="radio" name="tipo_s" value="1" required checked>
                <label>Prueba de conducción</label>
                <input type="radio" name="tipo_s" value="2" required>
                @else
                <label>Oferta comercial</label>
                <input type="radio" name="tipo_s" value="1" required>
                <label>Prueba de conducción</label>
                <input type="radio" name="tipo_s" value="2" required checked>
                @endif
                </br>
                <label for="modelo" class="col-md-4 col-form-label text-md-left">Modelo de la oferta</label>
                <select name="modelo">
                    <option>{{$carmodel}}</option>
                </select>
                <br/>
                <label for="protect" class="col-md-4 col-form-label text-md-left">Protección de datos</label>
                <input type="checkbox" name="protect" checked required>
                </br>
                <label for="name" class="col-md-4 col-form-label text-md-left">Nombre</label>
                <input type="text" name="name" value="{{$user->name}}" required>
                </br>
                <label for="email" class="col-md-4 col-form-label text-md-left">Correo electrónico</label>
                <input type="text" name="email" value="{{$user->email}}" required>
                </br>
                <label for="phonenumber" class="col-md-4 col-form-label text-md-left">Telefono</label>
                <input type="number" name="phonenumber" value="{{$user->phone_number}}" required>
                </br>
                <label for="email" class="col-md-4 col-form-label text-md-left">Fecha naciemiento</label>
                <input type="date" name="email" value="{{$user->birthdate}}" required>
                </br>
                <input type="submit" class="btn btn-primary" value="Volver">
                <br/>
                <br/>
            </form>
        </div>
    </div>
</div>
@endsection
