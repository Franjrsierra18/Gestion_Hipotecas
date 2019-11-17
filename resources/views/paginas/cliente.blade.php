@extends('layouts.app')

@section('content')    
    <h1>Bienvenido cliente!</h1>
    <p>Para solicitar una hipoteca, porfavor rellene el siguiente formulario</p>
    
    {!! Form::open(['action' => 'SolicitudController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('nombre', 'Nombre Completo')}}
            {{Form::text('nombre', '', ['class' => 'form-control', 'placeholder' => 'Nombre y Apellido'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'Dirección E-mail')}}
            {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'E-mail'])}}
        </div>
        <div class="form-group">
            {{Form::label('telefono', 'Numero de Teléfono')}}
            {{Form::number('telefono', '', ['class' => 'form-control', 'placeholder' => '034888777666'])}}
        </div>
        <div class="form-group">
            {{Form::label('ahorros', 'Ahorros Aportados')}}
            {{Form::number('ahorros', '', ['class' => 'form-control', 'placeholder' => 'Indique cantidad €€€'])}}
        </div>
        <div class="form-group">
            {{Form::label('precio', 'Precio de Compra')}}
            {{Form::number('precio', '', ['class' => 'form-control', 'placeholder' => 'Indique cantidad €€€'])}}
        </div>
        {{Form::submit('Solicitar', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
