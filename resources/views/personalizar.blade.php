@extends('layouts.app4')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        var ancho = window.innerWidth;
        var alto = window.innerHeight;
        ancho = Math.round(ancho * 70 / 100);
        alto = Math.round(alto * 80 / 100);
        ancho = ancho.toString();
        console.log(ancho);
        console.log(alto);
        $('#divimagen').attr('style','height:'+alto+'px; width:'+ancho+'px; display:flex; flex-direction:row; justify-content:center; align-items:center;');
        $("#divderecha").attr('style','left:'+ancho+'px;position:absolute;top:118px;display:flex;flex-direction:column;width:30vw;min-height:calc(100vh - 65px - 53px);');

        $('.coloresradio').click(function(){
            $(".labelcoloresradio").css({"border":"1px solid #D7D1D1"});
            if($(this).is(':checked')){
                var valor = $(this).attr("id");
                $(".labelcoloresradio[for='"+valor+"']").css({"border":"2px solid black"});
            }
        });

        $('.llantasradio').click(function(){
            $(".labelllantasradio").css({"border":"1px solid #D7D1D1"});
            if($(this).is(':checked')){
                var valor = $(this).attr("id");
                $(".labelllantasradio[for='"+valor+"']").css({"border":"2px solid black"});
            }
        });

        $('.motoresradio').click(function(){
            $(".labelmotoresradio").css({"border":"1px solid #D7D1D1"});
            if($(this).is(':checked')){
                var valor = $(this).attr("id");
                $(".labelmotoresradio[for="+valor+"]").css({"border":"2px solid black"});
            }
        });

        $('.acabadosradio').click(function(){
            $(".labelacabadosradio").css({"border":"1px solid #D7D1D1"});
            if($(this).is(':checked')){
                var valor = $(this).attr("id");
                $(".labelacabadosradio[for="+valor+"]").css({"border":"2px solid black"});
            }
        });

        $('.audioradio').click(function(){
            $(".labelaudioradio").css({"border":"1px solid #D7D1D1"});
            if($(this).is(':checked')){
                var valor = $(this).attr("id");
                $(".labelaudioradio[for="+valor+"]").css({"border":"2px solid black"});
            }
        });


        $(window).resize(function(){
            var ancho = window.innerWidth;
            var alto = window.innerHeight;
            ancho = Math.round(ancho * 70 / 100);
            alto = Math.round(alto * 80 / 100);
            ancho = ancho.toString();
            console.log(ancho);
            console.log(alto);
            $('#divimagen').attr('style','height:'+alto+'px; width:'+ancho+'px; display:flex; flex-direction:row; justify-content:center; align-items:center;');
            $("#divderecha").attr('style','left:'+ancho+'px;position:absolute;top:118px;display:flex;flex-direction:column;width:30vw;min-height:calc(100vh - 65px - 53px);');
        })
    })
</script>
<style>
    input[type="radio"]{
        position:absolute;
        left:-9999px;
    }
