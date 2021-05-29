@extends('layouts.app')

@section('content')
    <div class="container-fluid" style="width:100vw !important;margin:0;padding:0;background-color:#f8f9fa;color:black;">
        <div class="d-flex flex-column" style="width:100%">
            <form action="{{route('nuevaoferta')}}" method="POST">
            @csrf
                <div style="min-height:calc(100vh - 65px - 53px);width:100%;">
                    <div style="margin-left:10%;margin-right:10%;padding-top:25px;">
                        <p class="h4" style="font-weight: bold;">Tipo de consulta *</p>
                        <div class="divcontenedorofertas" style="display:flex;flex-direction:row;width:50%;margin-top:15px;">
                            <div style="display:flex;flex-direction:row;width:50%;align-items:center;">
                                <input type="radio" name="tipo_s" value="1" required>
                                <label style="margin:0;margin-left:10px;">Oferta comercial</label>
                            </div>
                            <div style="display:flex;flex-direction:row;width:50%;align-items:center;">
                                <input type="radio" name="tipo_s" value="2" required>
                                <label style="margin:0;margin-left:10px;">Prueba de conducción</label>
                            </div>
                        </div>
                        <div class="divcontenedorofertas" style="display:flex;flex-direction:row;width:75%;margin-top:15px;">
                            <div style="display:flex;flex-direction:column;width:45%;margin-right:5%;">
                                <label for="name" style="padding-left:0;font-size:15px;font-weight:bold;" class="col-md-4 col-form-label text-md-left">Nombre</label>
                                <input style="padding:0 !important; width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:1px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;border-radius:0 !important;" type="text" name="name" value="{{$user->name}}" required>
                            </div>
                            <div style="display:flex;flex-direction:column;width:45%;margin-right:5%;">
                                <label for="email" style="padding-left:0;font-size:15px;font-weight:bold;" class="col-md-4 col-form-label text-md-left">Dirección</label>
                                <input style="padding:0 !important; width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:1px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;border-radius:0 !important;" type="text" name="email" value="{{$user->email}}" required>
                            </div>
                        </div>
                        <div class="divcontenedorofertas" style="display:flex;flex-direction:row;width:75%;margin-top:15px;">
                            <div style="display:flex;flex-direction:column;width:45%;margin-right:5%;">
                                <label for="birthdate" style="padding-left:0;font-size:15px;font-weight:bold;" class="col-md-4 col-form-label text-md-left">Nacimiento</label>
                                <input style="padding:0 !important; width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:1px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;border-radius:0 !important;" type="date" name="birthdate" value="{{$user->birthdate}}" required>
                            </div>
                            <div style="display:flex;flex-direction:column;width:45%;margin-right:5%;">
                                <label for="phonenumber" style="padding-left:0;font-size:15px;font-weight:bold;" class="col-md-4 col-form-label text-md-left">Teléfono</label>
                                <input style="width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:1px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;border-radius:0 !important;" type="text" name="phonenumber" value="{{$user->phone_number}}" required>
                            </div>
                        </div>
                        <p class="h4" style="margin-top:25px;font-weight: bold;">Modelo de interés *</p>
                        <div class="divcontenedorofertas" style="margin-top:15px;display:flex;flex-direction:column;width:45%;margin-right:5%;">
                            <label for="modelo" style="padding-left:0;font-size:15px;font-weight:bold;" class="col-md-4 col-form-label text-md-left">Modelo</label>
                            <select name="modelo" style="padding:0 !important; width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:1px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;border-radius:0 !important;">
                                @foreach($models as $model)
                                    <option value="{{$model->id}}">{{$model->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div style="display:flex;flex-direction:row;align-items:center;">
                            <input type="checkbox" name="protect" required>
                            <label for="protect" class="col-md-4 col-form-label text-md-left">Acepta conforme has leido nuestras políticas de Privacidad y Protección de datos</label>
                        </div>
                        <div style="margin-top:15px;display:flex;flex-direction:row;justify-content:center;align-items:center;width:45%;">
                            <button type="submit" id="button" style="padding-top:5px;padding-bottom:5px;width:100%; margin-bottom:5px; border:1px solid #7C7C7C;background-color:transparent; outline:none;font-size:15px;color:#7C7C7C;">Crear</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
