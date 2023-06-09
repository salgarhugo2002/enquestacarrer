@extends('layouts.app-master')

@section('content')
    <div class="container" style="margin-top: 20px;">
    <form action="/enquestadors" method="post">
            @csrf
            <fieldset>
                <legend>Donar d'alta un enquestador</legend>
                <fieldset>

                
                <div class="form-group">
                    <label for="nom">Nom:</label>
                    <input type="text" class="form-control" name="nom" id="nom">
                </div>
                <div class="form-group">
                    <label for="localitat">Localitat:</label>
                    <input type="text" class="form-control" name="localitat" id="localitat">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Crear</button>
            </fieldset>
        </form>
    </div>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @endsection