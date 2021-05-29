@extends('layouts.app')

@section('content')
    <div class="container-fluid" style="width:100vw !important;margin:0;padding:0;background-color:#f8f9fa;color:black;">
        <div class="d-flex flex-column" style="width:100%">
            <form action="{{route('nuevaimagen',$gamaid)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div style="min-height:calc(100vh - 65px - 53px);width:100%;">
                    <div style="margin-left:10%;margin-right:10%;padding-top:10vh;">
                        <p class="h4" style="font-weight: bold;">Imagenes nuevo modelo</p>
                        <div class="divcontenedorofertas" style="display:flex;flex-direction:row;width:75%;margin-top:15px;">
                            <div style="display:flex;flex-direction:column;width:45%;margin-right:5%;">  
                                <label for="nombre" style="padding-left:0;font-size:15px;font-weight:bold;" class="col-md-4 col-form-label text-md-left">Nombre</label>
                                <input style="padding:0 !important; width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:1px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;border-radius:0 !important;" type="text" name="nombre" value="" required>   
                            </div>
                            <div style="display:flex;flex-direction:column;width:45%;margin-right:5%;">
                                <label for="modelo" style="padding-left:0;font-size:15px;font-weight:bold;" class="col-md-4 col-form-label text-md-left">Modelo</label>
                                <input style="padding:0 !important; width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:1px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;border-radius:0 !important;" type="text" name="modelo" value="{{$modelo->name}}" disabled>
                            </div>
                        </div>
                        <div class="divcontenedorofertas" style="display:flex;flex-direction:row;width:75%;margin-top:15px;">
                            <div style="display:flex;flex-direction:column;width:45%;margin-right:5%;">  
                                <label for="color" style="padding-left:0;font-size:15px;font-weight:bold;" class="col-md-4 col-form-label text-md-left">Color</label>
                                <select style="padding:0 !important; width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:1px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;border-radius:0 !important;" name="color" required>
                                @if(count($colores)!=0)
                                    @foreach($colores as $color)
                                    <option value="{{$color->id}}" selected>{{$color->name}}</option>
                                    @endforeach
                                @else
                                    <option value="0" selected>No hay colores</option>
                                @endif
                                </select>    
                            </div>
                            <div style="display:flex;flex-direction:column;width:45%;margin-right:5%;">
                                <label for="llanta" style="padding-left:0;font-size:15px;font-weight:bold;" class="col-md-4 col-form-label text-md-left">Llanta</label>
                                <select style="padding:0 !important; width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:1px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;border-radius:0 !important;" name="llanta">
                                @if(count($llantas)!=0)
                                    @foreach($llantas as $llanta)
                                    <option value="{{$llanta->id}}" selected>{{$llanta->name}}</option>
                                    @endforeach
                                @else
                                    <option value="0" selected>No hay llantas</option>
                                @endif
                                </select>    
                            </div>
                        </div>
                        <div class="divcontenedorofertas" style="display:flex;flex-direction:row;width:75%;margin-top:15px;">
                            <div style="display:flex;flex-direction:column;width:45%;margin-right:5%;">
                                <label for="url" style="padding-left:0;font-size:15px;font-weight:bold;" class="col-md-4 col-form-label text-md-left">Imagen</label>
                                <input style="padding:0 !important; width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:1px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;border-radius:0 !important;" type="file" name="url" required>
                            </div>
                        </div>
                        <div style="display:flex;flex-direction:row;width:75%;margin-top:15px;">
                            <div style="display:flex;flex-direction:column;width:45%;margin-right:5%;">
                                <button type="submit" id="button" style="padding-top:5px;padding-bottom:5px;width:100%; margin-bottom:5px; border:1px solid #7C7C7C;background-color:transparent; outline:none;font-size:15px;color:#7C7C7C;">Añadir</button>
                            </div>
                            <div style="display:flex;flex-direction:column;width:45%;margin-right:5%;">
                                <a id="button" style="padding-top:5px;padding-bottom:5px;width:100%; margin-bottom:5px; border:1px solid #7C7C7C;background-color:transparent; outline:none;font-size:15px;color:#7C7C7C;text-align:center;" href="{{route('gestionmodelos')}}" role="button">Finalizar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection



@extends('layouts.app')

@section('content')
<div>
    <div class="row justify-content-center ">
        <form action="{{route('nuevaimagen',$gamaid)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="nombre" class="col-md-4 col-form-label text-md-left">Nombre</label>
            <input type="text" name="nombre" value="" class="form form-control" required>
            
            <label class="col-md-4 col-form-label text-md-left">Modelo</label>
            <p>{{$modelo->name}}</p>
            <input type="hidden" name="modelo" value="{{$modelo_id}}" >
            <label for="url" class="col-md-4 col-form-label text-md-left">Imagen</label>
            <input type="file" name="url" class="form form-control" required>
            <label for="color" class="col-md-4 col-form-label text-md-left">Color</label>
            <select name="color" required>
            @if(count($colores)!=0)
                @foreach($colores as $color)
                <option value="{{$color->id}}" selected>{{$color->name}}</option>
                @endforeach
            @else
                <option value="0" selected>No hay colores</option>
            @endif
            </select>
            <label for="llanta" class="col-md-4 col-form-label text-md-left">Llantar</label>
            <select name="llanta">
            @if(count($llantas)!=0)
                @foreach($llantas as $llanta)
                <option value="{{$llanta->id}}" selected>{{$llanta->name}}</option>
                @endforeach
            @else
                <option value="0" selected>No hay llantas</option>
            @endif
            </select>
            <input type="submit" class="btn btn-primary" value="Añadir">
        </form>
    </div>
    <a class="btn btn-primary" href="{{route('gestionmodelos')}}" role="button">Finalizar</button>
</div>
@endsection