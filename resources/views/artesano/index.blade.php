@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Artesano</div>
                <div class="panel-body">
                
                @foreach($artedata as $a)
               
                
                {{$a->nombres}}
                {{$a->apellidopaterno}}
                
                @endforeach
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection