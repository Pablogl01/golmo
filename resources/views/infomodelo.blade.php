@extends('layouts.app')

@section('content')
<div class="container-fluid" style="width:100vw !important;margin:0;padding:0;">
    <div style="z-index:100;display:flex;flex-direction:column;align-items:center;height:100vh;width:100vw;background-image:linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0),rgba(0,0,0,0),rgba(0,0,0,0),rgba(0,0,0,0),rgba(0,0,0,0), black),url({{('../storage/'.$imagenbase)}});background-repeat:no-repeat;background-size:cover;position:relative;background-position:center;overflow-y:hidden;">        
        <div style="display:flex;flex-direction:column;justify-content:center;align-items:center;margin-top:20vh;">
            <p style="color:white;font-size:22px;text-transform:uppercase;">{{ __($carmodel[0]->name) }} </p>
        </div>
        <div style="display:flex;flex-direction:row;justify-content:center;align-items:center;margin-top:40vh;width:60vw;margin-left:20vw;margin-right:20vw;">
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
            <div style="text-align:center;display:flex;flex-direction:column;justify-content:center;align-items:center;width:17.5%;">
                <p style="border-radius:100px;padding-top:5px;padding-bottom:5px;width:100%;padding-left:15px;padding-right:15px;color:white;text-align:center;display:flex;flex-direction:column;justify-content:center;align-items:center;border:3px solid white;">Encargar</p>
            </div>
        </div>
        <p style="margin-top:30px;color:white;font-size:14px;">Las especificaciones se muestran en valores Europeos</p>
    </div>
    <div style="z-index:100;display:flex;flex-direction:row;align-items:center;height:100vh;width:100vw;background-color:black;background-repeat:no-repeat;background-size:cover;position:relative;background-position:center;overflow-y:hidden;">        
        <div style="width:48vw;margin-right:2vw;display:flex;flex-direction:column;justify-content:center;align-items:center;">
            <img src="{{('../storage/'.$imagennegra)}}" alt="imagenmodelo" style="width:100%;height:100%;">
        </div>  
        <div style="width:50vw;display:flex,flex-direction:column;">
            <p>{{$carmodel[0]->id}}</p>
            <p>{{$carmodel[0]->autonomia}}</p>
            <p>{{$carmodel[0]->aceleracion}}</p>
            <p>{{$carmodel[0]->velocidad_maxima}}</p>
            <p>{{$carmodel[0]->caballos}}</p>
            <p>{{$carmodel[0]->autonomia}}</p>

            <img src="{{('../storage/'.$imagenizquierda)}}" alt="imagenmodelo" style="width:200px;height:200px;">
            <img src="{{('../storage/'.$imagenderecha)}}" alt="imagenmodelo" style="width:200px;height:200px;"> 
        </div>      
    </div>   
</div>
@endsection
