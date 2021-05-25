@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="d-flex flex-column">
            <p>{{$carmodel[0]->name}}</p>
            <img src="{{('../storage/'.$imagen[0]->url)}}" width="150px" height="150px">
            <form action="{{route('previsualizar',$carmodel[0]->id)}}" method="POST">
            @csrf
            <br/>
            <p>Colores</p>
            @foreach($color as $col)
            <input type="radio" name="color" id="{{$col->id}}" value="{{$col->id}}" required/>
                <label for="{{$col->id}}"><img src="{{('../storage/'.$col->image)}}" style="width:20px; heigth:20px " /></label>
            @endforeach
            <br/>
            <p>Llantas</p>
            @foreach($llantas as $llanta)
            <input type="radio" name="llanta" id="{{$llanta->id}}" value="{{$llanta->id}}" required/>
                <label for="{{$llanta->id}}"><img src="{{('../storage/'.$llanta->image)}}" style="width:20px; heigth:20px " /></label>
            @endforeach
            <br/>
            <p>Motor</p>
            @foreach($motores as $motor)
            <input type="radio" name="motor" id="{{$motor->id}}" value="{{$motor->id}}" required/>
                <label for="{{$motor->id}}"><img src="{{('../storage/'.$motor->image)}}" style="width:20px; heigth:20px " /></label>
            @endforeach
            <br/>
            <p>Audio</p>
            @foreach($audios as $audio)
            <input type="radio" name="audio" id="{{$audio->id}}" value="{{$audio->id}}" required/>
                <label for="{{$audio->id}}"><img src="{{('../storage/'.$audio->image)}}" style="width:20px; heigth:20px "/></label>
            @endforeach
            <br/>
            <p>Acabados</p>
            @foreach($acabados as $acabado)
            <input type="radio" name="acabado" id="{{$acabado->id}}" value="{{$acabado->id}}" required/>
                <label for="{{$acabado->id}}"><img src="{{('../storage/'.$acabado->image)}}" style="width:20px; heigth:20px " /></label>
            @endforeach
            <br/>
            <p>Precio Total</p>
                <input type="number" name="precio" readonly value="{{$precio}}" style="border: none transparent;outline: none;-moz-appearance: textfield;">
            <br/>
            <br/>
            <input type="submit" class="btn btn-primary" value="Previsualizar cambios">
            <input type="submit" formaction="{{route('guardarperso',$carmodel[0]->id)}}" class="btn btn-primary" value="Guardar personalización" >
            <br/>
            <br/>
        </form>
        </div>
    </div>
</div>
@endsection
