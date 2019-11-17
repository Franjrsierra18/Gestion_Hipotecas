@extends('layouts.app')

@section('content')
    <h1>Solicitudes</h1>
    @if (count($solicitudes) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">% de Ahorro aportado</th>
                    <th scope="col">Precio de Compra</th>
                    <th scope="col">Fecha de Creación</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($solicitudes as $solicitud)
                    <tr>
                        <th scope="row"><a href="/solicitud/{{$solicitud->id}}">{{$solicitud->id}}</a></th>
                        <td>{{$solicitud->nombre}}</td>
                        <td>{{$solicitud->email}}</td>
                        <td>{{($solicitud->ahorros*100)/$solicitud->precio}}%</td>
                        <td>{{$solicitud->precio}}€</td>
                        <td>{{$solicitud->created_at}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay solicitudes</p>
    @endif
@endsection