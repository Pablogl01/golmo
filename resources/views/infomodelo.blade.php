@extends('layouts.app')

@section('content')
<div class="container-fluid" style="width:100vw !important;margin:0;padding:0;">
    <div style="z-index:100;display:flex;flex-direction:column;align-items:center;height:100vh;width:100vw;background-image:linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0),rgba(0,0,0,0),rgba(0,0,0,0),rgba(0,0,0,0),rgba(0,0,0,0), black),url({{('../storage/'.$imagenbase)}});background-repeat:no-repeat;background-size:cover;position:relative;background-position:center;overflow-y:hidden;">        
        <div style="display:flex;flex-direction:column;justify-content:center;align-items:center;margin-top:20vh;">
            <p style="color:white;font-size:22px;text-transform:uppercase;">{{ __($carmodel[0]->name) }} </p>
        </div>
        <div id="divencargarmodelo1" style="display:flex;flex-direction:row;justify-content:center;align-items:center;margin-top:40vh;width:60vw;margin-left:20vw;margin-right:20vw;">
            <div style="text-align:center;display:flex;flex-direction:column;justify-content:center;align-items:center;width:17.5%;">
                <p style="margin:0;color:white;font-size:22px;font-weight:600;">{{ __($carmodel[0]->autonomia) }} km</p>
                <p style="color:white;font-size:15px;">Autonomia (est.)</p>
            </div>
            <div style="text-align:center;display:flex;flex-direction:column;justify-content:center;align-items:center;width:17.5%;;margin-left:2.5%;margin-right:2.5%;">
                <p style="margin:0;color:white;font-size:22px;font-weight:600;">{{ __($carmodel[0]->aceleracion) }} s</p>
                <p style="color:white;font-size:15px;">0-100 km/h*</p>
            </div>
            <div style="text-align:center;display:flex;flex-direction:column;justify-content:center;align-items:center;width:17.5%;;margin-left:2.5%;margin-right:2.5%;">
                <p style="margin:0;color:white;font-size:22px;font-weight:600;">{{ __($carmodel[0]->velocidad_maxima) }} km/h</p>
                <p style="color:white;font-size:15px;">Velocidad máxima</p>
            </div>
            <div style="text-align:center;display:flex;flex-direction:column;justify-content:center;align-items:center;width:17.5%;margin-right:2.5%;">
                <p style="margin:0;color:white;font-size:22px;font-weight:600;">{{ __($carmodel[0]->caballos) }} CV</p>
                <p style="color:white;font-size:15px;">Potencia máxima</p>
            </div>
            <div id="botonencargarmodelo1" style="text-align:center;display:flex;flex-direction:column;justify-content:center;align-items:center;width:17.5%;">
                <a href="{{route('perso',$carmodel[0]->id)}}" style="text-decoration:none;margin-bottom:1rem;border-radius:100px;padding-top:5px;padding-bottom:5px;width:100%;padding-left:15px;padding-right:15px;color:white;text-align:center;display:flex;flex-direction:column;justify-content:center;align-items:center;border:3px solid white;">Encargar</a>
            </div>
        </div>
        <p style="margin-top:30px;color:white;font-size:14px;">Las especificaciones se muestran en valores Europeos</p>
    </div>
    <div id="divcontenedordoblemodelo" style="z-index:100;display:flex;flex-direction:row;align-items:center;height:100vh;width:100vw;background-color:black;background-repeat:no-repeat;background-size:cover;position:relative;background-position:center;overflow-y:hidden;">        
        <div id="divcontenedorimagenmodelo" style="width:46vw;margin-right:2vw;margin-left:2vw;display:flex;flex-direction:column;justify-content:center;align-items:center;">
            <img src="{{('../storage/'.$imagennegra)}}" alt="imagenmodelo" style="object-fit:contain;object-position:center;width:100%;height:100%;">
        </div>  
        <div id="divcontenedorimagenmodelodos" style="margin-left:2vw;margin-right:2vw;width:46vw;display:flex;flex-direction:column;">
            <p id="titulomodelomodelos" style="color:white;font-size:28px;font-weight:bold;">{{ __($carmodel[0]->name) }} <span id="basemodeloboton" style="font-weight:100;">Especificaciones</span></p>
            <div id="botonbasemodelo" style="text-align:center;display:flex;flex-direction:column;justify-content:center;align-items:center;width:25%;">
                <p style="font-size:12px;padding-top:5px;padding-bottom:5px;border-radius:100px;width:100%;padding-left:30px;padding-right:30px;color:white;text-align:center;display:flex;flex-direction:column;justify-content:center;align-items:center;border:3px solid white;">BASE</p>
            </div>
            <div style="display:flex;flex-direction:row;color:white;">
                <div style="display:flex;flex-direction:column;width:50%;">
                    <div style="width:100%;text-align:left;">
                        <hr style="border-top:1px solid white;width:20%;margin-right:80%;">
                    </div>
                    <div style="display:flex;flex-direction:column;width:100%;text-align:left;">
                        <p style="font-weight:bold;margin-bottom:0;">Autonomía</p>
                        <p style="margin-bottom:0;">{{ __($carmodel[0]->autonomia) }} km (est.)</p>
                    </div>
                    <div style="width:100%;text-align:left;">
                        <hr style="border-top:1px solid white;width:20%;margin-right:80%;">
                    </div>
                    <div style="display:flex;flex-direction:column;width:100%;text-align:left;">
                        <p style="font-weight:bold;margin-bottom:0;">Potencia máxima</p>
                        <p style="margin-bottom:0;">{{ __($carmodel[0]->caballos) }} CV</p>
                    </div>
                    <div style="width:100%;text-align:left;">
                        <hr style="border-top:1px solid white;width:20%;margin-right:80%;">
                    </div>
                    <div style="display:flex;flex-direction:column;width:100%;text-align:left;">
                        <p style="font-weight:bold;margin-bottom:0;">Llantas</p>
                        <p style="margin-bottom:0;">{{ __($carmodel[0]->llantas) }}</p>
                    </div>
                    <div style="width:100%;text-align:left;">
                        <hr style="border-top:1px solid white;width:20%;margin-right:80%;">
                    </div>
                    <div style="display:flex;flex-direction:column;width:100%;text-align:left;">
                        <p style="font-weight:bold;margin-bottom:0;">Tamaño depósito</p>
                        <p style="margin-bottom:0;">{{ __($carmodel[0]->capacidad) }} litros</p>
                    </div>
                    <div style="width:100%;text-align:left;">
                        <hr style="border-top:1px solid white;width:20%;margin-right:80%;">
                    </div>
                    <div style="display:flex;flex-direction:column;width:100%;text-align:left;">
                        <p style="font-weight:bold;margin-bottom:0;">Tren Motriz</p>
                        <p style="margin-bottom:0;">{{ __($carmodel[0]->tren_motriz) }}</p>
                    </div>
                    <div style="width:100%;text-align:left;">
                        <hr style="border-top:1px solid white;width:20%;margin-right:80%;">
                    </div>
                </div>
                <div style="display:flex;flex-direction:column;width:50%;">
                    <div style="width:100%;text-align:left;">
                        <hr style="border-top:1px solid white;width:20%;margin-right:80%;">
                    </div>
                    <div style="display:flex;flex-direction:column;width:100%;text-align:left;">
                        <p style="font-weight:bold;margin-bottom:0;">Aceleración</p>
                        <p style="margin-bottom:0;">0 a 100 km/h en {{ __($carmodel[0]->aceleracion) }} s*</p>
                    </div>
                    <div style="width:100%;text-align:left;">
                        <hr style="border-top:1px solid white;width:20%;margin-right:80%;">
                    </div>
                    <div style="display:flex;flex-direction:column;width:100%;text-align:left;">
                        <p style="font-weight:bold;margin-bottom:0;">Velocidad máxima</p>
                        <p style="margin-bottom:0;">{{ __($carmodel[0]->velocidad_maxima) }} km/h ±</p>
                    </div>
                    <div style="width:100%;text-align:left;">
                        <hr style="border-top:1px solid white;width:20%;margin-right:80%;">
                    </div>
                    <div style="display:flex;flex-direction:column;width:100%;text-align:left;">
                        <p style="font-weight:bold;margin-bottom:0;">Coeficiente de arrastre</p>
                        <p style="margin-bottom:0;">{{ __($carmodel[0]->coeficiente) }} Cd</p>
                    </div>
                    <div style="width:100%;text-align:left;">
                        <hr style="border-top:1px solid white;width:20%;margin-right:80%;">
                    </div>
                    <div style="display:flex;flex-direction:column;width:100%;text-align:left;">
                        <p style="font-weight:bold;margin-bottom:0;">Capacidad maletero</p>
                        <p style="margin-bottom:0;">{{ __($carmodel[0]->maletero) }} litros</p>
                    </div>
                    <div style="width:100%;text-align:left;">
                        <hr style="border-top:1px solid white;width:20%;margin-right:80%;">
                    </div>
                    <div style="display:flex;flex-direction:column;width:100%;text-align:left;">
                        <p style="font-weight:bold;margin-bottom:0;">Peso</p>
                        <p style="margin-bottom:0;">{{ __($carmodel[0]->peso) }} kg</p>
                    </div>
                    <div style="width:100%;text-align:left;">
                        <hr style="border-top:1px solid white;width:20%;margin-right:80%;">
                    </div>
                </div>
            </div>
        </div>   
    </div>   
    <div style="z-index:100;display:flex;flex-direction:column;align-items:center;height:100vh;width:100vw;background-color:white;position:relative;overflow-y:hidden;">        
        <div id="divcontenedormodelo12" style="background-image:url({{('../storage/'.$imagenizquierda)}});height:60vh;width:100vw;background-repeat:no-repeat;background-size:cover;position:relative;background-position:center;">
            <div id="divcontenedormodelo2" style="display:flex;flex-direction:row;justify-content:center;align-items:center;margin-top:45vh;width:60vw;margin-left:20vw;margin-right:20vw;">
                <div style="text-align:center;display:flex;flex-direction:column;justify-content:center;align-items:center;width:25%;margin-left:6.25%;">
                    <p style="margin:0;color:white;font-size:22px;font-weight:600;">{{ __($carmodel[0]->caballos) }} CV</p>
                    <p style="color:white;font-size:15px;">Potencia de pico</p>
                </div>
                <div style="text-align:center;display:flex;flex-direction:column;justify-content:center;align-items:center;width:25%;margin-left:6.25%;margin-right:6.25%;">
                    <p style="margin:0;color:white;font-size:22px;font-weight:600;">{{ __($carmodel[0]->velocidad_maxima) }} km/h</p>
                    <p style="color:white;font-size:15px;">Velocidad punta</p>
                </div>
                <div style="text-align:center;display:flex;flex-direction:column;justify-content:center;align-items:center;width:25%;margin-right:6.25%;">
                    <p style="margin:0;color:white;font-size:22px;font-weight:600;">{{ __($carmodel[0]->aceleracion) }} s</p>
                    <p style="color:white;font-size:15px;">0-100 km/h*</p>
                </div>
            </div>
        </div>
        <div id="divcontenedormodelo13" style="height:40vh;width:90vw;margin-left:5%;margin-right:5%;display:flex;flex-direction:row;justify-content:center;align-items:center;">
            <div id="divcontenedor122" style="display:flex;flex-direction:column;width:30%;margin-left:5%;margin-right:5%;">
                <p style="font-size:18px;margin-bottom:0;">Base</p>
                <p style="margin-bottom:5px;font-size:26px;font-weight:bold;">Sobrepasando a Levassor</p>
                <div style="text-align:center;display:flex;flex-direction:column;justify-content:center;align-items:center;width:25%;">
                    <a href="{{route('perso',$carmodel[0]->id)}}" style="text-decoration:none;font-size:10px;padding-top:5px;padding-bottom:5px;border-radius:100px;width:100%;padding-left:30px;padding-right:30px;color:black;text-align:center;display:flex;flex-direction:column;justify-content:center;align-items:center;border:3px solid black;">ENCARGAR</a>
                </div>
            </div>
            <div id="divcontenedor123" style="display:flex;flex-direction:column;width:50%;margin-left:5%;margin-right:5%;">
                <p>Con la mayor autonomía y la aceleración más rápida que cualquier otro vehículo eléctrico en producción, el {{ __($carmodel[0]->name) }}  es la vehículo de mayor rendimiento jamás construido. Ambos trenes motrices, Gran autonomía, junto con una arquitectura de baterías renovada, permiten realizar carreras de cuarto de milla de forma fiable y consistente</p>
            </div>
        </div>
    </div>
    <div id="divcontenedor125" style="z-index:100;display:flex;flex-direction:row;align-items:center;height:100vh;width:100vw;background-color:white;position:relative;overflow-y:hidden;">        
        <div id="divcontenedor124" style="display:flex;flex-direction:row;background-image:url({{('../storage/'.$imagenderecha)}});height:100vh;width:70vw;background-repeat:no-repeat;background-size:cover;position:relative;background-position:center;">
            <div class="divcontenedor127" style="margin-top:75vh;text-align:center;display:flex;flex-direction:column;align-items:center;width:25%;margin-left:6.25%;">
                <p style="margin:0;color:white;font-size:24px;font-weight:600;">{{ __($carmodel[0]->autonomia) }} km</p>
                <p style="color:white;font-size:14px;">Vaya a cualquier parte con hasta {{ __($carmodel[0]->autonomia) }} km de autonomía estimada en una sola carga</p>
            </div>
            <div class="divcontenedor127" style="margin-top:75vh;text-align:center;display:flex;flex-direction:column;align-items:center;width:25%;margin-left:6.25%;margin-right:6.25%;">
                <p style="margin:0;color:white;font-size:24px;font-weight:600;">{{ __($carmodel[0]->capacidad) }} litros</p>
                <p style="color:white;font-size:14px;">Reposte hasta {{ __($carmodel[0]->capacidad) }} litros en menos de 5 minutos</p>
            </div>
            <div class="divcontenedor127" style="margin-top:75vh;text-align:center;display:flex;flex-direction:column;align-items:center;width:25%;margin-right:6.25%;">
                <p style="margin:0;color:white;font-size:24px;font-weight:600;">25.000 +</p>
                <p style="color:white;font-size:14px;">Gasolineras compatibles ubicadas en las rutas más populares</p>
            </div>
        </div>
        <div id="divcontenedor126" style="display:flex;flex-direction:column;justify-content:center;align-items:center;width:25vw;margin-left:2.5vw;margin-right:2.5vw;height:100vh;">
            <p style="text-align:left;width:100%;font-size:18px;margin-bottom:0;">Autonomía</p>
            <p style="text-align:left;width:100%;margin-bottom:20px;font-size:26px;font-weight:bold;">Ir a cualquier lugar</p>
            <p style="width:100%;text-align:left;margin-bottom:5vh;">Con una sola carga viaje más lejos que con cualquier otro vehículo y siga teniendo acceso a más de 25 000 gasolineras compatibles a nivel mundial. Al combinar una autonomía estimada de {{ __($carmodel[0]->autonomia) }} kilómetros con la tecnología de repostería rápida, pasará menos tiempo repostando y más en la carretera.</p>
            <div style="text-align:center;display:flex;flex-direction:column;justify-content:center;align-items:center;width:25%;margin-right:75%;">
                <a href="{{route('perso',$carmodel[0]->id)}}" style="text-decoration:none;font-size:10px;padding-top:5px;padding-bottom:5px;border-radius:100px;width:100%;padding-left:30px;padding-right:30px;color:black;text-align:center;display:flex;flex-direction:column;justify-content:center;align-items:center;border:3px solid black;">ENCARGAR</a>
            </div>
        </div>
    </div>
</div>
@endsection
