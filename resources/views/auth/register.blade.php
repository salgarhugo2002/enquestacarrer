@extends('layouts.auth-master')

@section('content')

<h1>Registrat</h1>
    <form action="/register" method='POST'>
        @csrf
        <div class="form-floating mb-3">
            
            <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username">
            <label for="username">Nom d'usuari</label>
            
        </div>
        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
          <label for="email" >Email</label>

          <div id="emailHelp" class="form-text">No compartirem el teu email .</div>
        </div>
        </div>
        <div class="form-floating mb-3">
          
          <input type="password" class="form-control" id="password" name="password">
          <label for="password" >Password</label>

        </div>
        <div class="form-floating mb-3">
            
            <input type="password" class="form-control" id="confirmaciopassword" name="password_confirmation">
            <label for="confirmaciopassword" >Password</label>
          </div>
          <div class="mb-3">
            Si tens usuari <a href="/login">Inicia la sessio</a>
            </div>
        <button type="submit" class="btn btn-primary">Crear conte</button>
      </form>

@endsection