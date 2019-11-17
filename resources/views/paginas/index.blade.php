@extends('layouts.app')

@section('content')    
    <div class="text-center">
        <h1>{{$titulo}}</h1>
        <p class="text-center">Porfavor indicanos, eres</p>
        <button type="button" class="btn btn-primary"><a href="/solicitud/create" class="text-body">Cliente</a></button> 
        <button type="button" class="btn btn-success"><a href="{{ route('login') }}" class="text-body">Experto Hipotecario</a></button>
    </div>
@endsection
