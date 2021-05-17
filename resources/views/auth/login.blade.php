@extends('layouts.app2')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function(){

        $(".inputs").change(function(){
            var email = $("#email").val();
            var password = $("#password").val();

            if(email != "" && password != ""){
                $("#button").css({"width":"100%","margin-bottom":"5px","border":"2px solid #D3D3D3","background-color":"#D3D3D3","outline":"none","font-size":"18px","color":"white"});
            }
            else{
                $("#button").css({"width":"100%","margin-bottom":"5px","border":"2px solid #D3D3D3","background-color":"transparent","outline":"none","font-size":"18px","color":"#D3D3D3"});
            }
        });

        $("#showpasswordimg").click(function(){
            var x = document.getElementById("password");

            if(x.type == "password"){
                x.type = "text";
            }
            else{
                x.type = "password";
            }
        });
    })

</script>
<div class="container-fluid" style="font-family: 'Average Sans', sans-serif;">
    <div class="row" style="min-height:100%;">
        <div class="col-md-8 d-flex flex-column justify-content-center" style="margin:0;padding:0;background-color:#EEEEEE;">
            <img src="https://www.wallpapertip.com/wmimgs/3-37896_facebook-cover-photo-audi.jpg" alt="portadalogin" class="img-fluid" style="min-height:75% !important;">
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
        <div class="col-md-4 d-flex flex-column justify-content-center" style="background-color:#FFFAFA;min-height:100% !important;">
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
                                <input id="email" class="inputs" type="email" name="email" placeholder="Correo electrónico" required autocomplete="email" autofocus style="width:100%; margin-bottom:15px; border-right:none; border-top:none; border-left:none; border-bottom:2px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;">
                            </div>
                        </div>

                        <div>
                            <div class="d-flex flex-row justify-content-center align-items-center">
                                <input id="password" class="inputs" type="password" name="password" placeholder="Contraseña" required autocomplete="current-password"  style="position:relative;width:100%; margin-bottom:5px; border-right:none; border-top:none; border-left:none; border-bottom:2px solid #C6C6C6;background-color:transparent; outline:none; color:#4E4E4E; caret-color:#939393;font-size:18px;">
                                <!--<img src="https://ibb.co/CWxfL7x" id="showpasswordimg" alt="imgojo" style="width:25px;height:auto; position:absolute;z-index:100;right:5vw;margin-bottom:5px;"></img>-->
                                <svg id="showpasswordimg" style="position:absolute;z-index:100;right:5vw;margin-bottom:5px;" version="1.0" xmlns="http://www.w3.org/2000/svg" width="25px" height="30px" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
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
                            </div>
                        </div>

                        <div class="mt-4">
                            <div>
                                <button type="submit" id="button" style="width:100%; margin-bottom:5px; border:2px solid #D3D3D3;background-color:transparent; outline:none;font-size:18px;color:#D3D3D3;">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>

                        <div class="mt-5 d-flex flex-row justify-content-center align-items-center">
                            <div>
                            <a href="{{ __('register') }}" id="a" style="color:black; border-bottom:1px solid black;font-size:18px;text-decoration:none;">Registrate</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>                
        </div>
    </div>
</div>

