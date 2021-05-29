@extends('layouts.app')

@section('content')
    <div class="container-fluid" style="width:100vw !important;margin:0;padding:0;background-color:#f8f9fa;color:black;">
        <div class="d-flex flex-column" style="width:100%">
            <form action="{{route('nuevavariante')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div style="min-height:calc(100vh - 65px - 53px);width:100%;">
                    <div style="margin-left:10%;margin-right:10%;padding-top:10vh;">
                        <p class="h4" style="font-weight: bold;">Nueva variante</p>
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
                                <label for="tipo" style="padding-left:0;font-size:15px;font-weight:bold;" class="col-md-4 col-form-label text-md-left">Tipo</label>
                                <select style="padding:0 !important; width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:1px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;border-radius:0 !important;" name="tipo" required>
                                    <option value="Llanta">Llanta</option>
                                    <option value="Color">Color</option>
                                    <option value="Motor">Motor</option>
                                    <option value="Audio">Audio</option>
                                    <option value="Acabados">Acabados</option>
                                </select>    
                            </div>
                            <div style="display:flex;flex-direction:column;width:45%;margin-right:5%;">
                                <label for="gamas" style="padding-left:0;font-size:15px;font-weight:bold;" class="col-md-4 col-form-label text-md-left">Gamas</label>
                                <select style="width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:1px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;border-radius:0 !important;" name="gamas" required>
                                    @foreach($gama as $gam)
                                        <option value="{{$gam->id}}">{{$gam->name}}</option>
                                    @endforeach
                                </select>    
                            </div>
                        </div>
                        <div class="divcontenedorofertas" style="display:flex;flex-direction:row;width:75%;margin-top:15px;">
                            <div style="display:flex;flex-direction:column;width:100%;margin-right:5%;">   
                                <label for="imagen" style="padding-left:0;font-size:15px;font-weight:bold;" class="col-md-4 col-form-label text-md-left">Imagen</label>
                                <input style="padding:0 !important; width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:1px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;border-radius:0 !important;" type="file" name="imagen" required>    
                            </div>
                        </div>
                        <div class="divcontenedorofertas" style="display:flex;flex-direction:row;width:75%;margin-top:10vh;">
                            <input type="submit" id="button" style="padding-top:5px;padding-bottom:5px;width:45%; margin-bottom:5px; border:1px solid #7C7C7C;background-color:transparent; outline:none;font-size:15px;color:#7C7C7C;">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection