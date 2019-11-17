@extends('layouts.app')

@section('content')
    <h1>Solicitud de {{$solicitud->nombre}}</h1>
        <div class="well">
            <h4>{{$solicitud->email}}</h4>
            <small>{{$solicitud->created_at}}</small>
            <h3>{{$solicitud->ahorros}}€</h3>
            <h3>{{$solicitud->precio}}€</h3>
            <h3>{{($solicitud->ahorros*100)/$solicitud->precio}}%</h3>
        </div>
@endsection