@extends('layouts.auth-master')

@section('content')

<h1>Iniciar Sessio</h1>
<form action="/login" method='POST' >
    @csrf
    <div class="form-floating mb-3">
        
       
     <input type="text" class="form-control" id="exampleInputEmail1" name="username">
     <label for="exampleInputEmail1">Nom d'usuari o email</label>
    </div>
    <div class="form-floating mb-3">
        
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        <label for="exampleInputPassword1">Password</label>
    </div>
    <div class="mb-3">
    Si no tens usuari <a href="/register">Crear usuari</a>
    </div>
    <button type="submit" class="btn btn-primary">Iniciar sessio</button>
</form>
@endsection
    
