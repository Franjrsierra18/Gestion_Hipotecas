@extends('layouts.app')

@section('content')
    <h1>Solicitudes</h1>
    @if (count($solicitudes) > 0)
        @foreach ($solicitudes as $solicitud)
            <div class="well">
                <h3><a href="/solicitud/{{$solicitud->id}}">{{$solicitud->nombre}}</a></h3>
                <h4>{{$solicitud->email}}</h4>
                <small>{{$solicitud->created_at}}</small>
                <h3>{{$solicitud->ahorros}}€</h3>
                <h3>{{$solicitud->precio}}€</h3>
                <h3>{{($solicitud->ahorros*100)/$solicitud->precio}}%</h3>
            </div>
        @endforeach
    @else
        <p>No hay solicitudes</p>
    @endif
@endsection