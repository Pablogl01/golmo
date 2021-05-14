@extends('layouts.app')

@section('content')
<div>
    <div class="row justify-content-center ">
        <div class="col-md-12 d-flex flex-column">
            @if(count($carmodel) != 0)
            @foreach ($carmodel as $model)
            <div class="col d-flex flex-column p-0 justify-content-center" style="background-color:grey;">
                <p class="h4 font-weight-bold d-flex justify-content-center" style="margin-bottom:60vh; margin-left:28%; width:50%;">{{ __($model->name) }}</p>
                <div class="d-flex flex-row justify-content-center " style="margin-bottom:100px;">
                    <a class="btn rounded-pill text-white bg-dark" style="width:230px;" href="{{route('perso',$model->id)}}">PEDIDO PERSONALIZADO</a>
                    <a class="btn rounded-pill text-black bg-light" style="width:200px; margin-left:20px;" href="{{route('perso',$model->id)}}">INFORMACIÓN</a>
                </div>
            </div>
            @endforeach
            @else
                {{ __('No hay modelos actualmente') }}
            @endif
        </div>
    </div>
</div>
@endsection
