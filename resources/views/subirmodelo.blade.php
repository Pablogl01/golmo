@extends('layouts.app')

@section('content')
    <div class="container-fluid" style="width:100vw !important;margin:0;padding:0;background-color:#f8f9fa;color:black;">
        <div class="d-flex flex-column" style="width:100%">
            <form action="{{route('nuevomodelo')}}" method="POST">
                @csrf
                <div style="min-height:calc(100vh - 65px - 53px);width:100%;">
                    <div style="margin-left:10%;margin-right:10%;padding-top:10vh;">
                        <p class="h4" style="font-weight: bold;">Nuevo modelo</p>
                        <div class="divcontenedorofertas" style="display:flex;flex-direction:row;width:75%;margin-top:15px;">
                            <div style="display:flex;flex-direction:column;width:45%;margin-right:5%;">   
                                <label for="nombre" style="padding-left:0;font-size:15px;font-weight:bold;" class="col-md-4 col-form-label text-md-left">Nombre</label>
                                <input style="padding:0 !important; width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:1px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;border-radius:0 !important;" type="text" name="nombre" value="" required>   
                            </div>
                            <div style="display:flex;flex-direction:column;width:45%;margin-right:5%;">
                                <label for="precio" style="padding-left:0;font-size:15px;font-weight:bold;" class="col-md-4 col-form-label text-md-left">Precio</label>
                                <input style="padding:0 !important; width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:1px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;border-radius:0 !important;" type="number" name="precio" value="" required>
                            </div>
                        </div>
                        <div class="divcontenedorofertas" style="display:flex;flex-direction:row;width:75%;margin-top:15px;">
                            <div style="display:flex;flex-direction:column;width:45%;margin-right:5%;">      
                                <label for="gamas" style="padding-left:0;font-size:15px;font-weight:bold;" class="col-md-4 col-form-label text-md-left">Gama</label>
                                <select style="padding:0 !important; width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:1px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;border-radius:0 !important;" name="gamas" required>
                                    @foreach($gamas as $gama)
                                        <option value="{{$gama->name}}">{{$gama->name}}</option>
                                    @endforeach
                                </select>    
                            </div>
                            <div style="display:flex;flex-direction:column;width:45%;margin-right:5%;">
                                <label for="autonomia" style="padding-left:0;font-size:15px;font-weight:bold;" class="col-md-4 col-form-label text-md-left">Autonomia</label>
                                <input step="any" style="padding:0 !important; width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:1px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;border-radius:0 !important;" type="number" name="autonomia" value="" required>    
                            </div>
                        </div>
                        <div class="divcontenedorofertas" style="display:flex;flex-direction:row;width:75%;margin-top:15px;">
                            <div style="display:flex;flex-direction:column;width:45%;margin-right:5%;">   
                                <label for="aceleracion" style="padding-left:0;font-size:15px;font-weight:bold;" class="col-md-4 col-form-label text-md-left">Aceleración</label>
                                <input step="any" style="padding:0 !important; width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:1px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;border-radius:0 !important;" type="number" name="aceleracion" value="" required>   
                            </div>
                            <div style="display:flex;flex-direction:column;width:45%;margin-right:5%;">
                                <label for="velocidad_maxima" style="padding-left:0;font-size:15px;font-weight:bold;" class="col-md-4 col-form-label text-md-left">Velocidad</label>
                                <input step="any" style="padding:0 !important; width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:1px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;border-radius:0 !important;" type="number" name="velocidad_maxima" value="" required>
                            </div>
                        </div>
                        <div class="divcontenedorofertas" style="display:flex;flex-direction:row;width:75%;margin-top:15px;">
                            <div style="display:flex;flex-direction:column;width:45%;margin-right:5%;">   
                                <label for="caballos" style="padding-left:0;font-size:15px;font-weight:bold;" class="col-md-4 col-form-label text-md-left">Caballos</label>
                                <input step="any" style="padding:0 !important; width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:1px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;border-radius:0 !important;" type="number" name="caballos" value="" required>   
                            </div>
                            <div style="display:flex;flex-direction:column;width:45%;margin-right:5%;">
                                <label for="coeficiente" style="padding-left:0;font-size:15px;font-weight:bold;" class="col-md-4 col-form-label text-md-left">Coeficiente</label>
                                <input step="any" style="padding:0 !important; width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:1px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;border-radius:0 !important;" type="number" name="coeficiente" value="" required>
                            </div>
                        </div>
                        <div class="divcontenedorofertas" style="display:flex;flex-direction:row;width:75%;margin-top:15px;">
                            <div style="display:flex;flex-direction:column;width:45%;margin-right:5%;">   
                                <label for="tren_motriz" style="padding-left:0;font-size:15px;font-weight:bold;" class="col-md-4 col-form-label text-md-left">Tren Motriz</label>
                                <input style="padding:0 !important; width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:1px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;border-radius:0 !important;" type="text" name="tren_motriz" value="" required>   
                            </div>
                            <div style="display:flex;flex-direction:column;width:45%;margin-right:5%;">
                                <label for="llantas" style="padding-left:0;font-size:15px;font-weight:bold;" class="col-md-4 col-form-label text-md-left">Llantas</label>
                                <input style="padding:0 !important; width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:1px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;border-radius:0 !important;" type="text" name="llantas" value="" required>
                            </div>
                        </div>
                        <div class="divcontenedorofertas" style="display:flex;flex-direction:row;width:75%;margin-top:15px;">
                            <div style="display:flex;flex-direction:column;width:45%;margin-right:5%;">   
                                <label for="capacidad" style="padding-left:0;font-size:15px;font-weight:bold;" class="col-md-4 col-form-label text-md-left">Capacidad</label>
                                <input style="padding:0 !important; width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:1px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;border-radius:0 !important;" type="number" name="capacidad" value="" required>   
                            </div>
                            <div style="display:flex;flex-direction:column;width:45%;margin-right:5%;">
                                <label for="maletero" style="padding-left:0;font-size:15px;font-weight:bold;" class="col-md-4 col-form-label text-md-left">Maletero</label>
                                <input style="padding:0 !important; width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:1px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;border-radius:0 !important;" type="number" name="maletero" value="" required>
                            </div>
                        </div>
                        <div class="divcontenedorofertas" style="display:flex;flex-direction:row;width:75%;margin-top:15px;">
                            <div style="display:flex;flex-direction:column;width:45%;margin-right:5%;">   
                                <label for="description" style="padding-left:0;font-size:15px;font-weight:bold;" class="col-md-4 col-form-label text-md-left">Descripción</label>
                                <textarea style="padding:0 !important; width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:1px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;border-radius:0 !important;" name="description" value=""  required></textarea>
                            </div>
                            <div style="display:flex;flex-direction:column;width:45%;margin-right:5%;">
                                <label for="description2" style="padding-left:0;font-size:15px;font-weight:bold;" class="col-md-4 col-form-label text-md-left">Descripción 2</label>
                                <textarea style="padding:0 !important; width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:1px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;border-radius:0 !important;" name="description2" value=""  required></textarea>
                            </div>
                        </div>
                        <div class="divcontenedorofertas" style="display:flex;flex-direction:row;width:75%;margin-top:15px;">
                            <div style="display:flex;flex-direction:column;width:45%;margin-right:5%;">   
                                <label for="peso" style="padding-left:0;font-size:15px;font-weight:bold;" class="col-md-4 col-form-label text-md-left">Peso</label>
                                <input style="padding:0 !important; width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:1px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;border-radius:0 !important;" type="number" name="peso" value="" required>   
                            </div>
                        </div>
                        <div class="divcontenedorofertas" style="display:flex;flex-direction:row;width:75%;margin-top:10vh;">
                            <input type="submit" id="button" style="padding-top:5px;padding-bottom:5px;width:45%; margin-bottom:5px; border:1px solid #7C7C7C;background-color:transparent; outline:none;font-size:15px;color:#7C7C7C;" value="Sigiente">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

