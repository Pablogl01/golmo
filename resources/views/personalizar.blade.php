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
            <input type="radio" name="color" id="{{$col->id}}" value="{{$col->id}}" />
                <label for="{{$col->id}}"><img src="{{('../storage/'.$col->image)}}" style="width:20px; heigth:20px " /></label>
            @endforeach
            <br/>
            <p>Llantas</p>
            @foreach($llantas as $llanta)
            <input type="radio" name="llanta" id="{{$llanta->id}}" value="{{$llanta->id}}"/>
                <label for="{{$llanta->id}}"><img src="{{('../storage/'.$llanta->image)}}" style="width:20px; heigth:20px " /></label>
            @endforeach
            <br/>
            <br/>
            <input type="submit" class="btn btn-primary" value="Previsualizar cambios">
            <input type="submit" formaction="{{route('guardarperso')}}" class="btn btn-primary" value="Guardar personalización" >
            <br/>
            <br/>
        </form>
        </div>
    </div>
</div>
@endsection
