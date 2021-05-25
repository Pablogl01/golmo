@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="d-flex flex-column">
        <p>{{$status}}</p>
        <a class="nav-link" style="text-decoration:none;color:#292929;border-bottom:5px solid #f8f9fa;" href="{{route('miscoches')}}">Volver</a>
        </div>
    </div>
</div>
@endsection
