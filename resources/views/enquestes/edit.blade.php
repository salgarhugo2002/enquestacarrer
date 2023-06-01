@extends('layouts.app-master')
@section('content')



<div class="container">
    <?php
    foreach ($enquestas as $key => $value) {

        if ($value->id == $id) {
    ?>
            <form action="/enquestas/{{$value->id}}/" method="post">

                @csrf
                <br>
                @method('PUT')
                <fieldset>
                    <legend>Editar un enquestador</legend>
                    <div class="form-group">
                        <label for="nom">Nom:</label>
                        <input type="text" class="form-control" name="descripcio" id="descripcio" value="{{$value->descripcio}}">
                    </div>
                    <div class="form-group">
                        <label for="localitat">Localitat:</label>
                        <input type="text" class="form-control" name="localitat" id="local" value="{{$value->localitat}}">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="data" class="form-control" name="data" id="pass" value="{{$value->data}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Editar</button>
                </fieldset>
            </form>

    <?php
        }
    }
    ?>

    <form action="{{ route('enquestas.delete', $value->id) }}" method="POST">
        <!-- Agrega la directiva CSRF -->
        @csrf
        <!-- Agrega el método DELETE -->
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection