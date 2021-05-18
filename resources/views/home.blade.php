@extends('layouts.app')

@section('content')
<div class="container-fluid" style="width:100% !important;">
        <div class="d-flex flex-column justify-content-center align-items-center" style="width:100% !important;">
            @if(count($carmodel) != 0)
                @for($i = 0;$i < count($carmodel);$i++)
                @if($i == 0)
                    <div class="d-flex flex-column" id="fondoimghome" style="height:100vh;width:100vw;background:url({{('storage/'.$image[$i])}}) no-repeat;background-size:cover;position:relative;background-position:center;">
                        <div class="d-flex flex-row justify-content-center align-items-center" style="margin-top:20vh;">
                            <span class="d-flex flex-row justify-content-center h1" id="titulomodelo">{{ __($carmodel[$i]->name) }}</span>
                        </div>
                        <div class="d-flex flex-row justify-content-center align-items-center" style="margin-top:50vh;width:50%;margin-left:25%;margin-right:25%;opacity:0.85;">
                            <a class="btn rounded-pill" style="color:white;background-color:#292929;margin-right:2.5%;padding-top:10px;padding-bottom:10px;width:275px;" href="{{route('perso',$carmodel[$i]->id)}}">PEDIDO PERSONALIZADO</a>
                            <a class="btn rounded-pill" style="color:#292929;background-color:white;margin-left:2.5%;padding-top:10px;padding-bottom:10px;width:275px;" href="{{route('info',$carmodel[$i]->id)}}">INFORMACIÓN</a>
                        </div>
                        <div class="d-flex flex-row justify-content-center align-items-center" style="opacity:0.85;margin-top:20px;">
                            <p style="color:white;font-size:16px;">Conozca su {{ __($carmodel[$i]->name) }}</p>
                        </div>
                    </div>
                @else
                    <div class="d-flex flex-column" id="fondoimghome" style="height:100vh;width:100vw;background:url({{('storage/'.$image[$i])}}) no-repeat;background-size:cover;position:relative;background-position:center;">
                        <div class="d-flex flex-row justify-content-center align-items-center" style="margin-top:20vh;">
                            <span class="d-flex flex-row justify-content-center h1" id="titulomodelo">{{ __($carmodel[$i]->name) }}</span>
                        </div>
                        <div class="d-flex flex-row justify-content-center align-items-center" style="margin-top:55vh;width:50%;margin-left:25%;margin-right:25%;opacity:0.85;">
                            <a class="btn rounded-pill" style="color:white;background-color:#292929;margin-right:2.5%;padding-top:10px;padding-bottom:10px;width:275px;" href="{{route('perso',$carmodel[$i]->id)}}">PEDIDO PERSONALIZADO</a>
                            <a class="btn rounded-pill" style="color:#292929;background-color:white;margin-left:2.5%;padding-top:10px;padding-bottom:10px;width:275px;" href="{{route('info',$carmodel[$i]->id)}}">INFORMACIÓN</a>
                        </div>
                        <div class="d-flex flex-row justify-content-center align-items-center" style="opacity:0.85;margin-top:20px;">
                            <p style="color:white;font-size:16px;">Conozca su {{ __($carmodel[$i]->name) }}</p>
                        </div>
                    </div>
                @endif
                @endfor
            @else
                {{ __('No hay modelos actualmente') }}
            @endif
        </div>
</div>
@endsection