</style>
<div class="container-fluid" style="width:100vw !important;margin:0;padding:0;background-color:#f8f9fa;">
    <div style="display:flex;flex-direction:row;justify-content:center;align-items:center;width:100%;min-height:100vh;">
        <form action="{{route('previsualizar',$carmodel[0]->id)}}" method="POST">
            @csrf
            <div id="divderecha" style="position:absolute;top:118px;left:70vw;display:flex;flex-direction:column;width:30vw;min-height:calc(100vh - 65px - 53px);">
                <div style="display:flex;flex-direction:column;justify-content:center;align-items:center;width:100%;">
                    <h2 style="text-align:center;width:100%:">{{$carmodel[0]->name}}</h2>
                    <p>Entrega estimada: Agosto</p>
                </div>
                <div style="display:flex;flex-direction:column;justify-content:center;align-items:center;width:100%;margin-top:50px;">
                    <h3 style="text-align:center;width:100%:">Colores</h3>
                    <div style="display:flex;flex-direction:row;justify-content:center;align-items:center; width:100%;">
                        @foreach($color as $col)
                            <input type="radio" class="coloresradio" style="/*position:absolute;left:-9999px;*/" name="color" id="{{$col->id}}" value="{{$col->id}}" required/>
                            <label class="labelcoloresradio" for="{{$col->id}}"  style="background-image:url({{('../storage/'.$col->image)}});margin-left:3.33%;margin-right:3.33%;width:30%;height:5vh;display:flex;flex-direction:row;justify-content:center;align-items:center;border:1px solid #D7D1D1;border-radius:100px;"></label>
                        @endforeach
                    </div>
                </div>
                <div style="display:flex;flex-direction:column;justify-content:center;align-items:center;width:100%;margin-top:50px;">
                    <h3 style="text-align:center;width:100%:">Llantas</h3>
                    <div style="display:flex;flex-direction:row;justify-content:center;align-items:center; width:100%;">
                        @foreach($llantas as $llanta)
                            <input type="radio" class="llantasradio" style="/*position:absolute;left:-9999px;*/" name="llanta" id="{{$llanta->id}}" value="{{$llanta->id}}" required/>
                            <label class="labelllantasradio" for="{{$llanta->id}}" style="margin-left:3.33%;margin-right:3.33%;height:150px;width:30%;display:flex;flex-direction:row;justify-content:center;align-items:center;">
                                <img src="{{('../storage/'.$llanta->image)}}" style="object-fit:contain;object-position:center;width:100%;height:100%;">
                            </label>
                        @endforeach
                    </div>
                </div>
                <div style="display:flex;flex-direction:column;justify-content:center;align-items:center;width:100%;margin-top:50px;">
                    <h3 style="text-align:center;width:100%:">Motores</h3>
                    <div style="display:flex;flex-direction:row;justify-content:center;align-items:center; width:100%;">
                        @foreach($motores as $motor)
                            <input type="radio" class="motoresradio" style="/*position:absolute;left:-9999px;*/" name="motor" id="{{$motor->id}}" value="{{$motor->id}}" required/>
                            <label class="labelmotoresradio" for="{{$motor->id}}" style="margin-left:3.33%;margin-right:3.33%;height:150px;width:30%;display:flex;flex-direction:row;justify-content:center;align-items:center;">
                                <img src="{{('../storage/'.$motor->image)}}" style="object-fit:contain;object-position:center;width:100%;height:100%;">
                            </label>
                        @endforeach
                    </div>
                </div>
                <div style="display:flex;flex-direction:column;justify-content:center;align-items:center;width:100%;margin-top:50px;">
                    <h3 style="text-align:center;width:100%:">Acabados</h3>
                    <div style="display:flex;flex-direction:row;justify-content:center;align-items:center; width:100%;">
                        @foreach($acabados as $acabado)
                            <input type="radio" class="acabadosradio" style="/*position:absolute;left:-9999px;*/" name="acabado" id="{{$acabado->id}}" value="{{$acabado->id}}" required/>
                            <label class="labelacabadosradio" for="{{$acabado->id}}" style="background-image:url({{('../storage/'.$acabado->image)}});margin-left:3.33%;margin-right:3.33%;width:30%;height:5vh;display:flex;flex-direction:row;justify-content:center;align-items:center;border:1px solid #D7D1D1;border-radius:100px;"></label>
                        @endforeach
                    </div>
                </div>
                <div style="display:flex;flex-direction:column;justify-content:center;align-items:center;width:100%;margin-top:50px;">
                    <h3 style="text-align:center;width:100%:">Audio</h3>
                    <div style="display:flex;flex-direction:row;justify-content:center;align-items:center; width:100%;">
                        @foreach($audios as $audio)
                            <input type="radio" class="audioradio" style="/*position:absolute;left:-9999px;*/" name="audio" id="{{$audio->id}}" value="{{$audio->id}}" required/>
                            <label class="labelaudioradio" for="{{$audio->id}}" style="margin-left:3.33%;margin-right:3.33%;height:150px;width:30%;display:flex;flex-direction:row;justify-content:center;align-items:center;">
                                <img src="{{('../storage/'.$audio->image)}}" style="object-fit:contain;object-position:center;width:100%;height:100%;">
                            </label>
                        @endforeach
                    </div>
                </div>
            </div>
            <div style="position:fixed;top:65px;left:0;display:flex;flex-direction:column;width:70vw;min-height:calc(100vh - 65px)">
                <div id="divimagen" style="width:70vw;min-height:calc(80vh - 65px);display:flex;flex-direction:row;justify-content:center;align-items:center;/*object-fit:cover;object-position:center;*/">
                    <img src="{{('../storage/'.$imagen[0]->url)}}" style="object-fit:cover;object-position:center center;height:100%;width:100%;">
                </div>
                <div style="width:100%;min-height:calc(20vh - 65px);display:flex;flex-direction:row;justify-content:center;align-items:center;">
                    <div style="padding-top:15px;padding-bottom:15px;width:40%;margin-right:5%;display:flex;flex-direction:row;justify-content:center;align-items:center;">
                        <p style="font-weight:600;font-size:16px;color:#636363;text-align:center;width:100%;margin:0;padding:0;">Precio base: {{$precio}} €</p>
                    </div>
                    <input type="hidden" name="precio" readonly value="{{$precio}}" style="border: none transparent;outline: none;-moz-appearance: textfield;">
                    <div style="padding-top:15px;padding-bottom:15px;width:40%;margin-left:10%;display:flex;flex-direction:row;justify-content:center;align-items:center;">
                        <input type="submit" style="background-color:#f8fafc;margin-right:5%;border-radius:100px;border:1px solid black;;width:100%;height:100%;" value="Previsualizar cambios">
                        <input type="submit" style="background-color:#f8fafc;margin-left:5%;border-radius:100px;border:1px solid black;width:100%;height:100%;" formaction="{{route('guardarperso',$carmodel[0]->id)}}" value="Guardar personalización" >
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection
