@extends('layouts.app3')

@section('content')
    <div class="container-fluid" style="width:100vw !important;margin:0;padding:0;background-color:#f8f9fa;">
        <div class="d-flex flex-column" style="width:100%">
            <!-- Nav Cliente -->     
            <nav class="navbar navbar-expand-lg navbar-light bg-light navapp" style="padding-bottom:0;padding-left:0;padding-right:0;margin-bottom:0;margin-left:10%;margin-right:10%;">
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('profile')}}">Datos personales</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('seguridad')}}">Inicio de sesión y seguridad</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('miscoches')}}">Mis coches</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #8A8A8A;" href="{{route('misofertas')}}">Mis ofertas</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('privacidad')}}">Privacidad y cookies</a>
            </nav>
            <div style="background-color:#191F22;min-height:calc(100vh - 65px - 53px);width:100%;">
                <div class="divcontenedorvariantes" style="margin-left:10%;margin-right:10%;padding-top:25px;">
                <p class="h3 text-white" style="font-weight: bold;">Mis ofertas</p>
                    <p class="text-white">Aquí puede ver todas las ofertas solicitadas. </p>
                    <div style="background-color:white;min-height:calc(70vh - 65px - 53px);padding-top:5vh;padding-bottom:5vh;padding-left:3vw;padding-right:3vw;margin-bottom:5vh;">
                        <p class="h4" style="font-weight: bold; border-bottom:1px solid #D7D1D1;padding-bottom:5px;">Mis solicitudes</p>
                        @if(count($ofertas)!=0)
                            @foreach($ofertas as $oferta)
                            <div style="display:flex;flex-direction:row;width:100%;">
                                <div class="divofertas" style="width:50%;display:flex;flex-direction:row;justify-content:center;align-items:center;">
                                    <div class="d-flex flex-row divcontenedor2 divofertas2" style="padding-top:5px;width:45%;margin-right:5%">
                                    @if($oferta->type==1)    
                                        <p class="text-secondary pperfil" style="width:25%;">Tipo</p>
                                        <p class="ml-4 pperfil" style="width:75%;">Oferta comercial</p>
                                    @else
                                        <p class="text-secondary pperfil" style="width:25%;">Tipo</p>
                                        <p class="ml-4 pperfil" style="width:75%;">Prueba de conducción</p>
                                    @endif
                                    </div>
                                    <div class="d-flex flex-row divcontenedor2" style="padding-top:5px;width:45%;margin-left:2.5%;margin-right:2.5%">
                                        <p class="text-secondary pperfil" style="width:25%;">Fecha</p>
                                        <p class="ml-4 pperfil" style="width:75%;">{{$oferta->created_at}}</p>
                                    </div>
                                </div>
                                <div class="divofertas" style="width:50%;display:flex;flex-direction:row;justify-content:center;align-items:center;">
                                    <div class="d-flex flex-row divcontenedor2" style="padding-top:5px;width:45%;margin-left:2.5%;margin-right:2.5%;">
                                    @if($oferta->status==1)
                                        <p class="text-secondary pperfil" style="width:25%;">Estado</p>
                                        <p class="ml-4 pperfil" style="width:75%;color:#FF9900;">En espera</p>
                                    @elseif($oferta->status==2)
                                        <p class="text-secondary pperfil" style="width:25%;">Estado</p>
                                        <p class="ml-4 pperfil" style="width:75%;color:green;">Aceptada</p>
                                    @else
                                        <p class="text-secondary pperfil" style="width:25%;">Estado</p>
                                        <p class="ml-4 pperfil" style="width:75%;color:red;">Rechazada</p>
                                    @endif
                                    </div>
                                    <div class="d-flex flex-row divcontenedor2 divvermas" style="width:45%;margin-left:5%;margin-bottom:1rem;padding-top:5px;">
                                        <a style="text-decoration:none;color:#292929;" href="{{route('veroferta',$oferta)}}">
                                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="17.5px" height="22.5px" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                                            <metadata>
                                            Created by potrace 1.16, written by Peter Selinger 2001-2019
                                            </metadata>
                                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                            fill="#000000" stroke="none">
                                            <path d="M2365 4049 c-558 -52 -1213 -376 -1820 -898 -126 -109 -387 -362
                                            -476 -464 -66 -73 -69 -80 -69 -127 0 -48 3 -54 69 -127 169 -190 458 -458
                                            677 -628 518 -401 1024 -642 1519 -721 224 -36 528 -22 781 36 393 91 849 321
                                            1273 642 237 181 536 453 722 660 76 85 79 90 79 137 0 47 -5 56 -79 151 -370
                                            475 -867 874 -1377 1105 -418 188 -885 273 -1299 234z m450 -230 c479 -50 979
                                            -273 1445 -645 144 -116 421 -385 539 -524 l72 -85 -158 -155 c-694 -682
                                            -1422 -1081 -2034 -1118 -370 -22 -687 52 -1104 258 -402 199 -770 470 -1165
                                            857 l-155 153 161 158 c531 523 1104 891 1609 1035 269 77 502 96 790 66z"/>
                                            <path d="M2435 3410 c-342 -54 -617 -301 -707 -635 -30 -113 -30 -317 0 -430
                                            65 -240 230 -444 447 -551 136 -67 223 -87 385 -87 162 0 249 20 385 87 217
                                            108 383 312 446 551 31 114 31 318 1 430 -99 369 -417 624 -797 640 -55 2
                                            -127 0 -160 -5z m279 -236 c191 -46 363 -200 438 -389 27 -69 32 -96 36 -195
                                            5 -131 -9 -204 -60 -307 -92 -189 -289 -329 -493 -351 -293 -31 -557 129 -669
                                            406 -30 74 -31 83 -31 222 0 139 1 148 31 222 124 305 435 468 748 392z"/>
                                            </g>
                                            </svg>
                                            Ver mas
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @else
                            <p>No tienes solicitudes</p>
                        @endif
                    </div>
                </div>
                <a style="width:100vw;background-color:#191F22;color:white;padding-left:10%;padding-bottom:2vh;text-decoration:none;" href="{{route('realizaroferta')}}">Solicitar oferta</a>
            </div>
        </div>
    </div>
@endsection
