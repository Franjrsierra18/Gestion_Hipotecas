@extends('layouts.app')

@section('content')    
    <h1>{{$titulo}}</h1>
    <p>Porfavor indicanos, eres</p>
    <button><a href="hipotecaApp/public/cliente">Cliente</a></button> 
    <button><a href="hipotecaApp/public/experto">Experto Hipotecario</a></button>
@endsection
