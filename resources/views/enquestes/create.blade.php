@extends('layouts.app-master')

@section('content')
    <div class="container" style="margin-top: 20px;">
    <form action="/enquestas" method="post">
            @csrf
            <fieldset>
                <legend>Crea la teva enquesta</legend>
                <fieldset>

                
                <div class="form-group">
                    <label for="nom">Descripcio :</label>
                    <input type="text" class="form-control" name="descripcio" id="descripcio">
                </div>
                <div class="form-group">
                    <label for="localitat">Localitat:</label>
                    <input type="text" class="form-control" name="localitat" id="localitat">
                </div>
                <div class="form-group">
                    <label for="password">Data:</label>
                    <input type="text" class="form-control" name="data" id="data">
                </div>
                <button type="submit" class="btn btn-primary">Crear</button>
            </fieldset>
        </form>
    </div>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @endsection