@extends('layouts.app3')

@section('content')
    <div class="container-fluid" style="width:100vw !important;margin:0;padding:0;background-color:#f8f9fa;">
        <div class="d-flex flex-column" style="width:100%">
            <!-- Nav Cliente -->     
            <nav class="navbar navbar-expand-lg navbar-light bg-light navapp" style="padding-bottom:0;padding-left:0;padding-right:0;margin-bottom:0;margin-left:10%;margin-right:10%;">
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('profile')}}">Datos personales</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('seguridad')}}">Inicio de sesión y seguridad</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('miscoches')}}">Mis coches</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('misofertas')}}">Mis ofertas</a>
                <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #8A8A8A;" href="{{route('privacidad')}}">Privacidad y cookies</a>
            </nav>
            <div style="background-color:#191F22;min-height:calc(100vh - 65px - 53px);width:100%;">
                <div class="divcontenedorvariantes" style="margin-left:10%;margin-right:10%;padding-top:25px;">
                <p class="h3 text-white" style="font-weight: bold;">Política de Privacidad </p>
                    <p class="text-white">En pocos minutos podrá llevar a cabo su configuración de privacidad y cookies.</p>
                    <div style="background-color:white;min-height:calc(70vh - 65px - 53px);padding-top:5vh;padding-bottom:5vh;padding-left:3vw;padding-right:3vw;margin-bottom:5vh;">
                        <p class="h4" style="font-weight: bold; border-bottom:1px solid #D7D1D1;padding-bottom:5px;">Nuestras políticas de privacidad</p>
                        <div id="privacidad-f" style="display:flex;flex-direction:row;justify-content:space-between;width:90%;">
                            <p id="privacidad-f1" style="width:40%">
                            Acepto que Golmo S.A podría tratar mi información personal relativa a vehículos, servicios y productos para el desarrollo y la mejora de sus productos y servicios, para el análisis y corrección de fallos, y para la supervisión de productos, como parte de su mejora de estos.Podré revocar mi consentimiento en cualquier momento sin efecto retroactivo y sin aducir motivo alguno, esencialmente desde el apartado de «Privacidad» (Privacy) del Portal My Porsche con las opciones de configuración correspondientes.
                            </p>
                            <div id="privacidad-f2" style="display:flex;flex-direction:column;justify-content:center;width:40%;">
                                <p class="h5">Ejemplo de uso de sus datos:</p>
                                <p style="margin-left:20px">Si, por ejemplo, se transmite el estado de la batería del vehículo, podemos utilizarlo para el análisis y la mejora continua de la batería.</p>
                                <img src="https://www.porschepreston.co.uk/binary/getasync/491a9d5e-1613-4665-bc21-cb8f4f320ca8/image.jpg?s=6" style="width:100%">
                            </div>
                        </div>
                        <p class="h4" style="margin-top:15px;font-weight: bold; border-bottom:1px solid #D7D1D1;padding-bottom:5px;">Nuestras políticas sobre el uso de cookies</p>
                        <div style="margin-top:15px;display:flex;flex-direction:column;justify-content:center;align-items:center;width:100%;">
                            <p>Esta política de cookies se aplica de manera complementaria a la Declaración de privacidad específica de nuestra página web y le ofrece información complementaria sobre alcance, finalidad y objetivos del tratamiento de datos en caso de cookies y tecnologías de seguimiento (en lo sucesivo, “cookies“).</p>
                            <p>Utilizamos cookies con diferentes propósitos y funciones. Aquí especificamos con qué objetivo se utilizan (cookies necesarias desde el punto de vista técnico, cookies de análisis y cookies de rendimiento y marketing), por cuánto tiempo se almacenan y utilizan (tiempo de almacenaje), si son propias de nuestra página web o de terceros y mediante qué proveedor se instaló cada Cookie (en lo sucesivo, “el Proveedor de cookies“).</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
