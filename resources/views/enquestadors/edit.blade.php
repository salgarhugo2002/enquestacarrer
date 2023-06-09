@extends('layouts.app-master')
@section('content')



<div class="container">
    <?php
    foreach ($enquestadors as $key => $value) {

        if ($value->id == $id) {
    ?>
            <form action="/enquestadors/{{$value->id}}/" method="post">

                @csrf
                <br>
                @method('PUT')
                <fieldset>
                    <legend>Editar un enquestador</legend>
                    <div class="form-group">
                        <label for="nom">Nom:</label>
                        <input type="text" class="form-control" name="nom" id="nom" value="{{$value->nom}}">
                    </div>
                    <div class="form-group">
                        <label for="localitat">Localitat:</label>
                        <input type="text" class="form-control" name="localitat" id="local" value="{{$value->localitat}}">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" name="password" id="pass" value="{{$value->password}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Editar</button>
                </fieldset>
            </form>

    <?php
        }
    }
    ?>

    <form action="{{ route('enquestadors.delete', $value->id) }}" method="POST">
        <!-- Agrega la directiva CSRF -->
        @csrf
        <!-- Agrega el método DELETE -->
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection