@extends('layouts.app')

@section('content')
    <h1>Solicitud de {{$solicitud->nombre}}</h1>
        <div class="well">
            <p><strong>Email: </strong>{{$solicitud->email}}</p>
            <p><strong>Fecha de Creacion: </strong>{{$solicitud->created_at}}</p>
            <p><strong>Precio de Compra: </strong>{{$solicitud->precio}}€</p>
            <p><strong>Ahorros Aportados: </strong>{{($solicitud->ahorros*100)/$solicitud->precio}}%</p>
        </div>
@endsection