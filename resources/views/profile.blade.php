@extends('layouts.app3')

@section('content')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script>
    $(document).ready(function(){
        $(".bt1").click(function(){
            var altura = $(document).height();
            $("#divcontenedorimportante").css({"display":"flex","height":altura+"px"});

        })
        $("#bt2").click(function(){
            $("#divcontenedorimportante").css({"display":"none"});
        });
    })
</script>
    <div class="container-fluid" style="width:100vw !important;margin:0;padding:0;background-color:#f8f9fa;">
        <div class="d-flex flex-column" style="width:100%">
            @if($user->role_id == 1) 
            <!-- Nav Administrador -->     
            <nav class="navbar navbar-expand-lg navbar-light bg-light navapp" style="padding-bottom:0;padding-left:0;padding-right:0;margin-bottom:0;margin-left:10%;margin-right:10%;">
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #8A8A8A;" href="{{route('profile')}}">Datos personales</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('gestionmodelos')}}">Gestionar modelos</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('gestionusers')}}">Gestionar usuarios</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('gestionofertas')}}">Gestionar solicitudes</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('gestionvariantes')}}">Gestionar variantes</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('logs')}}">Logs</a>
            </nav>
            @else
            <!-- Nav Cliente -->     
            <nav class="navbar navbar-expand-lg navbar-light bg-light navapp" style="padding-bottom:0;padding-left:0;padding-right:0;margin-bottom:0;margin-left:10%;margin-right:10%;">
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #8A8A8A;" href="{{route('profile')}}">Datos personales</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('seguridad')}}">Inicio de sesión y seguridad</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('miscoches')}}">Mis coches</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('misofertas')}}">Mis ofertas</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('privacidad')}}">Privacidad y cookies</a>
            </nav>
            @endif
            <div style="z-index:1;background-color:#191F22;min-height:calc(100vh - 65px - 53px);width:100%;">
                <div style="margin-left:10%;margin-right:10%;padding-top:25px;">
                    <p class="h3 text-white" style="font-weight: bold;">Datos personales</p>
                    <p class="text-white">Aquí puede ver los datos de contacto que se conservan en su perfil de Golmo ID. </p>
                    <div style="background-color:white;min-height:calc(70vh - 65px - 53px);padding-top:5vh;padding-bottom:5vh;padding-left:3vw;padding-right:3vw;margin-bottom:5vh;">
                        <p class="h4" style="font-weight: bold; border-bottom:1px solid #D7D1D1;padding-bottom:5px;">Nombre de usuario</p>
                        <div class="d-flex flex-row divcontenedor2" style="padding-top:5px;width:45%;">
                            <p class="text-secondary pperfil" style="width:40%;">Nombre</p>
                            <p class="ml-4 pperfil" style="width:60%;">{{ __($user->name) }}</p>
                        </div>
                        <p class="h4" style="font-weight: bold; border-bottom:1px solid #D7D1D1;padding-bottom:5px;">Dirección de correo electrónico y rol</p>
                        <div class="d-flex flex-row divcontenedor" style="padding-top:5px;width:100%;">
                            <div class="d-flex flex-row divcontenedor2" style="width:45%;">
                                <p class="text-secondary pperfil" style="width:40%;">Dirección</p>
                                <p class="ml-4 pperfil" style="width:60%;">{{ __($user->email) }}</p>
                            </div>
                            <div class="d-flex flex-row divcontenedor2" style="width:55%;">
                                <p class="text-secondary pperfil" style="width:40%;margin-left: 3rem;">Rol</p>
                                <p class="ml-4 pperfil" style="width:60%;">{{ __($rol) }}</p>
                            </div>
                        </div>
                        <p class="h4" style="font-weight: bold; border-bottom:1px solid #D7D1D1;padding-bottom:5px;">Fecha de nacimiento y teléfono</p>
                        <div class="d-flex flex-row divcontenedor" style="padding-top:5px;width:100%;">
                            <div class="d-flex flex-row divcontenedor2" style="width:45%;">
                                <p class="text-secondary pperfil" style="width:40%;">Nacimiento</p>
                                <p class="ml-4 pperfil" style="width:60%;">{{ __($user->birthdate) }}</p>
                            </div>
                            <div class="d-flex flex-row divcontenedor2" style="width:55%;">
                                <p class="text-secondary pperfil" style="width:40%;margin-left: 3rem;">Teléfono</p>
                                <p class="ml-4 pperfil" style="width:60%;">{{ __($user->phone_number) }}</p>
                            </div>
                        </div>
                        <p class="h4" style="font-weight: bold; border-bottom:1px solid #D7D1D1;padding-bottom:5px;">Dirección y género</p>
                        <div class="d-flex flex-row divcontenedor" style="padding-top:5px;width:100%;">
                            <div class="d-flex flex-row divcontenedor2" style="width:45%;">
                                <p class="text-secondary pperfil" style="width:40%;">Dirección</p>
                                <p class="ml-4 pperfil" style="width:60%;">{{ __($user->direccion) }}</p>
                            </div>
                            <div class="d-flex flex-row divcontenedor2" style="width:55%;">
                                <p class="text-secondary pperfil" style="width:40%;margin-left: 3rem;">Género</p>
                                <p class="ml-4 pperfil" style="width:60%;">{{ __($gender) }}</p>
                            </div>
                        </div>
                        <a class="nav-link bt1" style="text-decoration:none;color:#292929;width:150px;cursor:pointer;">Editar datos</a>
                    </div>
                </div>
            </div>
            <div id="divcontenedorimportante" style="display:none;top:0;left:0;width:100vw;min-height:100vh;flex-direction:row;z-index:300;position:absolute;background-color:rgba(0,0,0,0.5);">
                <div style="position:absolute;top:0;left:0;z-index:3000;min-height:90vh;margin-top:5vh;margin-bottom:5vh;width:80vw;margin-left:10vw;margin-right:10vw;opacity:1 !important;background-color:#FEFEFE;">
                    <form action="{{route('saveeditmiperfil')}}" method="POST">
                    @csrf
                        <div style="width:100%;display:flex;flex-direction:row;">
                            <input name="id" id="inputid" type="hidden" value="">
                            <div style="margin-top:2vh;margin-bottom:2vh;margin-left:85%;width:15%;display:flex;flex-direction:row;justify-content:center;align-items:center;">
                                <img id="imagenlogopopup" style="width:60%;height:auto;margin-right:2.5%;" src="http://drive.google.com/uc?export=view&id=1UpyHgQ9jYR4aaxlIfSoyWupH-JjGHJ8s" alt="logogolmo">
                            </div>
                        </div>
                        <div style="display:flex;flex-direction:column;width:80%;margin-left:10%;margin-right:10%;">
                            <p class="h4" style="margin-left:5%;font-weight:bold;width:95%;">Datos personales</p>
                            <div style="width:100%;display:flex;flex-direction:row;justify-content:center;align-items:center;">
                                <div style="display:flex;flex-direction:column;width:40%;margin-left:5%;margin-right:5%;">
                                    <label for="nombre" style="padding-left:0; font-size:15px;font-weight:bold;" class="col-md-4 col-form-label text-md-left">Nombre</label>
                                    <input id="inputnombre" type="text" name="nombre" value="{{$user->name}}" style="padding:0 !important; width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:1px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;border-radius:0 !important;" class="form form-control" required>
                                </div>
                                <div style="display:flex;flex-direction:column;width:40%;margin-left:5%;margin-right:5%;">
                                    <label for="correo" style="padding-left:0; font-size:15px;font-weight:bold;" class="col-md-4 col-form-label text-md-left">Correo</label>
                                    <input type="text" name="correo" value="{{$user->email}}" style="padding:0 !important; width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:1px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;border-radius:0 !important;" class="form form-control" required>
                                </div>
                            </div>
                            <div style="width:100%;display:flex;flex-direction:row;justify-content:center;align-items:center;"> 
                                <div style="display:flex;flex-direction:column;width:40%;margin-left:5%;margin-right:5%;">
                                    <label for="contraseña" style="padding-left:0;font-size:15px;font-weight:bold;" class="col-md-4 col-form-label text-md-left">Password</label>
                                    <input type="password" style="padding:0 !important; width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:1px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;border-radius:0 !important;" name="contraseña" value="" class="form form-control">
                                </div>
                                <div style="display:flex;flex-direction:column;width:40%;margin-left:5%;margin-right:5%;">
                                    <label for="gender" style="padding-left:0; font-size:15px;font-weight:bold;" class="col-md-4 col-form-label text-md-left">Genero</label>
                                    <select id="gender" placeholder="Tratamiento" name="gender" value="{{ old('gender') }}" required autocomplete="gender" style="height: calc(1.6em + 0.75rem + 2px);width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:1px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;border-radius:0 !important;">
                                        <option value="0">Sin genero</option>
                                        <option value="1">Hombre</option>
                                        <option value="2">Mujer</option>
                                    </select>
                                </div>
                            </div>
                            <div style="width:100%;display:flex;flex-direction:row;justify-content:center;align-items:center;">
                                <div style="display:flex;flex-direction:column;width:40%;margin-left:5%;margin-right:5%;">
                                    <label for="nacimiento" style="padding-left:0; font-size:15px;font-weight:bold;" class="col-md-4 col-form-label text-md-left">Nacimiento</label>
                                    <input type="date" name="nacimiento" value="{{$user->birthdate}}" style="padding:0 !important; width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:1px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;border-radius:0 !important;" class="form form-control" required>
                                </div>
                                <div style="display:flex;flex-direction:column;width:40%;margin-left:5%;margin-right:5%;">
                                    <label for="telefono"  style="padding-left:0; font-size:15px;font-weight:bold;" class="col-md-4 col-form-label text-md-left">Telefono</label>
                                    <input type="text" maxlength="9" name="telefono" value="{{$user->phone_number}}" style="padding:0 !important; width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:1px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;border-radius:0 !important;" class="form form-control" required>
                                </div>
                            </div>
                            <div style="width:100%;display:flex;flex-direction:row;justify-content:center;align-items:center;">
                                <div style="display:flex;flex-direction:column;width:100%;margin-left:5%;margin-right:5%;">
                                    <label for="direccion" style="padding-left:0; font-size:15px;font-weight:bold;" class="col-md-4 col-form-label text-md-left">Dirección</label>
                                    <input type="text" name="direccion" value="{{$user->direccion}}" style="padding:0 !important; width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:1px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;border-radius:0 !important;" class="form form-control" required>
                                </div>
                            </div>
                            <div style="margin-top:5vh;display:flex;flex-direction:row;justify-content:center;align-items:center;">
                                <div style="display:flex;flex-direction:row;justify-content:center;align-items:center;width:40%;margin-left:5%;margin-right:5%;">
                                    <button type="submit" id="button" style="padding-top:5px;padding-bottom:5px;width:100%; margin-bottom:5px; border:1px solid #7C7C7C;background-color:transparent; outline:none;font-size:15px;color:#7C7C7C;">Actualizar</button>
                                </div>
                                <div style="display:flex;flex-direction:row;justify-content:center;align-items:center;width:40%;margin-right:5%;margin-left:5%;">
                                    <input type="button" id="bt2" style="padding-top:5px;padding-bottom:5px;width:100%; margin-bottom:5px; border:1px solid #7C7C7C;background-color:transparent; outline:none;font-size:15px;color:#7C7C7C;" value="Cancelar">
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>  
        </div>
    </div>
@endsection