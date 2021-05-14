@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-8 d-flex flex-column">
            <div class="col d-flex flex-column p-0 justify-content-center">
                <p class="h4 font-weight-bold d-flex justify-content-center" style="margin-bottom:60vh; margin-left:28%; width:50%;">{{ __($carmodel[0]->name) }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
