@extends('layouts.app2')

@section('content')

<div class="container-fluid" style="font-family: 'Average Sans', sans-serif;">
    <div class="row">
        <div class="col-md-8 d-flex flex-column justify-content-center" style="margin:0;padding:0;background-color:#EEEEEE;">
            <img src="https://www.wallpapertip.com/wmimgs/3-37896_facebook-cover-photo-audi.jpg" alt="portadalogin" class="img-fluid">
            <div class="d-flex flex-column align-items-center" style="font-size:16px;margin-left:2%;margin-right:2%;text-align:center">
                <div class="d-flex justify-content-center align-items-center pt-4">
                    <p>Texto legal</p><p style="margin-left:15px;margin-right:15px;">|<p>
                    <p>Condiciones de uso</p><p style="margin-left:15px;margin-right:15px;">|<p>
                    <p>Declaración sobre protección de datos</p><p style="margin-left:15px;margin-right:15px;">|<p>
                    <p>Normativa de cookies</p>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <p>Condiciones de licencia de terceros</p>
                </div>
                <div class="d-flex justify-content-center align-items-center pb-3">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                    width="50pt" height="24.000000pt" viewBox="0 0 367.000000 54.000000"
                    preserveAspectRatio="xMidYMid meet" style="opacity:0.3;">
                    <metadata>
                    Created by potrace 1.16, written by Peter Selinger 2001-2019
                    </metadata>
                    <g transform="translate(0.000000,54.000000) scale(0.100000,-0.100000)"
                    fill="#000000" stroke="none">
                    <path d="M0 485 l0 -55 294 0 294 0 31 29 c19 18 31 39 31 55 l0 26 -325 0
                    -325 0 0 -55z"/>
                    <path d="M750 535 c0 -3 6 -21 14 -39 27 -65 33 -66 314 -66 167 0 261 4 275
                    11 31 16 57 50 57 77 l0 22 -330 0 c-181 0 -330 -2 -330 -5z"/>
                    <path d="M1510 270 l0 -270 298 0 c322 0 322 1 351 57 28 54 34 53 -259 53
                    l-270 0 0 215 0 215 -60 0 -60 0 0 -270z"/>
                    <path d="M2260 483 l0 -58 147 -147 c127 -128 151 -148 178 -148 27 0 51 20
                    178 148 l147 147 0 58 0 57 -33 0 c-28 0 -49 -16 -162 -130 l-130 -130 -130
                    130 c-113 113 -134 130 -163 130 l-32 0 0 -57z"/>
                    <path d="M3021 508 c5 -18 20 -43 34 -55 26 -23 31 -23 281 -23 208 0 260 3
                    284 15 33 17 50 43 50 74 0 21 -3 21 -329 21 l-330 0 10 -32z"/>
                    <path d="M750 165 l0 -165 330 0 330 0 0 165 0 165 -60 0 -60 0 0 -110 0 -110
                    -210 0 -210 0 0 110 0 110 -60 0 -60 0 0 -165z"/>
                    <path d="M3010 165 l0 -165 330 0 330 0 0 165 0 165 -55 0 -55 0 0 -110 0
                    -110 -215 0 -215 0 0 110 0 110 -60 0 -60 0 0 -165z"/>
                    <path d="M0 189 l0 -131 29 -29 29 -29 296 0 296 0 0 160 0 160 -221 0 -221 0
                    6 -27 c4 -16 20 -40 37 -55 29 -28 31 -28 159 -28 l130 0 0 -50 0 -50 -195 0
                    c-241 0 -235 -3 -235 125 l0 85 -55 0 -55 0 0 -131z"/>
                    <path d="M2260 142 l0 -142 60 0 60 0 0 83 0 83 -60 59 -60 59 0 -142z"/>
                    <path d="M2847 222 l-57 -58 0 -82 0 -82 60 0 60 0 0 140 c0 77 -1 140 -3 140
                    -1 0 -28 -26 -60 -58z"/>
                    </g>
                    </svg>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex flex-column justify-content-center" style="background-color:#FFFAFA;">
            <div class="d-flex flex-column align-items-center">
                <img src="http://drive.google.com/uc?export=view&id=1UpyHgQ9jYR4aaxlIfSoyWupH-JjGHJ8s" alt="logogolmo" style="max-width:20%;height:auto;">
                <div style="margin-top:20px;"><p style="font-size:20px;">GOLMO <span style="font-weight:bolder;">ID</span><p></div>
            </div>    
            <div class="d-flex flex-column ml-5 mr-5 mt-4">
                <div class="d flex flex-column align-items-left">
                    <p style="font-size:28px;color:#5C5B5B;margin:0;">Bienvenido</p>
                    <p style="font-size:15px;color:#706F6F">GOLMO S.A.</p>
                </div>
                <div class="d flex flex-column justify-content-center align-items-center mt-5">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div>
                            <div>
                                <input id="email" onfocusout="changeButton()" type="email" name="email" placeholder="Correo electrónico" required autocomplete="email" autofocus style="width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:2px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;">
                            </div>
                        </div>

                        <div>
                            <div>
                                <i class="bi bi-eye" style="background-color:red;" onclick="showPassword()"></i>
                                <input id="password" onfocusout="changeButton()" type="password" name="password" placeholder="Contraseña" required autocomplete="current-password"  style="width:100%; margin-bottom:5px; border-right:none; border-top:none; border-left:none; border-bottom:2px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;">
                            </div>
                        </div>

                        <div class="mt-4">
                            <div>
                                <button type="submit" id="button" style="width:100%; margin-bottom:5px; border:2px solid #D3D3D3;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;color:#D3D3D3;">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>                
        </div>
    </div>
</div>

