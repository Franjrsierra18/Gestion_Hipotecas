@extends('layouts.app')

@section('content')    
    <h1>Bienvenido cliente!</h1>
    <p>Para solicitar una hipoteca, porfavor rellene el siguiente formulario</p>
    <form action="" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Nombre y Apellido</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter nombre">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Telefono</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter telefono">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Ahorros aportados</label>
            <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Indique sus ahorros">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword">Precio de compra</label>
            <input type="number" class="form-control" id="exampleInputPassword" placeholder="€€€">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
